<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Game;

class User extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function games()
    {
        return $this->hasMany(Game::class);//bir oyuncu birden fazla oyyun atabilir
    }
}
