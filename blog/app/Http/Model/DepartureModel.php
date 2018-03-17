<?php

namespace App\Http\Model;

use Illuminate\Support\Facades\DB;

class DepartureModel
{
    //列表
    public function dlist($where)
    {
        $data = DB::table('departure')
            ->leftJoin('center', 'center.id', '=', 'departure.center_id')
            ->leftJoin('division', 'division.id', '=', 'departure.division_id')
            ->leftJoin('job', 'job.id', '=', 'departure.job_id')
            ->select('departure.id','departure.apply_time','departure.employees_name','departure.last_day','departure.reason','center.name as center_name','center.username as center_username','division.name as division_name','division.username as division_username','job.name as job_name')
            ->where($where)->paginate(env('PAGE_LIMIT'));
        return $data;
    }
}
