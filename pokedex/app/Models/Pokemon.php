<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;
    
    protected $table = 'pokemons';
    
    public function user() {
        return $this->belongsToMany(User::class);
    }
    
    public function type() {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function moves() {
        return $this->belongsToMany(Move::class);
    }
}
