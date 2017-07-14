<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Model\CenterModel;
use App\Http\Model\AffiliatedCenterModel;
use App\Http\Model\DivisionModel;

class CompanyinfoController extends BaseController
{
    protected $center_model;
    protected $affiliated_center_model;
    protected $division_model;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CenterModel $center_model, AffiliatedCenterModel $affiliated_center_model, DivisionModel $division_model)
    {
        $this->center_model = $center_model;
        $this->affiliated_center_model = $affiliated_center_model;
        $this->division_model = $division_model;
    }

    //中心信息
    public function center()
    {
        $this->center_model->clist();
    }

    //副中心信息
    public function affiliated_center()
    {
        $this->affiliated_center_model->alist();
    }

    //部门信息
    public function division()
    {
        $this->division_model->dlist();
    }
}
