<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 100; $i++) {
            $transaction_date = new \DateTime(date('Y-m-d'));
            $days = 'P' . rand(1,31) . 'D';
            $transaction_date->sub(new \DateInterval($days));

            DB::table('orders')->insert([
                'client_id' => 1,
                'mid_id' => rand(1,3),
                'order_id' => rand(100000,999999),
                'card_association_id' => rand(1,5),
                'card_number' => '123456xxxxxx1234',
                'bin' => '123456',
                'last_four' => '1234',
                'arn' => 'testarn'.rand(100000,999999),
                'amount' => rand(1,9).'9.99',
                'currency_id' => 149,
                'tracking_number' => rand(100000,999999),
                'product_id' => rand(1,7),
                'transaction_date' => $transaction_date->format('Y-m-d'),
            ]);
        }
    }
}
