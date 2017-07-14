<?php

namespace App\Http\Model;

use Illuminate\Support\Facades\DB;

class CenterModel
{
    public function one($where)
    {
        return DB::table('center')->where($where)->first()->toArray();
    }

    //列表
    public function clist()
    {
        return DB::table('center')->get()->toArray();
    }

    //删除
    public function del($where)
    {
        return DB::table('center')->where($where)->delete();
    }

    //单个插入
    public function add($insert)
    {
        $id = DB::table('center')->insertGetId($insert);
        return $id;
    }
}