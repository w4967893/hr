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
        $id = DB::table('distribution')->insertGetId($insert);
        return $id;
    }

    //分配列表
    public function dlist($where)
    {
        $distributionArr = DB::table('distribution')
            ->join('demand', 'distribution.demand_id', '=', 'demand.id')
            ->join('center', 'center.id', '=', 'demand.center_id')
            ->join('affiliated_center', 'affiliated_center.id', '=', 'demand.affiliated_center_id')
            ->join('division', 'division.id', '=', 'demand.division_id')
            ->select('demand.position', 'demand.money_before', 'demand.money_after', 'center.name as center_name', 'affiliated_center.name as affiliated_center_name', 'division.name as division_name', 'distribution.*')
            ->where($where)->simplePaginate(env('PAGE_LIMIT'));
        return $distributionArr;
    }
}