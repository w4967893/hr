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
                                <select class="form-control center">
                                    <option value="0">请选择</option>
                                    @foreach($centerList as $cvalue)
                                        <option value="{{ $cvalue->id }}">{{ $cvalue->name }}</option>
                                    @endforeach
                                </select>
                            </div>&nbsp;&nbsp;&nbsp;
                            <div class="form-group">
                                <label for="exampleInputPassword1">事业部</label>
                                <select class="form-control division">
                                    {{--@foreach($jobList as $jvalue)--}}
                                        {{--<option value="{{ $jvalue->id }}">{{ $jvalue->name }}</option>--}}
                                    {{--@endforeach--}}
                                </select>
                            </div>&nbsp;&nbsp;&nbsp;
                            <div class="form-group">
                                <label for="exampleInputPassword1">岗位</label>
                                <select class="form-control add_center_id">
                                    <option>请选择</option>
                                    @foreach($jobList as $jvalue)
                                        <option value="{{ $jvalue->id }}">{{ $jvalue->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12" style="height: 10px;"></div>
                        <div class="col-md-12">
                            <h4>员工信息</h4>
                            <div class="form-group">
                                <label for="exampleInputPassword1">离职人员姓名</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>&nbsp;
                            <div class="form-group">
                                <label for="exampleInputPassword1">本月是否请假</label>
                                <select class="form-control add_center_id">
                                    <option value="0">请选择</option>
                                    <option value="1">是</option>
                                    <option value="2">否</option>
                                </select>
                            </div>&nbsp;
                            <div class="form-group">
                                <label for="exampleInputPassword1">最后工作日期</label>
                                <input type="text" class="form-control" id="startDate" value="07/01/2015">
                            </div>
                            <p></p>
                        </div>
                        <div class="col-md-12">
                            <h4>离职原因</h4>
                            <div class="form-group">
                                <label for="exampleInputPassword1">离职原因</label>
                                <select class="form-control add_center_id">
                                    <option>请选择</option>
                                    <option value="">薪资问题</option>
                                    <option value="">加班问题</option>
                                    <option value="">未完成业绩考核</option>
                                    <option value="">缺少培训</option>
                                    <option value="">家庭原因</option>
                                    <option value="">距离问题</option>
                                    <option value="">个人原因</option>
                                </select>
                            </div>
                            <p></p>
                        </div>
                        <div class="col-md-12">
                            <h4>公司建议</h4>
                            <div class="form-group">
                                <textarea class="form-control" rows="10" cols="88"></textarea>
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

    <script src="{{ asset('js/departure/index.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#startDate').daterangepicker({
                singleDatePicker: true,
                startDate: moment().subtract(6, 'days')
            });

            updateConfig();

            function updateConfig() {
                var options = {};

                if ($('#singleDatePicker').is(':checked'))
                    options.singleDatePicker = true;

                if ($('#showDropdowns').is(':checked'))
                    options.showDropdowns = true;

                if ($('#showWeekNumbers').is(':checked'))
                    options.showWeekNumbers = true;

                if ($('#showISOWeekNumbers').is(':checked'))
                    options.showISOWeekNumbers = true;

                if ($('#timePicker').is(':checked'))
                    options.timePicker = true;

                if ($('#timePicker24Hour').is(':checked'))
                    options.timePicker24Hour = true;

                if ($('#timePickerIncrement').val().length && $('#timePickerIncrement').val() != 1)
                    options.timePickerIncrement = parseInt($('#timePickerIncrement').val(), 10);

                if ($('#timePickerSeconds').is(':checked'))
                    options.timePickerSeconds = true;

                if ($('#autoApply').is(':checked'))
                    options.autoApply = true;

                if ($('#dateLimit').is(':checked'))
                    options.dateLimit = { days: 7 };

                if ($('#ranges').is(':checked')) {
                    options.ranges = {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    };
                }

                if ($('#locale').is(':checked')) {
                    $('#rtl-wrap').show();
                    options.locale = {
                        direction: $('#rtl').is(':checked') ? 'rtl' : 'ltr',
                        format: 'MM/DD/YYYY HH:mm',
                        separator: ' - ',
                        applyLabel: '确定',
                        cancelLabel: '取消',
                        fromLabel: 'From',
                        toLabel: 'To',
                        customRangeLabel: 'Custom',
                        daysOfWeek: ['日', '一', '二', '三', '四', '五','六'],
                        monthNames: ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
                        firstDay: 1
                    };
                } else {
                    $('#rtl-wrap').hide();
                }
                if ($('#startDate').val().length)
                    options.startDate = $('#startDate').val();
            }

        });
    </script>
@endsection
