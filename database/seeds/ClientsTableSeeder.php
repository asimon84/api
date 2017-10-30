<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'user_id' => 1,
            'name' => 'API Client 1',
            'business_website' => 'www.test1.com',
            'business_phone' => '1231231234',
            'business_email' => 'test@abc.com',
            'contact_title' => 'Mr',
            'contact_name' => 'James Brown',
            'contact_phone' => '1231231234',
            'contact_email' => 'test@xyz.com',
        ]);

        DB::table('clients')->insert([
            'user_id' => 1,
            'name' => 'API Client 2',
            'business_website' => 'www.test2.com',
            'business_phone' => '1231231234',
            'business_email' => 'abc@123.com',
            'contact_title' => 'Mrs',
            'contact_name' => 'Paula Jones',
            'contact_phone' => '1231231234',
            'contact_email' => 'xyz@123.com',
        ]);
    }
}
