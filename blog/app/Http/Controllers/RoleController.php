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
        $roles = DB::table('role')->get();
        return view('role/index');
    }

    public function add(Request $request)
    {
        $name = $request->get('name');
        echo $name;
    }
}
