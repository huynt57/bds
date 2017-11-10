@extends('admin')

@section('styles')

    <link href="/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap-editable/inputs-ext/address/address.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />

@endsection

@section('content')

    <div class="portlet light portlet-fit bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject font-dark sbold uppercase">Cấu hình hệ thống</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="row">
                <div class="col-md-12">
                    <table id="user" class="table table-bordered table-striped">
                        <tbody>
                        <tr>
                            <td style="width:15%"> Username </td>
                            <td style="width:50%">
                                <a href="javascript:;" id="username" data-type="text" data-pk="1" data-original-title="Enter username" class="editable editable-click"> superuser </a>
                            </td>
                            <td style="width:35%">
                                <span class="text-muted"> Simple text field </span>
                            </td>
                        </tr>
                        <tr>
                            <td> First name </td>
                            <td>
                                <a href="javascript:;" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-original-title="Enter your firstname" class="editable editable-click editable-empty">Empty</a>
                            </td>
                            <td>
                                <span class="text-muted"> Required text field, originally empty </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Sex </td>
                            <td>
                                <a href="javascript:;" id="sex" data-type="select" data-pk="1" data-value="" data-original-title="Select sex" class="editable editable-click" style="color: gray;">not selected</a>
                            </td>
                            <td>
                                <span class="text-muted"> Select, loaded from js array. Custom display </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Group </td>
                            <td>
                                <a href="javascript:;" id="group" data-type="select" data-pk="1" data-value="5" data-source="/groups" data-original-title="Select group" class="editable editable-click"> Admin </a>
                            </td>
                            <td>
                                                        <span class="text-muted"> Select, loaded from server.
                                                            <strong>No buttons</strong> mode </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Status </td>
                            <td>
                                <a href="javascript:;" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-original-title="Select status" class="editable editable-click"> Active </a>
                            </td>
                            <td>
                                <span class="text-muted"> Error when loading list items </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Plan vacation? </td>
                            <td>
                                <a href="javascript:;" id="vacation" data-type="date" data-viewformat="dd.mm.yyyy" data-pk="1" data-placement="right" data-original-title="When you want vacation to start?" class="editable editable-click"> 25.02.2013 </a>
                            </td>
                            <td>
                                <span class="text-muted"> Datepicker </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Date of birth </td>
                            <td>
                                <a href="javascript:;" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-original-title="Select Date of birth" class="editable editable-click">15/05/1984</a>
                            </td>
                            <td>
                                <span class="text-muted"> Date field (combodate) </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Setup event </td>
                            <td>
                                <a href="javascript:;" id="event" data-type="combodate" data-template="D MMM YYYY HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1" data-original-title="Setup event date and time" class="editable editable-click editable-empty">Empty</a>
                            </td>
                            <td>
                                <span class="text-muted"> Datetime field (combodate) </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Meeting start </td>
                            <td>
                                <a href="javascript:;" id="meeting_start" data-type="datetime" data-pk="1" data-url="/post" data-placement="right" title="Set date &amp; time" class="editable editable-click"> 15/03/2013 12:45 </a>
                            </td>
                            <td>
                                <span class="text-muted"> Bootstrap datetime </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Comments </td>
                            <td>
                                <a href="javascript:;" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-original-title="Enter comments" class="editable editable-pre-wrapped editable-click">awesome
                                    <br> user!</a>
                            </td>
                            <td>
                                                        <span class="text-muted"> Textarea. Buttons below. Submit by
                                                            <i>ctrl+enter</i>
                                                        </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Type State </td>
                            <td>
                                <a href="javascript:;" id="state" data-type="typeahead" data-pk="1" data-placement="right" data-original-title="Start typing State.." class="editable editable-click editable-empty">Empty</a>
                            </td>
                            <td>
                                <span class="text-muted"> Bootstrap 2.x typeahead </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Fresh fruits </td>
                            <td>
                                <a href="javascript:;" id="fruits" data-type="checklist" data-value="2,3" data-original-title="Select fruits" class="editable editable-click">peach<br>apple</a>
                            </td>
                            <td>
                                <span class="text-muted"> Checklist </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Tags </td>
                            <td>
                                <a href="javascript:;" id="tags" data-type="select2" data-pk="1" data-original-title="Enter tags" class="editable editable-click"> html, javascript </a>
                            </td>
                            <td>
                                <span class="text-muted"> Select2 (tags mode) </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Country </td>
                            <td>
                                <a href="javascript:;" id="country" data-type="select2" data-pk="1" data-value="BS" data-original-title="Select country" class="editable editable-click">Bahamas</a>
                            </td>
                            <td>
                                <span class="text-muted"> Select2 (dropdown mode) </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Address </td>
                            <td>
                                <a href="javascript:;" id="address" data-type="address" data-pk="1" data-original-title="Please, fill address" class="editable editable-click"><b>San Francisco</b>, Valencia st., bld. #24</a>
                            </td>
                            <td>
                                <span class="text-muted"> Your custom input, several fields </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Notes </td>
                            <td>
                                <div id="note" data-pk="1" data-type="wysihtml5" data-toggle="manual" data-original-title="Enter notes" class="editable" tabindex="-1">
                                    <h3>WYSIWYG</h3> WYSIWYG means
                                    <i>What You See Is What You Get</i>.
                                    <br> But may also refer to:
                                    <ul>
                                        <li> WYSIWYG (album), a 2000 album by Chumbawamba </li>
                                        <li> "Whatcha See is Whatcha Get", a 1971 song by The Dramatics </li>
                                        <li> WYSIWYG Film Festival, an annual Christian film festival </li>
                                    </ul>
                                    <i>Source:</i>
                                    <a href="http://en.wikipedia.org/wiki/WYSIWYG_(disambiguation)"> wikipedia.org </a>
                                </div>
                            </td>
                            <td>
                                <a href="javascript:;" id="pencil">
                                    <i class="fa fa-pencil"></i> [edit] </a>
                                <br>
                                <span class="text-muted"> Wysihtml5 (bootstrap only).
                                                            <br> Toggle by another element </span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Console
                        <small>(all ajax requests here are emulated)</small>
                    </h3>
                    <div>
                        <textarea id="console" rows="8" style="width: 70%" class="form-control"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')

<script src="/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/moment.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery.mockjax.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-editable/inputs-ext/address/address.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-editable/inputs-ext/wysihtml5/wysihtml5.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-typeahead/bootstrap3-typeahead.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="/assets/pages/scripts/form-editable.min.js" type="text/javascript"></script>

@endpush