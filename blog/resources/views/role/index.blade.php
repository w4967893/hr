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
                角色管理
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
                        <i class="fa fa-user"></i>角色管理
                    </div>
                    <div class="actions">
                        <a href="#" class="btn btn-default btn-sm">
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
                                描述
                            </th>
                            <th>
                                创建时间
                            </th>
                            <th>
                                创建人
                            </th>
                            <th>
                                设置
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roleList as $value)
                            <tr class="odd gradeX">
                                <td>
                                    {{ $value->id }}
                                </td>
                                <td>
                                    {{ $value->name }}
                                </td>
                                <td>
                                    {{ $value->describe }}
                                </td>
                                <td>
                                    {{ $value->create_time }}
                                </td>
                                <td>
                                    {{ $value->create_name }}
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
                            <div class="dataTables_paginate paging_simple_numbers" id="sample_2_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button previous disabled" aria-controls="sample_2" tabindex="0" id="sample_2_previous">
                                        <a href="#">
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="paginate_button active" aria-controls="sample_2" tabindex="0">
                                        <a href="#">1</a>
                                    </li>
                                    <li class="paginate_button " aria-controls="sample_2" tabindex="0">
                                        <a href="#">2</a>
                                    </li>
                                    <li class="paginate_button " aria-controls="sample_2" tabindex="0">
                                        <a href="#">3</a>
                                    </li>
                                    <li class="paginate_button next" aria-controls="sample_2" tabindex="0" id="sample_2_next">
                                        <a href="#"><i class="fa fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{------------------------------------------------------------------------------------------------------------ }}               --}}
        {{--</div>--}}
    </div>
    </div>
@endsection
