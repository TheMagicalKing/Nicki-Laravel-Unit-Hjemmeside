<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\support\integer;

class soldiers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soldier')->insert([
            'name'=>"N. Gelin",
            'rank'=>"4",
            'role'=>'HAT',
            'unit'=>'3'
        ]);
        DB::table('soldier')->insert([
            'name'=>"A. Hawkings",
            'rank'=>" 3",
            'role'=>'A-FTL',
            'unit'=>'3'
        ]);
        DB::table('soldier')->insert([
            'name'=>"B. Thornwood",
            'rank'=>"1",
            'role'=>'Allfather',
            'unit'=>'6'
        ]);
        DB::table('soldier')->insert([
            'name'=>"A. Cadias",
            'rank'=>"2",
            'role'=>'FTL',
            'unit'=>'7'
        ]);
    }
}
