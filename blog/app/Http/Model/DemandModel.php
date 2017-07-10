<?php

namespace App\Http\Model;

use Illuminate\Support\Facades\DB;

class DemandModel
{
    //单个插入
    public function add($name, $desc, $time, $username)
    {
        $id = DB::table('demand')->insertGetId(
            ['name' => $name, 'describe' => $desc, 'create_time' => $time, 'create_name' => $username,]
        );
        return $id;
    }

    //修改
    public function update($where, $field)
    {
        $bool = DB::table('demand')->where($where)->update($field);
        var_dump($bool);
    }

    //列表
    public function dlist($where)
    {
        $demandArr = DB::table('demand')
                        ->join('center', 'center.id', '=', 'demand.center_id')
                        ->join('affiliated_center', 'affiliated_center.id', '=', 'demand.affiliated_center_id')
                        ->join('division', 'division.id', '=', 'demand.division_id')
                        ->select('demand.*', 'center.name as center_name', 'affiliated_center.name as affiliated_center_name', 'division.name as division_name')
                        ->where($where)->simplePaginate(env('PAGE_LIMIT'));
        return $demandArr;
    }
}