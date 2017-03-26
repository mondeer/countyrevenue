<?php

namespace revenue\Http\Controllers;

use Illuminate\Http\Request;
use revenue\Motorbike;
use Sentinel;

class MotorController extends Controller
{
    public function Create(Request $request){
      return view('clerk.create');
    }

    public function postCreate(Request $request) {
      $motorbikes = new Motorbike;
      $motorbikes->owner_name = $request->input('owner_name');
      $motorbikes->gender = $request->input('gender');
      $motorbikes->motorbike_reg = $request->input('motorbike_reg');
      $motorbikes->logbook_no = $request->input('logbook_no');
      $motorbikes->dop = $request->input('dop');
      $motorbikes->phone = $request->input('phone');
      $motorbikes->save();

      // Session::flash('flash_message', 'successfully added!');


      return redirect('motor/view');

    }

    public function view(Request $request) {
      $motors = Motorbike::all();

      // dd($motors);
      return view('clerk.view')-> with('motors', $motors);
    }

    public function edit($id) {
      $motor = Motorbike::findOrFail($id);
      return view('clerk.edit')->with('motor', $motor);
    }

    public function update($id) {
      $motors = Motorbike::findOrFail($id);

      $input = $request->all();

      $motors = fill($input)->save();

      dd($motors);
    }


}
