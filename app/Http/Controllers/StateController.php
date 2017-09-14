<?php

namespace App\Http\Controllers;

use App\State;
use App\Town;
use Illuminate\Http\Request;


class StateController extends Controller
{
  
  public function GetCountries()
{
  $states = state::all();
  $data = [];
  $data[0] = [
      'id'   => 0,
      'text' =>'Seleccione',
  ];

  foreach ($states as $key => $value) {
      $data[$key+1] =[
          'id'   => $value->id,
          'text' => $value->name,
      ];
      # code...
  }

  return response()->json($data);

}
public function GetStates($id)
{
  $towns = town::where('state_id',$id)->get();
  $data = [];
  $data[0] = [
      'id'   => 0,
      'text' =>'Seleccione',
  ];
  foreach ($towns as $key => $value) {
     $data[$key+1] =[
          'id'   => $value->id,
          'text' => $value->name,
      ];
  }

  return response()->json($data);
}
}
