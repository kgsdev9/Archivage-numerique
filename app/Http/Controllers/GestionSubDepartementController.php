<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\TypeDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GestionSubDepartementController extends Controller
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
    public function index()
    {
        //
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

        $departement  = Departement::find($request->departementid);
        $typedocument =   TypeDocument::create([
            'libelle'=> $request->typedocument,
            'code' => rand(100, 300)
        ]);

        DB::table('departement_typedocument')->insert([
            'departement_id' => $departement->id,
            'typedocument_id' => $typedocument->id,
        ]);

        return response()->json('création effectué avec sucesss');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($departementid)
    {
        $departement = Departement::find($departementid);
        $listetypedocument = $departement->typedocuments;

        // dd($listetypedocument->dossiers);
        return view('gestions.soudepartement.liste', compact('departement', 'listetypedocument'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $departementId)
    {
        $typedocument = TypeDocument::find($id);
        return view('gestions.soudepartement.edition', compact('typedocument', 'departementId'));
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
      $departement = intval($request->departementId);

       $typedocument = TypeDocument::find($id);
       $typedocument->update([
         'libelle' => $request->libelle,
       ]);
       return redirect()->route('gestion.subdepartement', $departement);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departement = TypeDocument::find($id);
        $departement->delete();
        return redirect()->back();
    }
}
