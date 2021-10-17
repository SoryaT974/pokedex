<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Move extends Model
{
    use HasFactory;
    
    public function user(){
        return $this->belongsToMany(User::class);
    }
    
    public function type() {
        return $this->hasOne(Type::class);
    }
    
    public function pokemons() {
        return $this->belongsToMany(Pokemon::class);
    }
}
