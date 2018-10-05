<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //memanggil objek dari model Category untuk menginsert data ke database
        Category::create([
            'name' => 'Laravel',
            'slug' => str_slug('laravel')
        ]);

        Category::create([
            'name' => 'Sample',
            'slug' => str_slug('sample')
        ]);
    }
}
