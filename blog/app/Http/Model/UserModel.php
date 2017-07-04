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

    //单个插入
    public function add($field)
    {
        $id = DB::table('users')->insertGetId($field);
        return $id;
    }

    //删除用户
    public function update($where, $field)
    {
        return DB::table('users')->where($where)->update($field);
    }
}