<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c1 = [
            'name' => "Laravel"
        ];

        $c2 = [
            'name' => "Wordpress"
        ];

        $c3 = [
            'name' => "Database"
        ];

        $c4 = [
            'name' => "Java"
        ];

        $c5 = [
            'name' => "Python"
        ];

        Category::create($c1);
        Category::create($c2);
        Category::create($c3);
        Category::create($c4);
        Category::create($c5);
    }
}
