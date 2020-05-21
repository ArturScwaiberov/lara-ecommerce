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
        factory(App\User::class, 10)->create();
        factory(App\Category::class, 10)->create();
        factory(App\Restaurant::class, 10)->create();
        /* factory(App\Menu::class, 10)->create();
        factory(App\Dish::class, 10)->create(); */
        /* $this->call([
    UserSeeder::class,
    CategorySeeder::class,
    RestaurantSeeder::class,
    MenuSeeder::class,
    DishSeeder::class,
    ]); */
    }
}
