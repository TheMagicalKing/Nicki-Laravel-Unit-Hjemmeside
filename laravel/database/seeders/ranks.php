<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ranks extends Seeder
{
    /**
     * Run the database seeds.
     *
     * $table->id();
     *       $table->rankname();
     *       $table->rankabbrev();
     * @return void
     * 
     * 
     */

     /**
      * 
      * Would be populated with all the rank up to Major in the US ARMY Rank system
      * But for the sake of 10 hours school work, the rank seed is less!
      *
      * The seeders are helps populate the database with information that can be
      * shown on the website on demand
      *
      */

    public function run()
    {
        DB::table('ranks')->insert([
            'rankname'=>'Major',
            'rankabbrev'=>'MAJ',
        ]);
        DB::table('ranks')->insert([
            'rankname'=>'Captain',
            'rankabbrev'=>'CPT',                       
        ]);
        DB::table('ranks')->insert([
            'rankname'=>'Sergeant First Class',
            'rankabbrev'=>'SFC',    
        ]); 
        DB::table('ranks')->insert([
            'rankname'=>'Sergeant',
            'rankabbrev'=>'SGT',    
        ]); 
    }
}
