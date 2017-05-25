<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return bool
     */
    public function index()
    {
        $roleArr = DB::table('role')->get()->toArray();
        return view('role/index')->with('roleList',$roleArr);
    }

    public function addView()
    {
        echo 1;
    }
}
