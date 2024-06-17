<?php

namespace App\Http\Controllers\Render;

use ZipArchive;
use App\Models\Dossier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ZippController extends Controller
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
    public function exportDossier(Request $request)
    {
        $dossier = Dossier::findOrFail($request->dossierid);
        // Récupérer tous les fichiers associés à ce dossier
        $fichiers = $dossier->documents;
        $zipFileName = $dossier->nom .'.zip';
        $zip = new ZipArchive;
        $zip->open(storage_path($zipFileName), ZipArchive::CREATE | ZipArchive::OVERWRITE);

        // Ajouter chaque fichier au ZIP
        foreach ($fichiers as $document) {
            $cheminFichier = storage_path('app/public/documents/'.$document->fichier);
            if (file_exists($cheminFichier)) {
                $zip->addFile($cheminFichier, $document->nom);
            } else {
                dd('ss');
                \Log::error("Le fichier $cheminFichier n'existe pas.");
            }
        }
        // Fermer le ZIP
        $zip->close();

        // Retourner une réponse de téléchargement
        return response()->download(storage_path($zipFileName))->deleteFileAfterSend(true);
        //supprimer le fichier apres l'extraction
        // return response()->download(storage_path($zipFileName));
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
