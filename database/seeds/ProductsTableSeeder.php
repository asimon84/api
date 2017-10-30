<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'client_id' => 1,
            'name' => 'Raspberry Ketone',
            'website_url' => 'www.test.com',
            'is_web_sale' => 1,
            'is_recurring' => 1,
            'is_shippable' => 1,
            'cover_letter' => 'cover_letter.docx',
            'order_page' => 'order_page.png',
            'terms' => 'terms.docx',
        ]);

        DB::table('products')->insert([
            'client_id' => 1,
            'name' => 'Garcinia Cambogia',
            'website_url' => 'www.test2.com',
            'is_web_sale' => 1,
            'is_recurring' => 1,
            'is_shippable' => 1,
            'cover_letter' => 'cover_letter.docx',
            'order_page' => 'order_page.png',
            'terms' => 'terms.docx',
        ]);
    }
}
