<?php

namespace App\Http\Controllers;

use App\Models\Annee;
use App\Models\Departement;
use App\Models\Dossier;
use App\Models\TypeDocument;
use Illuminate\Http\Request;

class ProgressActionController extends Controller
{
    public function selectTypeDocument($idDepartement)
    {
       $typedocument =  TypeDocument::all();
        return view('progession.typedocument.liste', compact('typedocument', 'idDepartement'));
    }

    public function selectAnnee($DepartementId, $TypeDocumentId)
    {

        $anne = Annee::all();
        return view('progession.annee.liste', compact( 'anne','DepartementId', 'TypeDocumentId'));
    }

    public function exploreFolder($DepartementId, $TypeDocumentId, $AnneeId)
    {
       $dossier =  Dossier::where('departement_id', $DepartementId)
                ->where('typedocument_id', $TypeDocumentId)
                ->where('annee_id', $AnneeId)
                ->orderByDesc('created_at')
                ->paginate(10);
        $typedocument = TypeDocument::where('id', $TypeDocumentId)->first();
        $departement = Departement::where('id', $DepartementId)->first();
        $annee = Annee::where('id', $AnneeId)->first();
        $listetypedocument = TypeDocument::all();
        return view('progession.dossiers.liste', compact('DepartementId', 'TypeDocumentId', 'AnneeId', 'typedocument', 'departement', 'annee', 'dossier', 'listetypedocument'));
    }
}