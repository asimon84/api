<?php

use Illuminate\Database\Seeder;

class CardAssociationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('card_associations')->insert([
            'name' => 'Visa',
        ]);

        DB::table('card_associations')->insert([
            'name' => 'Mastercard',
        ]);

        DB::table('card_associations')->insert([
            'name' => 'Amex',
        ]);

        DB::table('card_associations')->insert([
            'name' => 'Discover',
        ]);

        DB::table('card_associations')->insert([
            'name' => 'Other',
        ]);
    }
}
