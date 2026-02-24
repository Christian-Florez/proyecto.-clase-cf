<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\category;
use App\Models\product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        /*$this->call([
            categorySeeder::class,
        ]);
        */
        category::factory(count:100)->create();
        product::factory(count:200)->create();
    }


}




