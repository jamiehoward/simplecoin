<?php

namespace App;

use App\Models\Coin;
use App\Models\Wallet;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function coins()
    {
        return $this->hasMany(Coin::class);
    }

    public function wallets()
    {
        return $this->hasMany(Wallet::class)->with('coin');
    }
}
