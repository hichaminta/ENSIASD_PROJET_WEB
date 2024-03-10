<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emploi_de_temps extends Model
{
    protected $fillable = ['id', 'titre', 'id_emploi_filiere', 'pdf'];
    use HasFactory;
}
