<?php

namespace revenue\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class UserController extends Controller
{
  public function login(){
    return view('clerk.login');
  }
  public function postLogin(Request $request) {

  }
}
