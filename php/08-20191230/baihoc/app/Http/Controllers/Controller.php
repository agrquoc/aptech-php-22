<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB; // Bắt buộc phải khai báo khi dùng database

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function login(){
        return view('login');
    }
    function tableusers()
    {
        $users = DB::table('users')->get();
        return view('users',['users'=>$users]);
    }
}
?>
