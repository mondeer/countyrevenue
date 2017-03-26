<?php

namespace revenue\Http\Controllers;

use Illuminate\Http\Request;
use revenue\defaulters;

class defaulterController extends Controller
{
  public function Create(Request $request){
    return view('clerk.defaulter');
  }

  public function postCreate(Request $request) {
    $defaulters= new defaulters;
    $defaulters->motorbike_reg = $request->input('motorbike_reg');
    $defaulters->defaulter_amount = $request->input('defaulter_amount');
    $defaulters->save();

    return view('clerk.defaulter')->with('message', 'Success');

}
}
