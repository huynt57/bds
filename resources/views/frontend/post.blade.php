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
                        <div class="post nopadding">
                            {{--<img src="img/blog-1.jpg" alt="Image" class="img-responsive">--}}
                            <div class="post_info clearfix">
                                <div class="post-left">
                                    <ul>
                                        <li><i class="icon-calendar-empty"></i>Ngày đăng
                                            <span>{{ $post->created_at->format('d/m/Y H:i') }}</span>
                                        </li>
                                        <li><i class="icon-inbox-alt"></i>Trong <a
                                                    href="#">{{ $post->category->name }}</a>
                                        </li>
                                    </ul>
                                </div>
                                {{--<div class="post-right"><i class="icon-comment"></i><a href="#">25 </a>Comments</div>--}}
                            </div>
                            <h2>{{ $post->title }}</h2>
                            {!! $post->desc !!}
                        </div>
                        <!-- end post -->
                    </div>
                    <!-- end box_style_1 -->

                </div>
                <!-- End col-md-8-->

                <aside class="col-md-3 add_bottom_30">

                    <div class="widget">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
						<button class="btn btn-default" type="button" style="margin-left:0;"><i class="icon-search"></i></button>
						</span>
                        </div>
                        <!-- /input-group -->
                    </div>
                    <!-- End Search -->
                    <hr>
                    <div class="widget" id="cat_blog">
                        <h4>Danh mục</h4>
                        <ul>
                            @php $categories = \App\Models\Category::all(); @endphp
                            @foreach($categories as $category)
                                <li><a href="#">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- End widget -->

                    <hr>

                    <div class="widget">
                        <h4>Bài viết gần đây</h4>
                        <ul class="recent_post">
                            @php $posts = \App\Models\Post::orderBy('id', 'desc')->take(5)->get(); @endphp
                            @foreach($posts as $post)
                                <li>
                                    <i class="icon-calendar-empty"></i> {{ $post->created_at->format('d/m/Y H:i') }}
                                    <div>
                                        <a href="{{ url('post', ['id'=> $post->id, 'slug'=> $post->slug]) }}">{{ $post->title }}</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- End widget -->
                    <hr>
                    <!-- End widget -->

                </aside>
                <!-- End aside -->

            </div>
            <!-- End row-->
        </div>
    </main>

@endsection