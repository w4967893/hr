<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Model\DemandModel;

class DemandController extends BaseController
{
    protected $demand_model;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DemandModel $demand_model)
    {
        $this->demand_model = $demand_model;
    }

    /**
     * Show the application dashboard.
     *
     * @return bool
     */
    public function index(Request $request)
    {
        $position = $request->get('position');
        $center_name = $request->get('center_name');
        $affiliated_center_name = $request->get('affiliated_center_name');
        $division_name = $request->get('division_name');
        $where[] = ['demand.status', '=', 0];
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
//        var_dump($where);exit;
        $demandArr = $this->demand_model->dlist($where);
        return view('demand/index')->with(['demandList' => $demandArr, 'position' => $position, 'center_name' => $center_name, 'affiliated_center_name' => $affiliated_center_name, 'division_name' => $division_name]);
    }

}
