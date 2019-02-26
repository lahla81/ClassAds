<?php

use Illuminate\Database\Seeder;

class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
            'id' =>1,
            'currency_name' =>  "دولار",
            'symbol'        => "$"
        ]);

        DB::table('currencies')->insert([
            'id' =>2,
            'currency_name' =>  "جنيه",
            'symbol'        => "LE"
        ]);

        DB::table('currencies')->insert([
            'id' =>3,
            'currency_name' =>  "ريال سعودي",
            'symbol'        => "Ry"
        ]);

        DB::table('currencies')->insert([
            'id' =>4,
            'currency_name' =>  "دينار كويتي",
            'symbol'        => "Kwait"
        ]);

        DB::table('currencies')->insert([
            'id' =>5,
            'currency_name' =>  "دينار إماراتي",
            'symbol'        => "UAE"
        ]);

        DB::table('currencies')->insert([
            'id' =>6,
            'currency_name' =>  "جنيه إسترليني",
            'symbol'        => "ab"
        ]);

        DB::table('currencies')->insert([
            'id' =>7,
            'currency_name' =>  "يورو",
            'symbol'        => "Auro"
        ]);

    }
}
