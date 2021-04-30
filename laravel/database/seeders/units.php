<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class units extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->insert([
            'unitname'=>"Viking 1-1",
            'lead'=>"A. Piper",
            'alead'=>'E. Clipser'
        ]);
        DB::table('units')->insert([
            'unitname'=>'Viking 1-2',
            'lead'=>'S. Schroots',
            'alead'=>'R. Durose'
        ]);
        DB::table('units')->insert([
            'unitname'=>'Viking 1-3',
            'lead'=>'E. Rolyn',
            'alead'=>'A. Hawkings'
        ]);
        DB::table('units')->insert([
            'unitname'=>'LOKI',
            'lead'=>'M. Paldanius',
            'alead'=>'P. Siitonen'
        ]);
        DB::table('units')->insert([
            'unitname'=>'SOAR',
            'lead'=>'S. Sarius',
            'alead'=>''
        ]);
        DB::table('units')->insert([
            'unitname'=>"Command",
            'lead'=>"B. Thornwood",
            'alead'=>''
        ]);
        DB::table('units')->insert([
            'unitname'=>"Viking Actual",
            'lead'=>"A Cadias",
            'alead'=>'A Wolfe'
        ]);
    }
}
