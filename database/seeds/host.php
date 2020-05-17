<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class host extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('host')->delete();
        DB::table('host')->insert([
            ['id'=>1,'name'=>'Ngoc Tuan','phone'=>'0123456','address'=>'Vinh Bao HAi Phong','note'=>'Ban nhanh nha mat pho'],
            ['id'=>2,'name'=>'Kaka','phone'=>'1325151','address'=>'brazil','note'=>'Ban nha o Hong Bang'],
            ['id'=>3,'name'=>'ronaldinho','phone'=>'2362626','address'=>'brazil','note'=>'Ban nha o An Duong'],
            ['id'=>4,'name'=>'Hong Son','phone'=>'3262626','address'=>'Ha Noi','note'=>'Ban Nha Vinhome'],
            
        ]);
    }
}
