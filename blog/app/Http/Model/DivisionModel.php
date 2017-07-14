<?php

namespace App\Http\Model;

use Illuminate\Support\Facades\DB;

class DivisionModel
{
    public function one($where)
    {
        return DB::table('division')->where($where)->first()->toArray();
    }

    //删除
    public function del($where)
    {
        return DB::table('division')->where($where)->delete();
    }
}