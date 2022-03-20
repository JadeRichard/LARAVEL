<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plop extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'nom',
        'prenom',
        'age',
        'plop',
    ]; // model_anchor
     
    protected $table = 'plops';
}
