<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $table = "players";
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function photo()
    {
        return $this->hasOne(Photo::class);
    }

    
    
}
