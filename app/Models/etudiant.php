<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
   protected $fillable = ['id','etudiant','Filiere','CNE'];
    use HasFactory;
}
