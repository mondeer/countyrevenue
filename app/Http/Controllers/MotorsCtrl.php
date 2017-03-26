<?php

namespace revenue\Http\Controllers;

use Illuminate\Http\Request;
use revenue\Motorbike;
use revenue\Revenue;

class MotorsCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('clerk.create');
    }

    public function store(Request $request)
    {
      $motorbikes = new Motorbike;
      $motorbikes->owner_name = $request->input('owner_name');
      $motorbikes->gender = $request->input('gender');
      $motorbikes->motorbike_reg = $request->input('motorbike_reg');
      $motorbikes->logbook_no = $request->input('logbook_no');
      $motorbikes->dop = $request->input('dop');
      $motorbikes->phone = $request->input('phone');
      $motorbikes->save();

      return redirect('motor/view');
    }

    public function show($id)
    {
      $motors = Motorbike::all();

      return view('clerk.view')-> with('motors', $motors);
    }
    public function edit($id)
    {
      $motor = Motorbike::findOrFail($id);
      return view('clerk.edit')->with('motor', $motor);
    }

    public function update(Request $request, $id)
    {
      $motors = Motorbike::findOrFail($id);

      $motors->owner_name = $request->input('owner_name');
      $motors->phone = $request->input('phone');
      $motors->save();

      return redirect('/motor/view')->with(array(
        'motors'=>$motors,
        'update'=>true
      ));
    }

    public function destroy($id)
    {
      $motor = Motorbike::find($id);
      $motor->delete();
      return redirect('/motor/view')->with('message','data hasbeen deleted!');
    }
}
