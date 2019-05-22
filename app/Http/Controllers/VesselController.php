<?php
namespace App\Http\Controllers;

use App\Vessel;
use Illuminate\Http\Request;

class VesselController extends Controller{


  /**
   * Retrieve the list of vessels
   *
   * @param  int  $id
   * @return Response
   */
  public function index(Request $request){
    return Vessel::all();
  }

  /**
   * Retrieve the vessel for the given ID.
   *
   * @param  int  $id
   * @return Response
   */
  public function show(Request $request, Int $id)
  {
      return Vessel::findOrFail($id);
  }

  /**
   * Save a vessel
   *
   * @return Response
   */
  public function store(Request $request){
    $vessel = new Vessel;
    $vessel->name = $request->name;
    $vessel->description = $request->description;
    $vessel->save();
    return $vessel;
  }

}