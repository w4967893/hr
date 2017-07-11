<?php

namespace App\Http\Model;

use Illuminate\Support\Facades\DB;

class CandidateModel
{
    //单条
    public function one($where)
    {
        return DB::table('candidate')->where($where)->first()->toArray();
    }

    //列表
    public function clist($where)
    {
        return DB::table('candidate')->where($where)->get()->toArray();
    }
}