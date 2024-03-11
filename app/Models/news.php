<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $fillable = ['titre', 'description', 'date_publication', 'lien'];
    use HasFactory;
}
