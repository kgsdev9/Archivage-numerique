<?php

namespace App\Http\Livewire;

use App\Models\Departement as ModelsDepartement;
use Livewire\Component;

class Departement extends Component
{
    public $search = "";

    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.departement', [
            'allDepartements' => ModelsDepartement::where('libelle', 'like', '%'.$this->search.'%')->get()
        ]);
    }
}
