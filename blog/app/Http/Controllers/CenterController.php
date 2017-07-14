<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Model\CenterModel;
use App\Http\Model\AffiliatedCenterModel;
use App\Http\Model\DivisionModel;

class CenterController extends BaseController
{
    protected $center_model;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CenterModel $center_model, AffiliatedCenterModel $affiliated_center_model, DivisionModel $division_model)
    {
        $this->center_model = $center_model;
        $this->affiliated_center_model = $affiliated_center_model;
        $this->division_model = $division_model;
    }

    /**
     * Show the application dashboard.
     *
     * @return bool
     */
    public function index(Request $request)
    {
        $name = $request->get('name');
        $centerArr = DB::table('center')->where('name', 'like', '%'.$name.'%')->simplePaginate(env('PAGE_LIMIT'));
        return view('center/index')->with(['centerList' => $centerArr, 'name' => $name]);
    }

    //删除
    public function del(Request $request)
    {
        $id = $request->get('center_id');
        $where = ['id' => $id];
        //删除中心
        $bool = $this->center_model->del($where);
        //删除副中心
        $awhere = ['center_id' => $id];
        $acmArr = $this->affiliated_center_model->alist($awhere);
        $abool = $this->affiliated_center_model->del($awhere);
        //删除部门
        foreach ($acmArr as $key => $value) {
            $dwhere = ['affiliated_center_id' => $value->id];
            $dbool = $this->division_model->del($dwhere);
        }
        if ($bool && $abool && $dbool) {
            return $this->respondSuccess('删除成功');
        } else {
            return $this->respondFailure('删除失败');
        }
    }

    //修改
    public function update()
    {

    }

    //新增
    public function add(Request $request)
    {
        $name = $request->input('name');
        $username = $request->input('username');
        $phone = $request->input('phone');
        $position = $request->input('position');

        $insert = ['name' => $name, 'username' => $username, 'phone' => $phone, 'position' => $position];
        $bool = $this->center_model->add($insert);
        if ($bool) {
            return $this->respondSuccess('添加成功');
        } else {
            return $this->respondFailure('添加失败');
        }
    }
}
