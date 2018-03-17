<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Model\DepartureModel;

class DepartureController extends BaseController
{
    protected $departureModel;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DepartureModel $departureModel)
    {
        $this->departureModel = $departureModel;
    }

    /**
     * Show the application dashboard.
     *
     * @return bool
     */
    public function index(Request $request)
    {

        $where = [];
        $departureArr = $this->departureModel->dlist($where);
        return view('departure/index')->with(['departureList' => $departureArr]);
    }

    //离职申请
    public function apply()
    {
        return view('departure/apply');
    }
}
