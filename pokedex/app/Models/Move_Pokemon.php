<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Move_Pokemon extends Model
{
    use HasFactory;
    
    public function user(){
        return $this->belongsToMany(User::class);
    }
    
    public function type() {
        return $this->hasMany(Type::class);
    }
    
    public function pokemon(){
        return $this->belongsToMany(Pokemon::class);
    }
}
