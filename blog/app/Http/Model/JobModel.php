<?php

namespace App\Http\Model;

use Illuminate\Support\Facades\DB;

class JobModel
{
    //列表
    public function jList()
    {
        return DB::table('job')->get()->toArray();
    }
}