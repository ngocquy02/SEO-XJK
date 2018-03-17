<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('users')->insert(
        	[
                'name' =>   'Nguyễn Ngọc Quý',
                'email'    =>   'admin@gmail.com',
                'password' =>   bcrypt('123456789'),
                'phone'    =>   '0972484063',
                'active'    =>   1,
        ]);
    }
}
