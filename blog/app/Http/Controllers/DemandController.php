<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Model\DemandModel;
use App\Http\Model\CenterModel;
use App\Http\Model\AffiliatedCenterModel;
use App\Http\Model\DivisionModel;
use App\Http\Model\FinishModel;
use App\Http\Model\DistributionModel;

class DemandController extends BaseController
{
    protected $demand_model;
    protected $center_model;
    protected $affiliated_center_model;
    protected $division_model;
    protected $finish_model;
    protected $distribution_model;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DemandModel $demand_model, CenterModel $center_model, AffiliatedCenterModel $affiliated_center_model, DivisionModel $division_model, FinishModel $finish_model, DistributionModel $distribution_model)
    {
        $this->demand_model = $demand_model;
        $this->center_model = $center_model;
        $this->affiliated_center_model = $affiliated_center_model;
        $this->division_model = $division_model;
        $this->finish_model = $finish_model;
        $this->distribution_model = $distribution_model;
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

    //添加
    public function add(Request $request)
    {
        $center_id = $request->post('center_id');
        $affiliated_center_id = $request->post('affiliated_center_id');
        $division_id = $request->post('division_id');
        $num = $request->post('num');
        $position = $request->post('position');
        $money_before = $request->post('money_before');
        $money_after = $request->post('money_after');

        $finish_num = 0;
        $remaining_num = $num;

        $insert = ['center_id' => $center_id, 'affiliated_center_id' => $affiliated_center_id, 'division_id' => $division_id, 'num' => $num, 'finish_num' => $finish_num, 'remaining_num' => $remaining_num, 'position' => $position, 'money_before' => $money_before, 'money_after' => $money_after];
        $bool = $this->demand_model->add($insert);
        if ($bool) {
            return $this->respondSuccess('添加成功');
        } else {
            return $this->respondFailure('添加失败');
        }
    }

    //修改
    public function update(Request $request)
    {
        $demand_id = $request->get('demand_id');
        $where = ['id' => $demand_id];
        $demandArr = $this->demand_model->one($where);
        if (!$demandArr) {
            return $this->respondFailure('参数错误');
        }
        $centerArr = $this->center_model->one(['id' => $demandArr['center_id']]);
        $affiliated_centerArr = $this->affiliated_center_model->one(['id' => $demandArr['affiliated_center_id']]);
        $divisionArr = $this->division_model->one(['id' => $demandArr['division_id']]);

        $demandArr['center_name'] = $centerArr['name'];
        $demandArr['affiliated_center_name'] = $affiliated_centerArr['name'];
        $demandArr['division_name'] = $divisionArr['name'];

        return $this->respondSuccess('添加成功', $demandArr);
    }

    //删除
    public function del(Request $request)
    {
        $demand_id = $request->get('demand_id');
        $where = ['id' => $demand_id];
        $bool = $this->demand_model->update($where, ['status' => 1]);
        if ($bool) {
            return $this->respondSuccess('删除成功');
        } else {
            return $this->respondFailure('删除失败');
        }
    }

    //分配需求
    public function distribution(Request $request)
    {
        $demand_id = $request->get('demand_id');
        $user_id = $request->get('user_id');
        $num = $request->get('num');
        $finish = 0;

        $insert = ['demand_id' => $demand_id, 'user_id' => $user_id, 'num' => $num, 'finish' => $finish];
        $bool = $this->distribution_model->add($insert);
        if ($bool) {
            return $this->respondSuccess('添加成功');
        } else {
            return $this->respondFailure('添加失败');
        }
    }
}
