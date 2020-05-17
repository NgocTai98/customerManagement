<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        $this->call(customer::class);
        $this->call(host::class);
        $this->call(product::class);
        $this->call(pro_img::class);
    }
}
