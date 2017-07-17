<?php

namespace App\Http\Model;

use Illuminate\Support\Facades\DB;

class AffiliatedCenterModel
{
    public function one($where)
    {
        return DB::table('affiliated_center')->where($where)->first()->toArray();
    }

    //获取副中心列表
    public function alist($where)
    {
        return DB::table('affiliated_center')->where($where)->get()->toArray();
    }

    //删除
    public function del($where)
    {
        return DB::table('affiliated_center')->where($where)->delete();
    }

    //单个插入
    public function add($insert)
    {
        $id = DB::table('affiliated_center')->insertGetId($insert);
        return $id;
    }
}