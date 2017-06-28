<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Model\UserModel;

class UserController extends BaseController
{
    protected $user_model;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserModel $user_model)
    {
        $this->user_model = $user_model;
    }

    /**
     * Show the application dashboard.
     *
     * @return bool
     */
    public function index(Request $request)
    {
        $userObj = $this->user_model->user_list(['status' => 0]);
        var_dump($userObj);
    }
}
