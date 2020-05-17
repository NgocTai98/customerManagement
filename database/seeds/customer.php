<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class customer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->delete();
        DB::table('customer')->insert([
            ['id'=>1,'name'=>'Ngoc Tai','phone'=>'0123456','address'=>'Vinh Bao HAi Phong','rate'=>0,'need'=>'Mua nha duoi 2 ty'],
            ['id'=>2,'name'=>'Messi','phone'=>'1325151','address'=>'Argentina','rate'=>1,'need'=>'Mua nha duoi 10 ty'],
            ['id'=>3,'name'=>'Ronaldo','phone'=>'2362626','address'=>'Portugal','rate'=>2,'need'=>'Mua dat tren 3 ty'],
            ['id'=>4,'name'=>'Neymar','phone'=>'3262626','address'=>'Brazil','rate'=>0,'need'=>'Mua biet thu duoi 10 ty'],
            
        ]);
    }
}
