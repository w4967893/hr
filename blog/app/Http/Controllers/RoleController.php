<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Model\RoleModel;

class RoleController extends BaseController
{
    protected $role_model;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(RoleModel $role_model)
    {
        $this->role_model = $role_model;
    }

    /**
     * Show the application dashboard.
     *
     * @return bool
     */
    public function index()
    {
        $roleArr = DB::table('role')->simplePaginate(2);
        return view('role/index')->with('roleList',$roleArr);
    }

    //添加角色
    public function add(Request $request)
    {
        $name = $request->input('name');
        $desc = $request->input('desc');
        $time = date('Y-m-d H:i:s', time());
        $userObj = Auth::user();
        $bool = $this->role_model->add($name, $desc, $time, $userObj->name);
        if ($bool) {
            return $this->respondSuccess('添加成功');
        } else {
            return $this->respondFailure('添加失败');
        }
    }


}
