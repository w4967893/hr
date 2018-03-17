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
                <a href="#">招聘计划与分解</a><i class="fa fa-circle"></i>
            </li>
            <li class="active">
                招聘计划
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
                        <i class="fa fa-user"></i>离职列表
                    </div>
                    <div class="actions">
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
                <form class="form-inline" role="form" action="/demand/index" method="get">
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                        <input type="text" class="form-control" id="" name="center_name" placeholder="中心">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                        <input type="text" class="form-control" id="" name="affiliated_center_name" placeholder="副中心">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                        <input type="text" class="form-control" id="" name="division_name" placeholder="部门">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                        <input type="text" class="form-control" id="" name="position" placeholder="职位">
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
                                事业群
                            </th>
                            <th>
                                事业部
                            </th>
                            <th>
                                岗位
                            </th>
                            <th>
                                员工姓名
                            </th>
                            <th>
                                申请时间
                            </th>
                            <th>
                                最后工作日
                            </th>
                            <th>
                                离职原因
                            </th>
                            <th>
                                设置
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($departureList as $value)
                            <tr class="odd gradeX">
                                <td>
                                    {{ $value->id }}
                                </td>
                                <td>
                                    {{ $value->center_name }}
                                </td>
                                <td>
                                    {{ $value->division_name }}
                                </td>
                                <td>
                                    {{ $value->job_name }}
                                </td>
                                <td>
                                    {{ $value->employees_name }}
                                </td>
                                <td>
                                    {{ $value->apply_time }}
                                </td>
                                <td>
                                    {{ $value->last_day }}
                                </td>
                                <td>
                                    {{ $value->reason }}
                                </td>
                                <td>
                                    <a href="javascript:;" class="btn default btn-xs green-meadow">
                                        <i class="fa fa-edit"></i> 修改 </a>&nbsp;
                                    <a href="javascript:;" class="btn default btn-xs red-sunglo">
                                        <i class="fa fa-trash-o"></i> Delete </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-8"></div>
                        <div class="col-md-3" style="float:right">
                            {!! $departureList->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="{{ asset('js/role/index.js') }}" type="text/javascript"></script>
@endsection
