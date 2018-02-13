<?php

use App\Models\Coin;
use Illuminate\Database\Seeder;

class CoinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('coins')->truncate();

        factory(Coin::class, 5)->create(['user_id' => 1]);
    }
}
