@extends('frontend')

@section('styles')
    <link href="/frontend/css/blog.css" rel="stylesheet">
@endsection

@section('content')
    <main style="margin-bottom: 353px;">

        <div class="container margin_60">
            <div class="row">

                <div class="col-md-9">
                    <div class="box_style_1">
                        @foreach($posts as $post)
                        <div class="post">
                            {{--<a href="{{ url('post/'.str_slug($post->title).'-'.$post->id) }}"><img src="{{ $post->image }}" alt="Image"--}}
                                                                        {{--class="img-responsive">--}}
                            {{--</a>--}}
                            <div class="post_info clearfix">
                                <div class="post-left">
                                    <ul>
                                        <li><i class="icon-calendar-empty"></i> Vào <span>{{ $post->created_at->format('d/m/Y') }}</span>
                                        </li>
                                        <li><i class="icon-inbox-alt"></i> Trong
                                            <a href="{{ url('post/category/'.str_slug($post->category->name).'-'.$post->category->id) }}">{{ $post->category->name }}</a>
                                        </li>
                                    </ul>
                                </div>
                                {{--<div class="post-right"><i class="icon-comment"></i><a href="#">25 </a>--}}
                                {{--</div>--}}
                            </div>
                            <h2><a href="{{ url('post/'.str_slug($post->title).'-'.$post->id) }}">{{ $post->title }}</a></h2>
                            <p>
                                {{ \Illuminate\Support\Str::words(strip_tags($post->desc), 100) }}
                            </p>
                            <a href="{{ url('post/'.str_slug($post->title).'-'.$post->id) }}" class="btn_1">Đọc thêm</a>
                        </div>
                        <!-- end post -->

                        <hr>
                            @endforeach

                    </div>
                    <hr>

                    <div class="text-center">
                        {!! $posts->links() !!}
                        <!-- end pagination-->
                    </div>
                </div>
                <!-- End col-md-8-->

                <aside class="col-md-3">

                    {{--<div class="widget">--}}
                        {{--<div class="input-group">--}}
                            {{--<input type="text" class="form-control" placeholder="Search...">--}}
                            {{--<span class="input-group-btn">--}}
						{{--<button class="btn btn-default" type="button" style="margin-left:0;"><i class="icon-search"></i></button>--}}
						{{--</span>--}}
                        {{--</div>--}}
                        {{--<!-- /input-group -->--}}
                    {{--</div>--}}
                    <!-- End Search -->
                    <hr>
                    <div class="widget" id="cat_blog">
                        <h4>Danh mục</h4>
                        <ul>
                            @foreach($categories as $category)
                            <li><a href="{{ url('post/category/'.str_slug($category->name).'-'.$category->id) }}">{{ $category->name }}</a>
                            </li>
                                @endforeach
                        </ul>
                    </div>
                    <!-- End widget -->

                    <hr>

                    <!-- End widget -->
                    <!-- End widget -->

                </aside>
                <!-- End aside -->

            </div>
            <!-- End row-->
        </div>
        <!-- End container -->
    </main>
@endsection