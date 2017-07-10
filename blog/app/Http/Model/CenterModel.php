<?php

namespace App\Http\Model;

use Illuminate\Support\Facades\DB;

class CenterModel
{
    public function one($where)
    {
        return DB::table('center')->where($where)->first()->toArray();
    }
}