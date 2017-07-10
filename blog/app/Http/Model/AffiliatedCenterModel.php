<?php

namespace App\Http\Model;

use Illuminate\Support\Facades\DB;

class AffiliatedCenterModel
{
    public function one($where)
    {
        return DB::table('affiliated_center')->where($where)->first()->toArray();
    }
}