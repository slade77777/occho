<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            ['id' => 1,'customer_name' => ' ', 'customer_picture' => 'kocom.jpg','product_id' => 0],
            ['id' => 2,'customer_name' => 'Công ty KoCom', 'customer_picture' => 'kocom.jpg','product_id' => 1],
            ['id' => 3,'customer_name' => 'Hanu', 'customer_picture' => 'hanu.jpg','product_id' => 2],
            ['id' => 4,'customer_name' => 'Viện CN-GD', 'customer_picture' => 'giaoduc.png','product_id' => 3],
            ['id' => 5,'customer_name' => 'Becker Travel', 'customer_picture' => 'beckertravel.png','product_id' => 4],
            ['id' => 6,'customer_name' => 'GTEL Beeline', 'customer_picture' => 'gtel.jpg','product_id' => 5],
            ['id' => 7,'customer_name' => 'Sở GDDT Cao Bằng', 'customer_picture' => 'caobang.jpg','product_id' => 6],
            ['id' => 8,'customer_name' => 'Flying SuperKids', 'customer_picture' => 'Superkids.png','product_id' => 7],
            ['id' => 9,'customer_name' => 'TW Đảng', 'customer_picture' => 'twdang.jpg','product_id' => 8],
            ['id' => 10,'customer_name' => 'Hùng Vương Group', 'customer_picture' => 'hvgroup.jpg','product_id' => 9],
            ['id' => 11,'customer_name' => 'FIT-HANU', 'customer_picture' => 'fit.jpg','product_id' => 10],
            ['id' => 12,'customer_name' => 'UCLand', 'customer_picture' => 'uc.jpg','product_id' => 11],
            ['id' => 13,'customer_name' => 'Panasonic', 'customer_picture' => 'pana.png','product_id' => 12],
        ]);
    }
}
