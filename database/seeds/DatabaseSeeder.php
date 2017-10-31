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

        //Seed the Support Tables
        $this->call(CardAssociationsTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);

        //Seed Clients Tables
        $this->call(ClientsTableSeeder::class);

        //Seed Products Tables
        $this->call(ProductsTableSeeder::class);

        //Seed MIDs Tables
        $this->call(MIDsTableSeeder::class);

        //Seed Orders Tables
        $this->call(OrdersTableSeeder::class);
    }
}
