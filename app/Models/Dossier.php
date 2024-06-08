<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Ramsey\Uuid\Uuid;

class Dossier extends Model
{
    use HasFactory;

    protected $fillable = [
        'unqId',
        'code',
        'departement_id',
        'annee_id',
        'typedocument_id'
    ];


   



    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }

    public function typedocument(): BelongsTo
    {
        return $this->belongsTo(TypeDocument::class);
    }

    public function departement(): BelongsTo
    {
        return $this->belongsTo(Departement::class);
    }


    public function annee(): BelongsTo
    {
        return $this->belongsTo(Annee::class);
    }
}
