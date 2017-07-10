<?php

namespace App\Http\Model;

use Illuminate\Support\Facades\DB;

class DistributionModel
{
    //获取一条数据
    public function one($where)
    {
        return DB::table('distribution')->where($where)->first()->toArray();
    }

    //添加
    public function add($insert)
    {
        $id = DB::table('role')->insertGetId($insert);
        return $id;
    }
}