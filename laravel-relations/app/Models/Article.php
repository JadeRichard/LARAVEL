<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = "articles";

    public function commentaire(){
        return $this->hasOne(Commentaire::class);
    }
}
