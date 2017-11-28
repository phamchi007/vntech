<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Api\UsersModel;

class UsersController extends Controller
{
    public function __construct()
    {
        
    }
    
    public function index(){ print_r(1);die;
        $users_object = new UsersModel;
        $test = $users_object->getDataList();
        $rs = array();
        $rs['status'] = 1;
        $rs['data'] = $test;
        echo json_encode($rs);exit;
    }

    public function login(Request $request){
        print_r(1);die;
    }
}
?>