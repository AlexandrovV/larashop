<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = "Laptops";
        $category->description = "Laptops category";
        $category->save();

        $category = new Category();
        $category->name = "Headphones";
        $category->description = "Headphones category";
        $category->save();

        $category = new Category();
        $category->name = "Smartphones";
        $category->description = "Smartphones category";
        $category->save();
    }
}
