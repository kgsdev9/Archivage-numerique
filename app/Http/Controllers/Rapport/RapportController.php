<?php

namespace App\Http\Controllers\Rapport;

use App\Models\Dossier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RapportController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listerapports()
    {

        $dossiersParAnnee = Dossier::join('annees', 'dossiers.annee_id', '=', 'annees.id')
        ->select(DB::raw('YEAR(dossiers.created_at) as annee'), DB::raw('count(*) as count'))
        ->groupBy(DB::raw('YEAR(dossiers.created_at)'))
        ->get();

        // foreach($dossiersParAnnee as $vdossiersParAnnee) {
        //     dd($vdossiersParAnnee->annee);
        // }

        $annees = $dossiersParAnnee->pluck('annee')->toArray();
        $nombreDossiers = $dossiersParAnnee->pluck('count')->toArray();

        return view('rapports.repport', compact('annees', 'nombreDossiers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
