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
}
