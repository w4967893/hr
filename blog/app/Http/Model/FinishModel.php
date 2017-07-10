<?php

namespace App\Http\Model;

use Illuminate\Support\Facades\DB;

class FinishModel
{
    public function one($where)
    {
        return DB::table('finish')->where($where)->first()->toArray();
    }
}