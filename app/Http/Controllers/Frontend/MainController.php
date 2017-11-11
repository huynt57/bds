<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\CreateContactRequest;
use App\Models\Contact;
use App\Models\House;
use App\Models\Post;
use App\Models\User;
use Faker\Factory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    //
    public function index()
    {
        $features = House::where('is_feature', true)->orderBy('id', 'desc')->take(15)->get();
        $sells = House::whereIn('type', [House::SALE, House::FOR_SALE])->orderBy('id', 'desc')->take(15)->get();
        $rents = House::whereIn('type', [House::RENT, House::FOR_RENT])->orderBy('id', 'desc')->take(15)->get();
        return view('frontend.index', compact('features', 'sells', 'rents'));
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

    public function getHouseMarker($houses)
    {

        $returnArr = [];

        foreach ($houses as $house) {
            $itemArr = [];
            $itemArr['name'] = $house->name;
            $itemArr['location_latitude'] = $house->lat;
            $itemArr['location_longitude'] = $house->lng;
            $itemArr['map_image_url'] = $house->main_images;
            $itemArr['name_point'] = $house->name;
            $itemArr['description_point'] = 'tt';
            $itemArr['get_directions_start_address'] = '';
            $itemArr['phone'] = '0444444444444';
            $itemArr['url_point'] = '';

            $returnArr[] = $itemArr;
        }

        $centerPoint['lat'] = $returnArr[0]['location_latitude'];
        $centerPoint['lng'] = $returnArr[0]['location_longitude'];

        return [
            'data' => ['Historic' => $returnArr],
            'center' => $centerPoint
        ];
    }

    public function getHouseByCenter(Request $request)
    {
        $lat = $request->input('lat');
        $lng = $request->input('lng');

        $radius = $request->input('radius');
        $coordinates['latitude'] = $lat;
        $coordinates['longitude'] = $lng;

        $items = House::isWithinMaxDistance($coordinates, $radius);

        $items = $items->get()->pluck('id')->toArray();

        dd($items);
    }

    public function getHouseByAttribute(Request $request)
    {
        $type = $request->input('type');
        $categoryId = $request->input('category_id');
        $keyword = $request->input('keyword');

        $lat = $request->input('lat');
        $lng = $request->input('lng');

        $coordinates['latitude'] = $lat;
        $coordinates['longitude'] = $lng;
        $radius = 5;

        $items = House::orderBy('id', 'desc');

        if (!empty($type)) {
            $items = $items->where('type', $type);
        }

        if (!empty(trim($keyword))) {
            $items->where(function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
                $query->orWhere('address', 'LIKE', '%' . $keyword . '%');
            });
        }

        if (!empty($categoryId)) {
            $items = $items->where('category_id', $categoryId);
        }

        if (isset($type)) {
            $items = $items->where('type', $type);
        }

        if(!empty($lat) && !empty($lng))
        {
            $items = $items->isWithinMaxDistance($coordinates, $radius);
        }

        if ($request->ajax()) {
            return response($this->getHouseMarker($items->get()));
        }

        $items = $items->paginate(10);

        return view('frontend.houses', compact('items'));

    }

    public function detail($slug, $id, Request $request)
    {
        $house = House::find($id);

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

        auth('frontend')->user()->sync([$houseId]);

        return response([
            'status' => 1,
            'message' => 'Thành công'
        ]);
    }

    public function contact(Request $request)
    {
        return view('frontend.contact');
    }

    public function storeContact(CreateContactRequest $request)
    {
        $data = $request->all();

        Contact::create($data);

        return redirect()->back()->with('success', 'Cám ơn bạn đã liên hệ, chúng tôi sẽ thông tin sớm nhất có thể');
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

            $itemArr = ['lat' => $lat, 'lng' => $lng];

            $returnArr[] = $itemArr;

        }

        return response([
            'status' => 1,
            'data' => $returnArr
        ]);

    }

}
