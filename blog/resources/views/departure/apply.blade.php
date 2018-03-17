@extends('layouts.apply')

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
        {{--<div class="row margin-top-10">--}}
            <div class="portlet light col-md-9">
                {{--<div class="portlet light">--}}
                <div class="col-md-12" style="text-align:center;">
                    <h1>离职申请</h1>
                </div>
                <div class="col-md-12" style="height: 30px;"></div>
                <div class="col-md-12">
                    <form class="form-inline" role="form" action="/demand/index" method="get">
                        <div class="col-md-12">
                            <h4>岗位信息</h4>
                            <div class="form-group">
                                <label for="exampleInputPassword1">事业群</label>
                                <select class="form-control add_center_id">
                                    <option>请选择</option>
                                    <option value="">移动新闻广告事业群</option>
                                    <option value="">今日头条广告事业群</option>
                                    <option value="">品牌中心</option>
                                </select>
                            </div>&nbsp;&nbsp;&nbsp;
                            <div class="form-group">
                                <label for="exampleInputPassword1">事业部</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>&nbsp;&nbsp;&nbsp;
                            <div class="form-group">
                                <label for="exampleInputPassword1">岗位</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-md-12" style="height: 10px;"></div>
                        <div class="col-md-12">
                            <h4>员工信息</h4>
                            <div class="form-group">
                                <label for="exampleInputPassword1">离职人员姓名</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>&nbsp;&nbsp;&nbsp;
                            <div class="form-group">
                                <label for="exampleInputPassword1">最后工作日期</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <p></p>
                        </div>
                        <div class="col-md-12">
                            <h4>离职原因</h4>
                            <div class="form-group">
                                <textarea class="form-control" rows="15" cols="88"></textarea>
                            </div>
                            <p></p>
                        </div>
                        <div class="col-md-12">
                            <h4></h4>
                            <div class="col-md-9"></div>
                            <div class="col-md-3">
                                <button type="button" data-dismiss="modal" class="btn red">提交申请</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-12" style="height: 50px;"></div>
            </div>
        {{--</div>--}}
    </div>
@endsection
