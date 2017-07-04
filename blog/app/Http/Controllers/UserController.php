<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Model\UserModel;

class UserController extends BaseController
{
    protected $user_model;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserModel $user_model)
    {
        $this->user_model = $user_model;
    }

    /**
     * Show the application dashboard.
     *
     * @return bool
     */
    public function index(Request $request)
    {
        $name = $request->get('user_name');
        $userArr = DB::table('users')->where('name', 'like', '%'.$name.'%')->where(['status' => 0])->simplePaginate(env('PAGE_LIMIT'));
        return view('user/index')->with(['userList' => $userArr, 'user_name' => $name]);
    }

    //添加用户
    public function add(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');

        //
        $password = Hash::make('123456');//密码加密
        $field = ['name' => $name, 'email' => $email, 'phone' => $phone, 'password' => $password];
        $bool = $this->user_model->add($field);
        if ($bool) {
            return $this->respondSuccess('添加成功');
        } else {
            return $this->respondFailure('添加失败');
        }
    }

    //删除
    public function del(Request $request)
    {
        $user_id = $request->get('user_id');
        $where = ['id' => $user_id];
        $field = ['status' => 1];
        $bool = $this->user_model->update($where, $field);
        if ($bool) {
            return $this->respondSuccess('删除成功');
        } else {
            return $this->respondFailure('删除失败');
        }
    }

    //重置密码
    public function reset(Request $request)
    {
        $user_id = $request->get('user_id');
        $where = ['id' => $user_id];

        $password = Hash::make('wangchuang');//密码加密
        $field = ['password' => $password];
        $bool = $this->user_model->update($where, $field);
        if ($bool) {
            return $this->respondSuccess('删除成功');
        } else {
            return $this->respondFailure('删除失败');
        }
    }
}
