<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            'country_id' =>1,
            'country_name' =>  "السعودية",
        ]);
        DB::table('countries')->insert([
            'country_id' =>2,
            'country_name' =>  "مصر",
        ]);
        DB::table('countries')->insert([
            'country_id' =>3,
            'country_name' =>  "سوريا",
        ]);
        DB::table('countries')->insert([
            'country_id' =>4,
            'country_name' =>  "العراق",
        ]);
        DB::table('countries')->insert([
            'country_id' =>5,
            'country_name' =>  "الجزائر",
        ]);
        DB::table('countries')->insert([
            'country_id' =>6,
            'country_name' =>  "الإمارات",
        ]);
        DB::table('countries')->insert([
            'country_id' =>7,
            'country_name' =>  "تونس",
        ]);
        DB::table('countries')->insert([
            'country_id' =>8,
            'country_name' =>  "المغرب",
        ]);
    }
}
