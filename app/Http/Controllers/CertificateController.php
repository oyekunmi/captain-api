<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certificate;
use App\Vessel;

class CertificateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Retrieve the list of certificates for a given vessel
     *
     * @param  int  $id
     * @return Response
     */
    public function index(Request $request)
    {
        return Certificate::all();
    }

    /**
     * Store a certificate attached to a vessel
     *
     * @param  int  $id
     * @return Response
     */
    public function store(Request $request, $id)
    {
        $c = new Certificate;
        $c->vessel_id = $id;
        $c->name = $request->name;
        $c->description = $request->description;
        $c->group = $request->group;
        $c->issue = $request->issue;
        $c->expiry = $request->expiry;
        $c->renewals = $request->renewals;
        $c->save();
        return response()->json([
            'certificate'=> $c
        ]);
    }

    /**
     * Retrieve the certificate for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Request $request, Int $id)
    {
        return Certificate::findOrFail($id);
    }

    /**
     * Retrieve the certificate for the given ID.
     *
     * @param  String  $sate
     * @return Response
     */
    public function state(Request $request, String  $state)
    {
        return Certificate::where('state', strtoupper($state))->get();
    }

    /**
     * Retrieve the certificate for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function byVessel(Request $request, Int $id)
    {
        return Vessel::find($id)->certificates;
    }

    /**
     * Retrieve the certificate for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function byVesselAndState(Request $request, Int $id, String $state)
    {
        return Vessel::find($id)->certificates()->where('state', strtoupper($state))->get();
    }

    
}
