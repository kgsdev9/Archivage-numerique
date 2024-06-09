<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'nom',
        'fichier',
        'dossier_id'
    ];

    public function dossier()
    {
        return $this->belongsTo(Dossier::class);
    }

    public function getIconFile()
    {
        $fichier = $this->fichier;
        $extension = explode('.', $fichier)[1];

        $path = "";
        switch ($extension) {
            case 'jpg':
                $path = asset('homes-assets/images/image.png');
                break;
            case 'doc':
                $path = asset('homes-assets/images/doc.png');
                break;
            case 'pdf':
                $path = asset('homes-assets/images/pdf.png');
                break;
            case 'xlsx':
                $path = asset('homes-assets/images/xls.png');
                break;

            default:
                $path = asset('homes-assets/images/image.png');
                break;
        }
        return $path;
    }


}
