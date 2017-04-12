<?php

namespace revenue\Http\Controllers;

use Illuminate\Http\Request;
use revenue\Motorbike;
use revenue\Revenue;
use Carbon\carbon;

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

      return view('clerk.show')->with('motorevs', $motorevs);
    }

    public function filte() {
      return view('clerk.audit');
    }

    public function filter(Request $request) {
      $months = Revenue::query();
      $month = $request->input('month');



      $revenues = $months->where('month', $month)->get();
      
      return view('clerk.monthly')->with('revenues', $revenues);
    }

    public function defaulter() {
      $motorevs = Motorbike::with('revenues')->whereDoesntHave('revenues')->get();

      // dd($motorevs);
      return view('clerk.defaulter')->with('motorevs', $motorevs);
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
