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
        $menus = Menu::where('parent_id', null)->get();
        return view('admin.menu.index', compact('menus'));
    }

    public function updateState(Request $request)
    {
        $data = $request->all();
        $items = $data['data'];
        $p_o = 1;

        foreach($items as $key=>$item) {
            foreach($item as $l) {
                $menu_id = $l['id'];
                $parent_record = DB::table("menus")->where("id" , $menu_id)->first();
                if(!empty($parent_record)) {
                    $data = array(
                        "active" => 1,
                        "parent_id" => null,
                        "order_by" => $p_o
                    );
                    DB::table("menus")->where("menu_id" , $menu_id)->update($data);
                }
                if(!empty($l['children'])) {
                    $c_o = 1;
                    foreach($l['children'] as $child) {
                        $data = array(
                            "active" => 1,
                            "parent_id" => $menu_id,
                            "order_by" => $c_o
                        );

                        $child_record = DB::table("menus")->where("id" , $menu_id)->first();
                        if(!empty($child_record)) {
                            DB::table("menus")->where("id" , $child['id'])->update($data);
                        }
                        $c_o++;
                    }
                }
                $p_o++;
            }
        }
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if (empty(trim($data['parent_id']))) {
            $data['parent_id'] = null;
        }

        Menu::create($data);

        return response([
            'status' => 1,
            'message' => 'Tạo thành công',
        ]);
    }
}
