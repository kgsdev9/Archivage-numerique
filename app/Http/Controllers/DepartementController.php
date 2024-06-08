<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    public function index() {
        $allDepartements = Departement::all();
        return view('departements.index', compact('allDepartements'));
    }
}
