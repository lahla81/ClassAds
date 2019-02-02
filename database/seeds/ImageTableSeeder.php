<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'ad_id' =>1,
            'image' => "pexels-photo-1148955.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id' =>2,
            'image' => "pexels-photo-1148975.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id' =>3,
            'image' => "pexels-photo-1148965.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id' =>4,
            'image' => "pexels-photo-1198955.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id' =>5,
            'image' => "pexels-photo-1188955.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id' =>6,
            'image' => "pexels-photo-1178955.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id' =>7,
            'image' => "pexels-photo-1168955.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id' =>8,
            'image' => "pexels-photo-1158955.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id' =>9,
            'image' => "pexels-photo-1948955.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id' =>10,
            'image' => "pexels-photo-1848955.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id' =>11,
            'image' => "pexels-photo-1148955.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id' =>12,
            'image' => "pexels-photo-1748955.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id' =>13,
            'image' => "pexels-photo-1648955.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id' =>14,
            'image' => "pexels-photo-1548955.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id' =>15,
            'image' => "pexels-photo-1448955.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id' =>16,
            'image' => "pexels-photo-1348955.jpeg",
        ]);

        DB::table('images')->insert([
            'ad_id' =>17,
            'image' => "pexels-photo-1248955.jpeg",
        ]);
    }
}
