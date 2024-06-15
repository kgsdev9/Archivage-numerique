<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle'
    ];


    public function dossiers() {
        return $this->hasMany(Dossier::class);
    }


    public function typedocuments()  {
        return $this->belongsToMany(TypeDocument::class, 'departement_typedocument', 'departement_id', 'typedocument_id');
    }
}
