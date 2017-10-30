<?php

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
        DB::table('users')->insert([
            'api_token' => 'rWZG99BrFqEalj9Ls1Zkt4Pki4L5kHMX7ov7ZUofKVZxcWp18WKWlUUEZrMeTWVM',
            'first_name' => 'Testy',
            'last_name' => 'McTestPerson',
            'email' => 'testy@testmail.com',
        ]);
    }
}
