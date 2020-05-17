<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pro_img extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pro_img')->delete();
        DB::table('pro_img')->insert([
            ['id'=>1,'img'=>'7tO1oIIH7.jpg','product_id'=>1],
            ['id'=>2,'img'=>'74jqVAeFd.png','product_id'=>2],
            ['id'=>3,'img'=>'KGjy9VN9j.jpg','product_id'=>3],
            ['id'=>4,'img'=>'mKp0Jh0KF.png','product_id'=>1],
            ['id'=>5,'img'=>'mKp0Jh0KF.png','product_id'=>4],
            
        ]);
    }
}
