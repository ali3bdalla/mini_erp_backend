<?php

use App\Product;
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

        factory(App\User::class, 1)->create();

        factory(App\Product::class, 50)->create();

        factory(App\Tag::class, 20)->create();


        // $this->call(UserSeeder::class);
    }
}
