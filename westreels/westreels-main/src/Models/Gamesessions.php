<?php

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Gamesessions extends Authenticatable {
      
    protected $table = 'gamesessions';
    protected $timestamp = true;
    protected $primaryKey = 'id';

    protected $fillable = [
        'token_internal',
        'player_id',
        'game_id',
        'currency',
        'extra_meta',
        'token_original',
        'expired_bool',
        'created_at',
        'updated_at',
    ];
}