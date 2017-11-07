@extends('admin')

@section('styles')
    <link href="/assets/global/plugins/jquery-nestable/jquery.nestable.css" rel="stylesheet" type="text/css"/>

@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bubble font-green"></i>
                        <span class="caption-subject font-green sbold uppercase">Danh sách menu trang chủ</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <a class="btn green-haze btn-outline btn-circle btn-sm" href="javascript:;"
                               data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;"> Option 1</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="javascript:;">Option 2</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Option 3</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Option 4</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body ">
                    <div class="dd" id="nestable_list_1">
                        <ol class="dd-list">
                            @foreach($menus as $menu)
                            <li class="dd-item" data-id="{{ $menu->id }}">
                                <div class="dd-handle"> {{ $menu->title }}</div>

                                @php  \App\Components\Functions::printMenu($menu); @endphp

                            </li>
                            @endforeach

                        </ol>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection

@push('scripts')
<script src="/assets/global/plugins/jquery-nestable/jquery.nestable.js" type="text/javascript"></script>
<script src="/assets/pages/scripts/ui-nestable.min.js" type="text/javascript"></script>


@endpush