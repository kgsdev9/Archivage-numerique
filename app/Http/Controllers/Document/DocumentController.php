<?php

namespace App\Http\Controllers\Document;

use App\Models\Dossier;
use App\Models\Document;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
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
        $listedocuments = Document::orderByDesc("created_at")->get();
        return view('documents.liste', compact('listedocuments'));
    }

    // public function search(Request $request)
    // {
    //     $search = $request->input('search'); // Récupère le terme de recherche depuis la requête

    //     // Recherche les utilisateurs correspondant au terme de recherche
    //     $users = Dossier::where('code', 'like', '%'.$search.'%')

    //                  ->get();


    // }

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
        foreach ($request->file('document') as $file)
        {
           $fileName =  $file->getClientOriginalName();
            $file->storeAs('documents', $fileName, 'public');
            Document::create([
                'code'=> rand(100, 24444),
                'nom'=> $fileName,
                'fichier' => $fileName,
                'dossier_id'=> $request->iddossier,
                'user_id' => Auth::user()->id
            ]);
        }

        return response()->json(['sucess', 'document enregistré avec succes']);
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
        $doccument = Document::find($id);
        // dd($doccument);
        // $doc = Storage::url('documents/'. $doccument->fichier);
        // dd($doc);
        Storage::delete('documents/'. $doccument->fichier);
        $doccument->delete();
        return redirect()->back();
    }
}
