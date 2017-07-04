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
                <a href="#">用户管理</a><i class="fa fa-circle"></i>
            </li>
            <li class="active">
                用户管理
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
                        <i class="fa fa-user"></i>用户管理
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
                <form class="form-inline" role="form" action="/user/index" method="get">
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                        <input type="text" class="form-control" id="" name="user_name" placeholder="用户名称">
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
                                真实姓名
                            </th>
                            <th>
                                邮箱
                            </th>
                            <th>
                                电话
                            </th>
                            <th>
                                创建时间
                            </th>
                            <th>
                                最后一次登录时间
                            </th>
                            <th>
                                设置
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($userList as $value)
                            <tr class="odd gradeX">
                                <td>
                                    {{ $value->id }}
                                </td>
                                <td>
                                    {{ $value->name }}
                                </td>
                                <td>
                                    {{ $value->email }}
                                </td>
                                <td>
                                    {{ $value->phone }}
                                </td>
                                <td>
                                    {{ $value->created_at }}
                                </td>
                                <td>
                                    最后一次登录时间
                                </td>
                                <td>
                                    <a class="btn default btn-xs green-meadow reset" onclick="reset(this)">
                                        <i class="fa fa-edit"></i> 重置密码 </a>&nbsp;
                                    <a class="btn default btn-xs red-sunglo delete" onclick="del(this)">
                                        <i class="fa fa-trash-o"></i> Delete </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-8"></div>
                        <div class="col-md-3" style="float:right">
                            {!! $userList->appends(array('user_name'=>$user_name))->render() !!}
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
                        <h4 class="modal-title">添加用户</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            <!-- BEGIN FORM-->
                        <form action="#" class="form-horizontal">
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">真实姓名</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle name" placeholder="请填写真实姓名">
                                        {{--<span class="help-block">--}}
                                        {{--A block of help text. </span>--}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">邮箱</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle email" placeholder="请填写邮箱">
                                        {{--<span class="help-block">--}}
                                        {{--A block of help text. </span>--}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">手机号码</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle phone" placeholder="请填写手机号码">
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
    <script src="{{ asset('js/user/index.js') }}" type="text/javascript"></script>
@endsection
