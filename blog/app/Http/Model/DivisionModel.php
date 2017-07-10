<?php

namespace App\Http\Model;

use Illuminate\Support\Facades\DB;

class DivisionModel
{
    public function one($where)
    {
        return DB::table('division')->where($where)->first()->toArray();
    }
}