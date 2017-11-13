<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends AdminController
{
    //
    public function index()
    {
        return view('admin.post.list');
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function edit($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return redirect()->back()->with('error', 'Dữ liệu không hợp lệ');
        }
        return view('admin.post.edit', compact('post'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if (!empty($data['status'] && $data['status'] == 'on')) {
            $data['status'] = true;
        }

        if ($request->file('image') && $request->file('image')->isValid()) {
            $data['image'] = $this->saveImage($request->file('image'));
        }

        Post::create($data);

        return redirect()->back()->with('success', 'Thêm bài viết thành công');

    }

    public function update($id, Request $request)
    {
        $data = $request->all();

        $post = Post::find($id);

        if (!$post) {
            return redirect()->back()->with('error', 'Dữ liệu không hợp lệ');
        }

        if ($request->file('image') && $request->file('image')->isValid()) {
            $data['image'] = $this->saveImage($request->file('image'));
        }

        if (!empty($data['status'] && $data['status'] == 'on')) {
            $data['status'] = true;
        } else {
            $data['status'] = false;
        }

        $post->update($data);

        return redirect()->back()->with('success', 'Cập nhật bài viết thành công');

    }


    public function getPostByAttribute()
    {
        $posts = Post::select(\DB::raw('posts.*, categories.name as category'))
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->orderBy('id', 'desc');

        return \Datatables::of($posts)
            ->editColumn('status', function ($post) {
                return '<a href="javascript:;" data-type="select" 
                data-pk="' . $post->id . '" data-url="' . url('admin/post/update-inline', ['id' => $post->id]) . '" 
                data-id="' . $post->id . '" 
                data-name="status"
                class="editable editable-click"> ' . $post->status_text . ' </a>';
            })
            ->editColumn('created_at', function ($post) {
                return $post->created_at->format('d/m/Y H:i');
            })
            ->editColumn('action', function ($post) {
                return '<a class="btn btn-sm yellow btn-outline " href="' . url('post/' . $post->slug . '-' . $post->id) . '" target="_blank"> Xem</a>' .
                    '<a href="' . url('admin/post/edit', ['id' => $post->id]) . '" class="btn btn-sm green btn-outline "> Sửa</a>' .
                    '<button class="btn btn-sm red btn-outline "> Xóa</button>';
            })
            ->make(true);

    }

    public function updateInline($id, Request $request)
    {
        $id = $request->input('pk');
        $name = $request->input('name');
        $value = $request->input('value');

        $house = Post::find($id);

        $house->update([
            $name => $value
        ]);
    }
}
