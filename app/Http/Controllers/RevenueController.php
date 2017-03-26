<?php

namespace revenue\Http\Controllers;

use Illuminate\Http\Request;
use revenue\Motorbike;
use revenue\Revenue;

class RevenueController extends Controller
{

    public function index()
    {

    }

    public function Create($id)
    {
      $motor = Motorbike::findOrFail($id);
      return view('clerk.revenue')->with('motor', $motor);
    }

    public function store(Request $request, $id)
    {
      $motor = Motorbike::findOrFail($id);

      $revenue = new Revenue;

      $revenue->motorbike_id = $motor->id;
      $revenue->amount = $request->input('amount');
      $revenue->month = $request->input('month');
      $revenue->save();

      return redirect('/revenue/view/'.$motor->id)->with(array(
        'motor'=>$motor,
        'revenue'=>$revenue
      ));
    }

    public function view($id) {
      $motor = Motorbike::findOrFail($id);
      $revenues = Revenue::where('motorbike_id', $motor->id)->get();

      return view('clerk.revenueview')->with(array(
        'revenues'=>$revenues,
        'motor'=>$motor
      ));
    }

    public function shown() {
      $motorevs = Motorbike::with('revenues')->get();
      // dd($revenues);

      return view('clerk.show')->with('motorevs', $motorevs);
    }

    public function filte() {
      return view('clerk.audit');
    }

    public function filter(Request $request) {
      $month = $request->input('month');

      $revenue = Revenue::where('month', $month)->get();

      dd($revenue);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
