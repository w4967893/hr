<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Model\DistributionModel;

class DistributionController extends BaseController
{
    protected $distribution_model;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DistributionModel $distribution_model)
    {
        $this->distribution_model = $distribution_model;
    }

    /**
     * Show the application dashboard.
     *
     * @return bool
     */
    public function index(Request $request)
    {
        //状态
        $status = $request->get('status');
        $position = $request->get('position');
        $center_name = $request->get('center_name');
        $affiliated_center_name = $request->get('affiliated_center_name');
        $division_name = $request->get('division_name');
        $where[] = ['distribution.status', '=', $status];
        if ($position) {
            $where[] = ['demand.position', '=', $position];
        }
        if ($center_name) {
            $where[] = ['center.name', '=', $center_name];
        }
        if ($position) {
            $where[] = ['affiliated_center.name', '=', $affiliated_center_name];
        }
        if ($position) {
            $where[] = ['division.name', '=', $division_name];
        }

        $distributionArr = $this->distribution_model->dlist($where);
        return view('distribution/index')->with(['distributionArr' => $distributionArr, 'position' => $position, 'center_name' => $center_name, 'affiliated_center_name' => $affiliated_center_name, 'division_name' => $division_name, 'status' => $status]);
    }
}
