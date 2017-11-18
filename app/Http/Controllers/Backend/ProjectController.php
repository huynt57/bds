<?php

namespace App\Http\Controllers\Backend;

use App\Models\Project;
use App\Models\Image;
use App\Models\Region;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;

class ProjectController extends AdminController
{
    //
    public function index()
    {
        return view('admin.project.list');
    }

    public function getProjectByAttribute()
    {
        $projects = Project::select(\DB::raw('projects.*, categories.name as category, users.name as agent'))
            ->leftJoin('categories', 'projects.category_id', '=', 'categories.id')
            ->leftJoin('users', 'projects.agent_id', '=', 'users.id');

        return Datatables::of($projects)
            ->editColumn('is_feature', function ($project) {
                return '<a href="javascript:;" data-type="select" 
                data-pk="' . $project->id . '" data-url="' . url('admin/project/update-inline', ['id' => $project->id]) . '" 
                data-id="' . $project->id . '" 
                data-name="is_feature"
                class="editable editable-click"> ' . $project->is_feature_text . ' </a>';
            })->editColumn('status', function ($project) {
                return '<a href="javascript:;" data-type="select" 
                data-pk="' . $project->id . '" data-url="' . url('admin/project/update-inline', ['id' => $project->id]) . '" 
                data-id="' . $project->id . '" 
                data-name="status"
                class="editable editable-click"> ' . $project->status_text . ' </a>';
            })->editColumn('type', function ($project) {
              return $project->type_text;
            })
            ->addColumn('action', function ($project) {
                return '<button class="btn btn-sm yellow btn-outline "> Xem</button>' .
                    '<a href="' . url('admin/project/edit', ['id' => $project->id]) . '" class="btn btn-sm green btn-outline "> Sửa</a>' .
                    '<button class="btn btn-sm red btn-outline "> Xóa</button>';
            })
            ->editColumn('created_at', function ($project) {
                return Carbon::createFromFormat('Y-m-d H:i:s', $project->created_at)->format('d/m/Y H:i');
            })
            ->make(true);
    }

    public function create()
    {
        return view('admin.project.create');
    }

    public function region()
    {
        return view('admin.project.region');
    }

    public function updateInline($id, Request $request)
    {
        $id = $request->input('pk');
        $name = $request->input('name');
        $value = $request->input('value');

        $project = Project::find($id);

        $project->update([
            $name => $value
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        //   $data['user_id'] = auth('backend')->user()->id;

        if ($request->file('main_image') && $request->file('main_image')->isValid()) {
            $data['main_images'] = $this->saveImage($request->file('main_image'));
        }

        if (!is_numeric($data['price'])) {
            $data['price'] = 0;
        }

        if (!is_numeric($data['beds'])) {
            $data['beds'] = 0;
        }

        if (!is_numeric($data['agent_id'])) {
            $data['agent_id'] = 0;
        }

        if (!is_numeric($data['investor_id'])) {
            $data['investor_id'] = 0;
        }

        if (!is_numeric($data['bathrooms'])) {
            $data['bath'] = 0;
        }

        if (!is_numeric($data['building_number'])) {
            $data['building_number'] = 0;
        }

        if (!is_numeric($data['floor_number'])) {
            $data['floor_number'] = 1;
        }

        if (!is_numeric($data['size'])) {
            $data['size'] = 0;
        }

        if (!is_numeric($data['district_id'])) {
            $data['district_id'] = 0;
        }
        if (!is_numeric($data['begin_year'])) {
            $data['begin_year'] = 0;
        }

        if (!is_numeric($data['category_id'])) {
            $data['category_id'] = 0;
        }

        if (!is_numeric($data['city_id'])) {
            $data['city_id'] = 0;
        }

        if (isset($data['status']) && $data['status'] == 'on') {
            $data['status'] = true;
        } else {
            $data['status'] = false;
        }

        if (isset($data['is_feature']) && $data['is_feature'] == 'on') {
            $data['is_feature'] = true;
        } else {
            $data['is_feature'] = false;
        }

        if (!is_numeric($data['ward_id'])) {
            $data['ward_id'] = 0;
        }

        if(isset($data['features'])) {
            $data['features'] = json_encode($data['features']);
        }

        \DB::beginTransaction();

        try {

            $project = Project::create($data);

            $images = $request->file('images');

            if ($images) {

                foreach ($images as $image) {
                    $img = $this->saveImage($image);

                    Image::create([
                        'path' => $img,
                        'project_id' => $project->id
                    ]);
                }
            }

            \DB::commit();

        } catch (\Exception $ex) {
            \DB::rollBack();

            dd($ex->getMessage());

            return redirect()->back()->with('error', 'Thêm dữ liệu không thành công');
        }

        return redirect()->back()->with('success', 'Thêm dữ liệu thành công');

    }

    public function edit($id)
    {
        $project = Project::find($id);

        if (!$project) {
            return redirect()->back()->with('error', 'Dữ liệu không hợp lệ');
        }

        return view('admin.project.edit', ['house' => $project]);
    }

    public function update($id, Request $request)
    {
        $project = Project::find($id);

        if (!$project) {
            return redirect()->back()->with('error', 'Dữ liệu không hợp lệ');
        }

        $data = $request->all();

        if ($request->file('main_image') && $request->file('main_image')->isValid()) {
            $data['main_images'] = $this->saveImage($request->file('main_image'), $project->main_images);
        }

        if (!is_numeric($data['price'])) {
            $data['price'] = 0;
        }

        if (!is_numeric($data['begin_year'])) {
            $data['begin_year'] = 0;
        }

        if (!is_numeric($data['beds'])) {
            $data['beds'] = 0;
        }

        if (!is_numeric($data['agent_id'])) {
            $data['agent_id'] = 0;
        }

        if (!is_numeric($data['investor_id'])) {
            $data['investor_id'] = 0;
        }

        if (!is_numeric($data['bathrooms'])) {
            $data['bath'] = 0;
        }

        if (!is_numeric($data['building_number'])) {
            $data['building_number'] = 0;
        }

        if (!is_numeric($data['floor_number'])) {
            $data['floor_number'] = 1;
        }

        if (!is_numeric($data['size'])) {
            $data['size'] = 0;
        }

        if (!is_numeric($data['district_id'])) {
            $data['district_id'] = 0;
        }

        if (!is_numeric($data['category_id'])) {
            $data['category_id'] = 0;
        }

        if (!is_numeric($data['city_id'])) {
            $data['city_id'] = 0;
        }

        if (isset($data['status']) && $data['status'] == 'on') {
            $data['status'] = true;
        } else {
            $data['status'] = false;
        }

        if (isset($data['is_feature']) && $data['is_feature'] == 'on') {
            $data['is_feature'] = true;
        } else {
            $data['is_feature'] = false;
        }

        if (!is_numeric($data['ward_id'])) {
            $data['ward_id'] = 0;
        }

        if(isset($data['features'])) {
            $data['features'] = json_encode($data['features']);
        }

        \DB::beginTransaction();

        try {

            $project->update($data);

            $images = $request->file('images');

            if ($images) {

                Image::where('project_id', $project->id)->delete();

                foreach ($images as $image) {
                    $img = $this->saveImage($image);

                    Image::create([
                        'path' => $img,
                        'project_id' => $project->id
                    ]);
                }
            }

            \DB::commit();

        } catch (\Exception $ex) {
            \DB::rollBack();

            dd($ex->getLine());

            return redirect()->back()->with('error', 'Cập nhật dữ liệu không thành công');
        }

        return redirect()->back()->with('success', 'Cập nhật dữ liệu thành công');
    }

    public function changeFeaturedProject(Request $request)
    {
        $projectId = $request->input('project_id');

        $project = Project::find($projectId);

        if (!$project) {
            return response([
                'status' => 0,
                'message' => 'Dữ liệu không hợp lệ'
            ]);
        }

        if ($project->is_featured) {
            $project->is_featured = false;
        } else {
            $project->is_featured = true;
        }

        $project->save();

        return response([
            'status' => 1,
            'message' => 'Thành công'
        ]);
    }

    public function getRegionByAttribute(Request $request)
    {
        $items = Region::all();
        return \Datatables::of($items)->addColumn('action', function ($item) {

        })->make(true);
    }

    public function getRegionByType(Request $request)
    {
        $type = $request->input('type');
        if($type == config('constants.WARD'))
        {
            $tid = 'wardid';
            $items = \DB::table('ward')->get();
        } elseif ($type == config('constants.DISTRICT'))
        {
            $tid = 'districtid';
            $items = \DB::table('district')->get();
        }elseif ($type == config('constants.PROVINCE'))
        {
            $tid = 'provinceid';
            $items = \DB::table('province')->get();
        }

        return view('admin.project.option', compact('items', 'tid'))->render();
    }
}
