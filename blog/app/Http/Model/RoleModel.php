<?php

namespace App\Http\Model;

use Illuminate\Support\Facades\DB;

class RoleModel
{
    //单个插入
    public function add($name, $desc, $time, $username)
    {
        $id = DB::table('role')->insertGetId(
            ['name' => $name, 'describe' => $desc, 'create_time' => $time, 'create_name' => $username,]
        );
        return $id;
    }
}