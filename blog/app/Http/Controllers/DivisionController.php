<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Model\DivisionModel;

class DivisionController extends BaseController
{
    protected $divisionModel;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DivisionModel $divisionModel)
    {
        $this->divisionModel = $divisionModel;
    }

    /**
     * Show the application dashboard.
     *
     * @return bool
     */
    public function dList(Request $request)
    {
        $centerId = $request->input('centerId');
        $where = ['center_id' => $centerId];
        $divisionArr = $this->divisionModel->dlist($where);
        if ($divisionArr) {
            return $this->respondSuccess('添加成功', $divisionArr);
        } else {
            return $this->respondFailure('添加失败');
        }
    }
}
