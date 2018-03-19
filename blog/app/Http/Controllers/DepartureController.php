<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Model\DepartureModel;
use App\Http\Model\CenterModel;
use App\Http\Model\JobModel;

class DepartureController extends BaseController
{
    protected $departureModel;
    protected $centerModel;
    protected $jobModel;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DepartureModel $departureModel, CenterModel $centerModel, JobModel $jobModel)
    {
        $this->departureModel = $departureModel;
        $this->centerModel = $centerModel;
        $this->jobModel = $jobModel;
    }

    /**
     * Show the application dashboard.
     *
     * @return bool
     */
    public function index(Request $request)
    {
        $where = [];
        $departureArr = $this->departureModel->dlist($where);
        return view('departure/index')->with(['departureList' => $departureArr]);
    }

    //离职申请
    public function apply()
    {
        $centerArr = $this->centerModel->clist();
        $jobArr = $this->jobModel->jList();
        return view('departure/apply')->with(['centerList' => $centerArr, 'jobList' => $jobArr]);
    }

    public function add(Request $request)
    {
        $center_id = $request->get('center_id');
        $division_id = $request->get('division_id');
        $job_id = $request->get('job_id');

        $employees_name = $request->get('employees_name');
        $holiday = $request->get('holiday');

        $last_day = $request->get('last_day');
        $last_day_arr = explode('/', $last_day);
        $new_last_day = $last_day_arr[2].'/'.$last_day_arr[0].'/'.$last_day_arr[1];

        $reason = $request->get('reason');
        $comment = $request->get('comment');

        $insert = ['center_id' => $center_id, 'division_id' => $division_id, 'job_id' => $job_id, 'employees_name' => $employees_name, 'holiday' => $holiday, 'last_day' => $new_last_day.' 00:00:00', 'reason' => $reason, 'comment' => $comment, 'apply_time' => date('Y-m-d H:i:s', time())];
        $bool = $this->departureModel->add($insert);
        if ($bool) {
            return $this->respondSuccess('添加成功');
        } else {
            return $this->respondFailure('添加失败');
        }
    }
}
