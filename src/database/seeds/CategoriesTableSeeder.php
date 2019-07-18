<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = new Category();
        $cat->name = 'Mode';
        $cat->save();

        $cat1 = new Category();
        $cat1->name = 'Lifestyle';
        $cat1->save();
    }
}
