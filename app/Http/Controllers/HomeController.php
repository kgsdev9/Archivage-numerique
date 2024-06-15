<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Dossier;
use App\Models\Departement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $date = Carbon::now();

        //01 janvier
        $firstJanuary = Carbon::now()->startOfYear();
        // Récupérer le 31 décembre de l'année en cours
        $thirtyFirstDecember = Carbon::now()->endOfYear();

        // Récupérer l'année en cours
        $currentYear = $date->year;
        //
        $listedepartement  = Departement::all();
        $dossier = Dossier::take(20)->orderByDesc('created_at')->get();
        return view('welcome', compact('dossier', 'listedepartement'));
    }
}
