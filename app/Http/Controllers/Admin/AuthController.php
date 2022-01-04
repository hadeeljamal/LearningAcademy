<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('auth.login');
    }
    public function dologin(Request $request)
    {$data= $request->all();
        dd($data);
          $data =  $request->validate([
                'email'=>'required|email|max:191',
                'password'=>'required|string',
            ]);




        }

    //sign the user in
    //redirect

}
