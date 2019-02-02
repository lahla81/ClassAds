<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat="عقارات";
        DB::table('categories')->insert([
            'id' =>1,
            'category_name' => $cat,
            'slug' => str_slug($cat),
        ]);

        $cat="وظائف";
        DB::table('categories')->insert([
            'id' =>2,
            'category_name' => $cat,
            'slug' => str_slug($cat),
        ]);

        $cat="إلكترونيات";
        DB::table('categories')->insert([
            'id' =>3,
            'category_name' => $cat,
            'slug' => str_slug($cat),
        ]);

        $cat="سيارات";
        DB::table('categories')->insert([
            'id' =>4,
            'category_name' => $cat,
            'slug' => str_slug($cat),
        ]);

        $cat="أثاث";
        DB::table('categories')->insert([
            'id' =>5,
            'category_name' => $cat,
            'slug' => str_slug($cat),
        ]);

        $cat="مال وأعمال";
        DB::table('categories')->insert([
            'id' =>6,
            'category_name' => $cat,
            'slug' => str_slug($cat),
        ]);

        $cat="مواد ومعدات";
        DB::table('categories')->insert([
            'id' =>7,
            'category_name' => $cat,
            'slug' => str_slug($cat),
        ]);
    }
}
