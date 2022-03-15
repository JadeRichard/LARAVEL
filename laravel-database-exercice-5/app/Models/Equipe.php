<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    protected $table = "equipes";

    protected $fillable = [
        "nom",
        "ville",
        "commune",
        "nbrjoueurs",
        "nbrpostes"
    ];

    protected $guarded = ["id"];
}
