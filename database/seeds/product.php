<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->delete();
        DB::table('product')->insert([
            ['id'=>1,'name'=>'Nha vin home','price'=>2000,'address'=>'Vinh Bao HAi Phong','description'=>'nhà vin đẹp','information'=>'60m2, hướng Tây'],
            ['id'=>2,'name'=>'Messi','price'=>5000,'address'=>'Argentina','description'=>'nhà vin đẹp','information'=>'60m2, hướng Tây'],
            ['id'=>3,'name'=>'Ronaldo','price'=>6000,'address'=>'Portugal','description'=>'nhà vin đẹp','information'=>'60m2, hướng Tây'],
            ['id'=>4,'name'=>'Neymar','price'=>3000,'address'=>'Brazil','description'=>'nhà vin đẹp','information'=>'60m2, hướng Tây'],
            
        ]);
    }
}
