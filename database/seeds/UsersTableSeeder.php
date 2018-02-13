<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('users')->truncate();

        factory(User::class)->create([
        	'name' => 'Test User',
        	'email' => 'test@example.com',
        	'password' => bcrypt('test123'),
        ]);
    }
}
