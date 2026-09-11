<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Game extends Model
{
    protected $fillable = [
        'user_id',
        'score',
        'started_at',
        'ended_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);//BİR OYUN 1 OYUNCUYA AİT
        
    }
}
