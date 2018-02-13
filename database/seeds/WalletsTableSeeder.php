<?php

use App\User;
use App\Models\Wallet;
use Illuminate\Database\Seeder;

class WalletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('wallets')->truncate();

        foreach (User::get() as $user) {
        	foreach ($user->coins as $coin) {
	        	factory(Wallet::class, rand(1,2))->create([
	        		'user_id' => $user->id,
	        		'coin_id' => $coin->id,
	        	]);
        	}
        }
    }
}
