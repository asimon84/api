<?php

use Illuminate\Database\Seeder;

class MIDsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mids')->insert([
            'client_id' => 1,
            'mid' => 'TestMID123',
            'alias' => 'Test MID #123',
            'descriptor' => '***TEST MID 123***',
            'customer_service_phone' => '1231231234',
            'customer_service_email' => 'alpha@beta.com',
        ]);

        DB::table('mids')->insert([
            'client_id' => 1,
            'mid' => 'TestMID456',
            'alias' => 'Test MID #456',
            'descriptor' => '***TEST MID 456***',
            'customer_service_phone' => '1231231234',
            'customer_service_email' => 'alpha@beta.com',
        ]);

        DB::table('mids')->insert([
            'client_id' => 1,
            'mid' => 'TestMID777',
            'alias' => 'Test MID #777',
            'descriptor' => '***TEST MID 777***',
            'customer_service_phone' => '1231231234',
            'customer_service_email' => 'alpha@beta.com',
        ]);
    }
}
