<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ArtistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([
            [

                'name'=>'MarkxA',
                'link'=>'www.MarkxA.blogspot',
                'email'=>Str::random(10).'@gmail.com',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],
            [

                'name'=>'Dani2034',
                'link'=>'www.'.Str::random(9).'.com',
                'email'=>Str::random(10).'@gmail.com',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],
            [

                'name'=>'Cho',
                'link'=>'www.'.Str::random(9).'.com',
                'email'=>Str::random(10).'@gmail.com',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],
            [

                'name'=>'Xal',
                'link'=>'www.'.Str::random(9).'.com',
                'email'=>Str::random(10).'@gmail.com',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],
            [

                'name'=>'Snap',
                'link'=>'www.'.Str::random(9).'.com',
                'email'=>Str::random(10).'@gmail.com',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ]
        ]);


    }
}
