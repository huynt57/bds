@extends('admin')

@section('styles')
    <link href="/assets/global/plugins/jquery-nestable/jquery.nestable.css" rel="stylesheet" type="text/css" />

@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-bubble font-green"></i>
                    <span class="caption-subject font-green sbold uppercase">Nestable List 1</span>
                </div>
                <div class="actions">
                    <div class="btn-group">
                        <a class="btn green-haze btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="javascript:;"> Option 1</a>
                            </li>
                            <li class="divider"> </li>
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
                        <li class="dd-item" data-id="1">
                            <div class="dd-handle"> Item 1 </div>
                        </li>
                        <li class="dd-item" data-id="2"><button data-action="collapse" type="button">Collapse</button><button data-action="expand" type="button" style="display: none;">Expand</button>
                            <div class="dd-handle"> Item 2 </div>
                            <ol class="dd-list">
                                <li class="dd-item" data-id="3">
                                    <div class="dd-handle"> Item 3 </div>
                                </li>
                                <li class="dd-item" data-id="4">
                                    <div class="dd-handle"> Item 4 </div>
                                </li>
                                <li class="dd-item" data-id="5"><button data-action="collapse" type="button">Collapse</button><button data-action="expand" type="button" style="display: none;">Expand</button>
                                    <div class="dd-handle"> Item 5 </div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="6">
                                            <div class="dd-handle"> Item 6 </div>
                                        </li>
                                        <li class="dd-item" data-id="7">
                                            <div class="dd-handle"> Item 7 </div>
                                        </li>
                                        <li class="dd-item" data-id="8">
                                            <div class="dd-handle"> Item 8 </div>
                                        </li>
                                    </ol>
                                </li>
                                <li class="dd-item" data-id="9">
                                    <div class="dd-handle"> Item 9 </div>
                                </li>
                                <li class="dd-item" data-id="10">
                                    <div class="dd-handle"> Item 10 </div>
                                </li>
                            </ol>
                        </li>
                        <li class="dd-item" data-id="11">
                            <div class="dd-handle"> Item 11 </div>
                        </li>
                        <li class="dd-item" data-id="12">
                            <div class="dd-handle"> Item 12 </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection

@push('scripts')
<script src="/assets/global/plugins/jquery-nestable/jquery.nestable.js" type="text/javascript"></script>

@endpush