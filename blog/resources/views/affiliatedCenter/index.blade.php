@extends('layouts.app')

@section('content')
    <div class="page-content">
        <!-- BEGIN PAGE HEAD -->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
        {{--<div class="page-title">--}}
        {{--<h1>Dashboard <small>statistics & reports</small></h1>--}}
        {{--</div>--}}
        <!-- END PAGE TITLE -->
        </div>
        <!-- END PAGE HEAD -->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="#">系统管理</a><i class="fa fa-circle"></i>
            </li>
            <li class="active">
                副中心管理
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE CONTENT INNER -->
        <!-- END PAGE CONTENT INNER -->
        <div class="row margin-top-10">
            {{--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
            {{---------------------------------------------------------------------------------------------------------- }}               --}}
            <div class=""col-md-12">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-user"></i>副中心管理
                    </div>
                    <div class="actions">
                        <a class="btn btn-default btn-sm" data-toggle="modal" href="#static">
                            <i class="fa fa-pencil"></i> Add </a>
                        <div class="btn-group">
                            <a class="btn btn-default btn-sm" href="#" data-toggle="dropdown">
                                <i class="fa fa-cogs"></i> Tools <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-pencil"></i> Edit </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-trash-o"></i> Delete </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-ban"></i> Ban </a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="i"></i> Make admin </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <form class="form-inline" role="form" action="/affiliatedCenter/index" method="get">
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                        <input type="text" class="form-control" id="" name="name" placeholder="副中心名称">
                    </div>
                    {{--<div class="form-group">--}}
                    {{--<label class="sr-only" for="exampleInputPassword2">Password</label>--}}
                    {{--<input class="form-control" id="" placeholder="">--}}
                    {{--</div>--}}
                    <div class="form-group" style="float:right">
                        {{--<button class="btn blue">搜索</button>--}}
                        <input type="submit" class="btn blue" value="搜索">
                    </div>
                </form>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                        <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                名称
                            </th>
                            <th>
                                负责人
                            </th>
                            <th>
                                电话
                            </th>
                            <th>
                                职务
                            </th>
                            <th>
                                设置
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($affiliatedCenterList as $value)
                            <tr class="odd gradeX">
                                <td>
                                    {{ $value->id }}
                                </td>
                                <td>
                                    {{ $value->name }}
                                </td>
                                <td>
                                    {{ $value->username }}
                                </td>
                                <td>
                                    {{ $value->phone }}
                                </td>
                                <td>
                                    {{ $value->position }}
                                </td>
                                <td>
                                    <a href="javascript:;" class="btn default btn-xs green-meadow">
                                        <i class="fa fa-edit"></i> 修改 </a>&nbsp;
                                    <a href="#" class="btn default btn-xs red-sunglo" onclick="del({{ $value->id }})">
                                        <i class="fa fa-trash-o"></i> Delete </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-8"></div>
                        <div class="col-md-3" style="float:right">
                            {!! $affiliatedCenterList->appends(array('name'=>$name))->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--添加modal--}}
        <div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">添加副中心</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            <!-- BEGIN FORM-->
                        <form action="#" class="form-horizontal">
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">中心名称</label>
                                    <div class="col-md-6">
                                        <select class="form-control add_center_id">
                                            <option>请选择</option>
                                            @foreach($centerList as $cvalue)
                                            <option value="{{ $cvalue->id }}">{{ $cvalue->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">名称</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle add_name" placeholder="请填写名称">
                                        {{--<span class="help-block">--}}
                                        {{--A block of help text. </span>--}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">负责人</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle add_username" placeholder="请填写负责人">
                                        {{--<span class="help-block">--}}
                                        {{--A block of help text. </span>--}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">电话</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle add_phone" placeholder="请填写电话">
                                        {{--<span class="help-block">--}}
                                        {{--A block of help text. </span>--}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">职务</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle add_position" placeholder="请填写职务">
                                        {{--<span class="help-block">--}}
                                        {{--A block of help text. </span>--}}
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END FORM-->
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn green" onclick="add()">添加</button>
                    </div>
                </div>
            </div>
        </div>
        {{------------------------------------------------------------------------------------------------------------ }}               --}}
        {{--</div>--}}
    </div>
    </div>
    <script src="{{ asset('js/affiliatedCenter/index.js') }}" type="text/javascript"></script>
@endsection
