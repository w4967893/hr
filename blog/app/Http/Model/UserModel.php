<?php

namespace App\Http\Model;

use Illuminate\Support\Facades\DB;

class UserModel
{
    //获取用户列表
    public function user_list($where)
    {
        return DB::table('users')->where($where)->simplePaginate(env('PAGE_LIMIT'));
    }
}