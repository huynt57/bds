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

        return Datatables::of($categories)->make(true);
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

        $category->update($data);

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
