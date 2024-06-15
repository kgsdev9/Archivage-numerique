<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    public function index() {
        $allDepartements = Departement::orderByDesc('libelle')->get();
        return view('departements.index', compact('allDepartements'));
    }


    public function store(Request $request)
    {
        Departement::create([
            'libelle'=> $request->libelledepartement
        ]);
        return response()->json('Création effeucté avec success');
    }

    public function update(Request $request, $id)
    {
        
    }


    public function destroy($id)
    {
        $departement = Departement::find($id);
        $departement->delete();
        return redirect()->back();
    }
}
