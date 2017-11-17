<?php

namespace App\Http\Controllers\Backend;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class MenuController extends Controller
{
    //
    public function index()
    {
        $menus = Menu::where('parent_id', null)->orderBy('order', 'asc')->get();
        return view('admin.menu.index', compact('menus'));
    }

    public function updateState(Request $request)
    {
        $items = $request->all();

        $p_o = 1;

        foreach ($items as $key => $item) {
            foreach ($item as $l) {

                $menu_id = $l['id'];
                $parent_record = DB::table("menus")->where("id", $menu_id)->first();
                if (!empty($parent_record)) {
                    $data = array(
                        "is_active" => 1,
                        "parent_id" => null,
                        "order" => $p_o
                    );
                    DB::table("menus")->where("id", $menu_id)->update($data);
                }
                if (!empty($l['children'])) {
                    $c_o = 1;
                    foreach ($l['children'] as $child) {
                        $data = array(
                            "is_active" => 1,
                            "parent_id" => $menu_id,
                            "order" => $c_o
                        );

                        $child_record = DB::table("menus")->where("id", $menu_id)->first();
                        if (!empty($child_record)) {
                            DB::table("menus")->where("id", $child['id'])->update($data);
                        }
                        $c_o++;
                    }
                }
                $p_o++;
            }
        }
    }

    public function detail($id)
    {
        $item = Menu::find($id);

        return view('admin.menu.detail', compact('item'))->render();
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if (empty(trim($data['parent_id']))) {
            $data['parent_id'] = null;
        }

        if (empty(trim($data['post_id']))) {
            $data['post_id'] = null;
        }

        Menu::create($data);

        return response([
            'status' => 1,
            'message' => 'Tạo thành công',
        ]);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $id = $data['id'];

        if (empty(trim($data['parent_id']))) {
            $data['parent_id'] = null;
        }

        if (empty(trim($data['post_id']))) {
            $data['post_id'] = null;
        }

        $menu = Menu::find($id);

        $menu->update($data);

        if($request->ajax()) {
            return response([
                'status' => 1,
                'message' => 'Cập nhật thành công',

            ]);
        }
        return redirect()->back()->with('success', 'Cập nhật thành công');
    }

    public function destroy(Request $request)
    {
        $data = $request->all();
        $id = $data['id'];
        $menu = Menu::find($id);
        $menu->delete();
        return response([
            'status' => 1,
            'message' => 'Xóa thành công',
        ]);
    }
}
