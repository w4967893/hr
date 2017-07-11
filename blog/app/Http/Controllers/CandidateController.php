<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Model\CandidateModel;

class CandidateController extends BaseController
{
    protected $candidate_model;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CandidateModel $candidate_model)
    {
        $this->candidate_model = $candidate_model;
    }

    /**
     * Show the application dashboard.
     *
     * @return bool
     */
    public function index(Request $request)
    {
        $distribution_id = $request->get('distribution_id');
        $where = ['distribution_id' => $distribution_id];
        $candidateArr = $this->candidate_model->clist($where);
        return view('candidate/index')->with(['candidateArr' => $candidateArr]);
    }
}
