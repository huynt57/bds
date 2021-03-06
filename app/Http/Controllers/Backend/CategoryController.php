<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;

class CategoryController extends Controller
{
    //
    public function index()
    {
        return view('admin.category.list');
    }

    public function getCategoryByAttribute()
    {
        $categories = Category::orderBy('id', 'desc');

        return Datatables::of($categories)
            ->editColumn('name', function ($category) {
                return '<a href="javascript:;" data-type="text" 
                data-pk="' . $category->id . '" data-url="' . url('admin/category/update', ['id' => $category->id]) . '" 
                data-id="' . $category->id . '" 
                data-name="name"
                class="editable editable-click"> ' . $category->name . ' </a>';
            })
            ->addColumn('action', function ($category) {
                return '<button class="btn btn-sm red btn-outline "> Xóa</button>';
            })
            ->make(true);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['status'] = Category::ACTIVE;

        Category::create($data);

        if ($request->ajax()) {
            return response([
                'status' => 1,
                'message' => 'Thêm thành công'
            ]);
        }

        return redirect()->back()->with('success', 'Thêm thành công');
    }

    public function update($id, Request $request)
    {
        $category = Category::find($id);

        if (!$category) {
            if ($request->ajax()) {
                return response([
                    'status' => 0,
                    'message' => 'Dữ liệu không hợp lệ'
                ]);
            }
            return redirect()->back()->with('error', 'Dữ liệu không hợp lệ');
        }

        $data = $request->all();

        $rData['name'] = $data['value'];
        $category->update($rData);

        if ($request->ajax()) {
            return response([
                'status' => 1,
                'message' => 'Cập nhật thành công'
            ]);
        }

        return redirect()->back()->with('success', 'Cập nhật thành công');
    }

    public function destroy($id, Request $request)
    {
        $category = Category::find($id);

        if (!$category) {
            if ($request->ajax()) {
                return response([
                    'status' => 0,
                    'message' => 'Dữ liệu không hợp lệ'
                ]);
            }
            return redirect()->back()->with('error', 'Dữ liệu không hợp lệ');
        }

        $category->delete();

        if ($request->ajax()) {
            return response([
                'status' => 1,
                'message' => 'Xóa thành công'
            ]);
        }

        return redirect()->back()->with('success', 'Xóa thành công');
    }
}
