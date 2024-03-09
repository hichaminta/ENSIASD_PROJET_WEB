<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    protected $fillable = [
        'id',
        'Titreactualites',
        'Descriptionactualites',
        'Typeactualites',
        'dateactualites',
        'Createur',
        'placeevenement',
        ];

    use HasFactory;
}
