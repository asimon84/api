<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seed the API Users Table
        $this->call(UsersTableSeeder::class);

        //Seed Clients Tables
        $this->call(ClientsRawTableSeeder::class);
        $this->call(ClientsTableSeeder::class);

        //Seed Products Tables
        $this->call(ProductsRawTableSeeder::class);
        $this->call(ProductsTableSeeder::class);

        //Seed MIDs Tables
        $this->call(MIDsRawTableSeeder::class);
        $this->call(MIDsTableSeeder::class);

        //Seed Orders Tables
        $this->call(OrdersRawTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
    }
}
