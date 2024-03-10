<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class annonce extends Model
{
    protected $fillable = ['id', 'titre', 'date_annonce', 'Description', 'Image'];
    use HasFactory;
}
