<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filiere extends Model
{
    protected $fillable = [
        'id',
        'titre',
         'pdf',
        ];
    use HasFactory;
}
