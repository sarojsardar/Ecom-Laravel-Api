<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getUser(){
        $users = User::get();
        $data['status']= 'success';
        $data['user_list']= $users;
        return response()->json($data, 200);
    }
}
