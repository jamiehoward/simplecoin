<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function wallets()
    {
    	return $this->hasMany(Wallet::class);
    }
}
