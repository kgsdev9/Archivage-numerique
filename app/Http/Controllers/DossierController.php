<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use App\Models\Dossier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DossierController extends Controller
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
        $listedossiers = Dossier::orderByDesc('created_at')->get();
        return view('dossiers.index', compact('listedossiers'));
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
        // dd($request->all());
        $uuid = Uuid::uuid4();
        Dossier::create([
            'unqId'=> $uuid,
            'nom'=> $request->nomdossier,
            'departement_id'=>$request->departementId,
            'annee_id'=> $request->anneId,
            'typedocument_id'=>$request->typedossier,
            'user_id' => Auth::user()->id
        ]);

        return response()->json(['success' => 'Création effecue avec sucess']);

        // return redirect()->back();

        // dd('sss');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dossiers = Dossier::find($id);
      return view('progession.dossiers.detail', compact('dossiers'));
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
        $dossier = Dossier::find($id);
        $doccuments =    $dossier->documents;
        foreach ($doccuments as $document)
        {
            Storage::delete('documents/'. $document->fichier);
            $document->delete();
        }
        $dossier->delete();
        return redirect()->back();

    }
}
