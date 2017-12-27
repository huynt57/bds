<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\CreateContactRequest;
use App\Models\Category;
use App\Models\Contact;
use App\Models\House;
use App\Models\Post;
use App\Models\Project;
use App\Models\Region;
use App\Models\User;
use App\Models\Wishlist;
use Faker\Factory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    //

    public function saveFile($file, $old = null)
    {
        $filename = md5(time()) . str_slug($file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('files/' . $filename));
        return $filename;
    }

    public function index()
    {
        $features = House::publish()->where('is_feature', true)->orderBy('id', 'desc')->take(15)->get();
        $sells = House::publish()->whereIn('type', [House::SALE, House::FOR_SALE])->orderBy('id', 'desc')->take(15)->get();
        $rents = House::publish()->whereIn('type', [House::RENT, House::FOR_RENT])->orderBy('id', 'desc')->take(15)->get();
        $regions = Region::all();
        $partners = User::partner()->get();
        return view('frontend.index', compact('features', 'sells', 'rents', 'regions', 'partners'));
    }

    public function getAgents()
    {
        $agents = User::where('type', User::AGENT)->paginate(10);

        return view('frontend.agents', compact('agents'));
    }

    public function getPostBySlug($slug, $id)
    {
        $post = Post::publish()->find($id);

        if (!$post) {
            return redirect()->back()->with('error', 'Dữ liệu không hợp lệ');
        }

        return view('frontend.post', compact('post'));
    }

    public function getHouseById($slug, $id)
    {
        $house = House::publish()->find($id);

        if (!$house) {
            return redirect()->back()->with('error', 'Dữ liệu không hợp lệ');
        }

        return view('frontend.house', compact('$house'));
    }

    public function getHouseMarker($houses, $province = null, $district = null, $ward = null)
    {

        $returnArr = [];

        foreach ($houses as $house) {
            $itemArr = [];
            $itemArr['name'] = $house->name;
            $itemArr['location_latitude'] = $house->lat;
            $itemArr['location_longitude'] = $house->lng;
            $itemArr['info_window'] = view('frontend.info_window', compact('house'))->render();
            $itemArr['map_image_url'] = $house->main_images;
            $itemArr['name_point'] = $house->name;
            $itemArr['description_point'] = 'tt';
            $itemArr['get_directions_start_address'] = '';
            $itemArr['phone'] = '0444444444444';
            $itemArr['url_point'] = '';

            $returnArr[] = $itemArr;
        }

        $centerPoint['lat'] = -1;
        $centerPoint['lng'] = -1;

        if (isset($returnArr[0])) {
            $centerPoint['lat'] = $returnArr[0]['location_latitude'];
            $centerPoint['lng'] = $returnArr[0]['location_longitude'];
        } else {

            if (!empty($province)) {
                $provinceItem = \DB::table('province')->where('provinceid', $province)->first();
                if ($provinceItem) {
                    $lat = $provinceItem->lat;
                    $lng = $provinceItem->lng;
                    $centerPoint['lat'] = $lat;
                    $centerPoint['lng'] = $lng;
                }
            }

            if (!empty($district) && !empty($province)) {
                $districtItem = \DB::table('district')->where('districtid', $district)->first();
                if ($districtItem) {
                    $lat = $districtItem->lat;
                    $lng = $districtItem->lng;
                    $centerPoint['lat'] = $lat;
                    $centerPoint['lng'] = $lng;
                }
            }


            if (!empty($district) && !empty($province) && !empty($ward)) {
                $wardItem = \DB::table('ward')->where('wardid', $ward)->first();
                if ($wardItem) {
                    $lat = $wardItem->lat;
                    $lng = $wardItem->lng;
                    $centerPoint['lat'] = $lat;
                    $centerPoint['lng'] = $lng;
                }
            }

        }


        return [
            'data' => ['Historic' => $returnArr],
            'center' => $centerPoint
        ];
    }

    public function getRegions()
    {
        $regions = Region::all();
        return view('frontend.regions', compact('regions'));
    }

    public function contactAgent(Request $request)
    {
        $data = $request->all();

        if (empty(trim($data['phone']))) {
            return response([
                'status' => 0,
                'message' => 'Không được để trống SĐT'
            ]);
        }

        if (empty(trim($data['name']))) {
            return response([
                'status' => 0,
                'message' => 'Không được để trống tên'
            ]);
        }

        if (empty(trim($data['message']))) {
            return response([
                'status' => 0,
                'message' => 'Không được để trống tin nhắn'
            ]);
        }

        if (!empty($data['house_id'])) {
            $houseId = $data['house_id'];
            $item = House::find($houseId);
        } else if (!empty($data['project_id'])) {
            $projectId = $data['project_id'];
            $item = Project::find($projectId);
        }

        if ($item->agent) {
            $data['agent_id'] = $item->agent->id;
        }

        $data['status'] = Contact::PENDING;

        Contact::create($data);

        return response([
            'status' => 1,
            'message' => 'Cám ơn bạn đã liên hệ'
        ]);
    }

    public function getPostCategory($slug, $id, Request $request)
    {
        $category = Category::find($id);
        if (!$category) {
            return redirect()->back()->with('error', 'Dữ liệu không hợp lệ');
        }

        $posts = Post::where('category_id', $category->id)->paginate(10);
        $categories = Category::all();

        return view('frontend.posts', compact('posts', 'categories'));
    }

    public function getHouseByAttribute(Request $request)
    {
        $type = $request->input('type');
        $categoryId = $request->input('category_id');
        $keyword = $request->input('keyword');
        $radius = $request->input('radius');

        $lat = $request->input('lat');
        $lng = $request->input('lng');
        $cityId = $request->input('province');
        $district = $request->input('district');
        $ward = $request->input('ward');

        $coordinates['latitude'] = $lat;
        $coordinates['longitude'] = $lng;

        $orderBySize = $request->input('order_by_size');
        $orderByPrice = $request->input('order_by_price');
        $orderByDate = $request->input('order_by_date');



        $items = House::publish();


        if (!empty(trim($keyword))) {
            $searchTerms = explode(' ', $keyword);
            foreach ($searchTerms as $searchTerm) {
                $items->where(function ($query) use ($searchTerm) {
                    $query->where('name', 'LIKE', '%' . $searchTerm . '%');
                    $query->orWhere('address', 'LIKE', '%' . $searchTerm . '%');
                });
            }
        }

        if (!empty($categoryId)) {
            $items = $items->where('category_id', $categoryId);
        }

        if (isset($type)) {
            if ($type == House::BOTH_SALE) {
                $items = $items->whereIn('type', [House::SALE, House::FOR_SALE]);
            } else if ($type == House::BOTH_RENT) {
                $items = $items->whereIn('type', [House::RENT, House::FOR_RENT]);
            } else {
                $items = $items->where('type', $type);
            }
        }

        if (!empty($lat) && !empty($lng)) {
            $items = $items->isWithinMaxDistance($coordinates, $radius);
        }

        if (!empty($cityId)) {
            $items = $items->where('city_id', $cityId);
        }

        if (!empty($district)) {
            $items = $items->where('district_id', $district);
        }

        if (!empty($ward)) {
            $items = $items->where('ward_id', $ward);
        }

        if(!empty($orderByPrice))
        {
            $items = $items->orderBy('price', $orderByPrice);
        }

        if(!empty($orderByDate))
        {
            $items = $items->orderBy('begin_year', $orderByDate);
        }

        if(!empty($orderBySize))
        {
            $items = $items->orderBy('size', $orderBySize);
        }

        if(empty($orderBySize) && empty($orderByDate) && empty($orderByPrice))
        {
            $items = $items->orderBy('id', 'desc');
        }

        if ($request->ajax()) {

            $markers = $this->getHouseMarker($items->get());
            $items = $items->paginate(10);

            return response([
                'markers' => $markers,
                'items' => view('frontend.houses', compact('items'))->render()
            ]);
        }

        $items = $items->paginate(10);

        return view('frontend.houses', compact('items'));

    }

    public function getSubLocation(Request $request)
    {
        $id = $request->input('id');
        $type = $request->input('type');

        if ($type == 'province') {
            $type = 'districtid';
            $items = \DB::table('district')->where('provinceid', $id)->get();
        } else if ($type == 'district') {
            $type = 'wardid';
            $items = \DB::table('ward')->where('districtid', $id)->get();
        }

        return view('frontend.locations', compact('items', 'type'))->render();
    }

    public function getHouseByAttributeAjax(Request $request)
    {
        $type = $request->input('type');
        $categoryId = $request->input('category_id');
        $keyword = $request->input('keyword');
        $radius = $request->input('radius');

        $lat = $request->input('lat');
        $lng = $request->input('lng');

        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');

        $minSize = $request->input('min_size');
        $maxSize = $request->input('max_size');

        $beds = $request->input('beds');
        $bathrooms = $request->input('bathrooms');

        $province = $request->input('province');
        $district = $request->input('district');
        $ward = $request->input('ward');

        $coordinates['latitude'] = $lat;
        $coordinates['longitude'] = $lng;
        $isMore = $request->input('is_more');

        $orderBySize = $request->input('order_by_size');
        $orderByPrice = $request->input('order_by_price');
        $orderByDate = $request->input('order_by_date');


        $items = House::publish();


        if (!empty(trim($keyword))) {
            $searchTerms = explode(' ', $keyword);
            foreach ($searchTerms as $searchTerm) {
                $items->where(function ($query) use ($searchTerm) {
                    $query->where('name', 'LIKE', '%' . $searchTerm . '%');
                    $query->orWhere('address', 'LIKE', '%' . $searchTerm . '%');
                });
            }
        }

        if (!empty($categoryId)) {
            $items = $items->where('category_id', $categoryId);
        }

        if (!empty($province)) {
            $items = $items->where('city_id', $province);
        }

        if (!empty($district)) {
            $items = $items->where('district_id', $district);
        }

        if (!empty($ward)) {
            $items = $items->where('ward_id', $ward);
        }

        if (isset($type)) {
            if ($type == House::BOTH_SALE) {

                $items = $items->whereIn('type', [House::SALE, House::FOR_SALE]);
            } else if ($type == House::BOTH_RENT) {
                $items = $items->whereIn('type', [House::RENT, House::FOR_RENT]);
            } else {
                $items = $items->where('type', $type);

            }
        }


        if (!empty($lat) && !empty($lng)) {
            $items = $items->isWithinMaxDistance($coordinates, $radius);
        }

        if (!empty($minSize)) {
            $items = $items->where('size', '>=', $minSize);
        }

        if (!empty($maxSize)) {
            $items = $items->where('size', '<=', $maxSize);
        }

        if (!empty($minPrice)) {
            $items = $items->where('price', '>=', $minPrice);
        }

        if (!empty($maxPrice)) {
            $items = $items->where('price', '<=', $maxPrice);
        }

        if (!empty($beds)) {
            $items = $items->where('beds', '>=', $beds);
        }

        if (!empty($bathrooms)) {
            $items = $items->where('bath', '>=', $bathrooms);
        }



        if(!empty($orderByPrice))
        {
            $items = $items->orderBy('price', $orderByPrice);
        }

        if(!empty($orderByDate))
        {
            $items = $items->orderBy('begin_year', $orderByDate);
        }

        if(!empty($orderBySize))
        {
            $items = $items->orderBy('size', $orderBySize);
        }

        if(empty($orderByPrice) && empty($orderByDate) && empty($orderBySize))
        {
            $items = $items->orderBy('id', 'desc');
        }

        $markers = $this->getHouseMarker($items->get(), $province, $district, $ward);
        $items = $items->paginate(10);

        return response([
            'markers' => $markers,
            'items' => view('frontend.houses_ajax', compact('items', 'isMore'))->render(),
            'url' => $request->fullUrl()
        ]);
    }

    public function getProjectByAttribute(Request $request)
    {
        $type = $request->input('type');
        $categoryId = $request->input('category_id');
        $keyword = $request->input('keyword');
        $radius = $request->input('radius');

        $lat = $request->input('lat');
        $lng = $request->input('lng');

        $coordinates['latitude'] = $lat;
        $coordinates['longitude'] = $lng;

        $orderBySize = $request->input('order_by_size');
        $orderByPrice = $request->input('order_by_price');
        $orderByDate = $request->input('order_by_date');

        $cityId = $request->input('province');
        $district = $request->input('district');
        $ward = $request->input('ward');

        $items = Project::publish();

        if (!empty($type)) {
            $items = $items->where('type', $type);
        }

        if (!empty(trim($keyword))) {
            $searchTerms = explode(' ', $keyword);
            foreach ($searchTerms as $searchTerm) {
                $items->where(function ($query) use ($searchTerm) {
                    $query->where('name', 'LIKE', '%' . $searchTerm . '%');
                    $query->orWhere('address', 'LIKE', '%' . $searchTerm . '%');
                });
            }
        }

        if (!empty($categoryId)) {
            $items = $items->where('category_id', $categoryId);
        }

        if (!empty($cityId)) {
            $items = $items->where('city_id', $cityId);
        }

        if (!empty($district)) {
            $items = $items->where('district_id', $district);
        }

        if (!empty($ward)) {
            $items = $items->where('ward_id', $ward);
        }


        if (isset($type)) {
            $items = $items->where('type', $type);
        }

        if(!empty($orderByPrice))
        {
            $items = $items->orderBy('price', $orderByPrice);
        }

        if(!empty($orderByDate))
        {
            $items = $items->orderBy('begin_year', $orderByDate);
        }

        if(!empty($orderBySize))
        {
            $items = $items->orderBy('size', $orderBySize);
        }

        if(empty($orderBySize) && empty($orderByDate) && empty($orderByPrice))
        {
            $items = $items->orderBy('id', 'desc');
        }

        if (!empty($lat) && !empty($lng)) {
            $items = $items->isWithinMaxDistance($coordinates, $radius);
        }

        if ($request->ajax()) {

            $markers = $this->getHouseMarker($items->get(), $cityId, $district, $ward);
            $items = $items->paginate(10);

            return response([
                'markers' => $markers,
                'items' => view('frontend.projects', compact('items'))->render()
            ]);
        }

        $items = $items->paginate(10);

        return view('frontend.projects', compact('items'));

    }

    public function getProjectByAttributeAjax(Request $request)
    {
        $type = $request->input('type');
        $categoryId = $request->input('category_id');
        $keyword = $request->input('keyword');
        $radius = $request->input('radius');

        $lat = $request->input('lat');
        $lng = $request->input('lng');

        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');

        $minSize = $request->input('min_size');
        $maxSize = $request->input('max_size');

        $beds = $request->input('beds');
        $bathrooms = $request->input('bathrooms');

        $cityId = $request->input('province');
        $district = $request->input('district');
        $ward = $request->input('ward');

        $orderBySize = $request->input('order_by_size');
        $orderByPrice = $request->input('order_by_price');
        $orderByDate = $request->input('order_by_date');

        $coordinates['latitude'] = $lat;
        $coordinates['longitude'] = $lng;
        $isMore = $request->input('is_more');

        $items = Project::publish()->orderBy('id', 'desc');

        if (!empty($type)) {
            $items = $items->where('type', $type);
        }

        if (!empty(trim($keyword))) {
            $searchTerms = explode(' ', $keyword);
            foreach ($searchTerms as $searchTerm) {
                $items->where(function ($query) use ($searchTerm) {
                    $query->where('name', 'LIKE', '%' . $searchTerm . '%');
                    $query->orWhere('address', 'LIKE', '%' . $searchTerm . '%');
                });
            }
        }

        if (!empty($cityId)) {
            $items = $items->where('city_id', $cityId);
        }

        if (!empty($district)) {
            $items = $items->where('district_id', $district);
        }

        if (!empty($ward)) {
            $items = $items->where('ward_id', $ward);
        }

        if (!empty($categoryId)) {
            $items = $items->where('category_id', $categoryId);
        }

        if (isset($type)) {
            $items = $items->where('type', $type);
        }

        if (!empty($lat) && !empty($lng)) {
            $items = $items->isWithinMaxDistance($coordinates, $radius);
        }

        if (!empty($minSize)) {
            $items = $items->where('size', '>=', $minSize);
        }

        if (!empty($maxSize)) {
            $items = $items->where('size', '<=', $maxSize);
        }

        if (!empty($minPrice)) {
            $items = $items->where('price', '>=', $minPrice);
        }

        if (!empty($maxPrice)) {
            $items = $items->where('price', '<=', $maxPrice);
        }

        if (!empty($beds)) {
            $items = $items->where('beds', '>=', $beds);
        }

        if (!empty($bathrooms)) {
            $items = $items->where('bath', '>=', $bathrooms);
        }

        if(!empty($orderByPrice))
        {
            $items = $items->orderBy('price', $orderByPrice);
        }

        if(!empty($orderByDate))
        {
            $items = $items->orderBy('begin_year', $orderByDate);
        }

        if(!empty($orderBySize))
        {
            $items = $items->orderBy('size', $orderBySize);
        }

        if(empty($orderBySize) && empty($orderByDate) && empty($orderByPrice))
        {
            $items = $items->orderBy('id', 'desc');
        }

        $markers = $this->getHouseMarker($items->get(), $cityId, $district, $ward);
        $items = $items->paginate(10);

        return response([
            'markers' => $markers,
            'items' => view('frontend.houses_ajax', compact('items', 'isMore'))->render(),
            'url' => $request->fullUrl()
        ]);
    }


    public function detail($slug, $id, Request $request)
    {
        $house = House::find($id);

        if (!$house) {
            $house = Project::find($id);
        }

        if (!$house) {
            if ($request->ajax()) {
                return response([
                    'status' => 0,
                    'message' => 'Dữ liệu không hợp lệ'
                ]);
            }

            return redirect()->back()->with('error', 'Dữ liệu không hợp lệ');
        }

        if ($request->ajax()) {
            return view('frontend.house', compact('house'))->render();
        }

        return view('frontend.house', compact('house'));

    }

    public function addToWishlist(Request $request)
    {
        if (!auth('frontend')->check()) {
            return response([
                'status' => 0,
                'message' => 'Bạn chưa đăng nhập'
            ]);
        }
        $userId = auth('frontend')->user()->id;
        $houseId = $request->input('house_id');

        $check = Wishlist::where('house_id', $houseId)->where('account_id', $userId)->count();

        if ($check > 0) {
            return response([
                'status' => 0,
                'message' => 'Bạn đã đánh dấu yêu thích BĐS này'
            ]);
        }

        Wishlist::create([
            'house_id' => $houseId,
            'account_id' => $userId,
        ]);

        return response([
            'status' => 1,
            'message' => 'Đánh dấu yêu thích thành công'
        ]);
    }

    public function contact(Request $request)
    {
        return view('frontend.contact');
    }

    public function storeContact(CreateContactRequest $request)
    {
        try {
            $data = $request->all();
            $files = $request->file('files');
            $fileArr = [];

            if ($files) {

                foreach ($files as $file) {
                    $fileArr[] = $this->saveFile($file);

                }
            }

            $data['files'] = json_encode($fileArr);
            $data['status'] = Contact::PENDING;

            Contact::create($data);

            return redirect()->back()->with('success', 'Cám ơn bạn đã liên hệ, chúng tôi sẽ thông tin sớm nhất có thể');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Có lỗi xảy ra vui lòng thử lại sau');
            dd($ex->getTraceAsString());
        }
    }


    public function getSchoolNearBy(Request $request)
    {
        $lat = $request->input('lat');
        $lng = $request->input('lng');

        $url = 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=' . $lat . ',' . $lng .
            '&radius=5000&type=school&key=AIzaSyC5_oqCsJvZdLWEadt934vSKipvwhIDFNY';


        $json = file_get_contents($url);

        $data = json_decode($json, true);

        $results = $data['results'];

        $returnArr = [];

        foreach ($results as $result) {

            $lat = $result['geometry']['location']['lat'];
            $lng = $result['geometry']['location']['lng'];
            $name = $result['name'];

            $itemArr = ['lat' => $lat, 'lng' => $lng, 'name' => $name];

            $returnArr[] = $itemArr;

        }

        return response([
            'status' => 1,
            'data' => $returnArr
        ]);

    }

    public function getWishlist(Request $request)
    {
        if (!auth('frontend')->check()) {
            return redirect()->back()->with('error', 'Bạn chưa đăng nhập để sử dụng');
        }

        $accountId = auth('frontend')->user()->id;

        $items = House::select(\DB::raw('houses.*'))->join('wishlists', 'wishlists.house_id', '=', 'houses.id')
            ->where('wishlists.account_id', $accountId)->paginate(10);

        return view('frontend.wishlist', compact('items'));
    }

    public function logout()
    {
        auth('frontend')->logout();
        return redirect()->back()->with('success', 'Đăng xuất thành công');
    }

}
