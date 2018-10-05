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
        //membuat pemanggilan class sesuai seed yang akan dipanggil
        $this->call(CategorySeeder::class);
    }
}
