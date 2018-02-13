<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function coin()
    {
    	return $this->belongsTo(Coin::class);
    }
}
