<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('levels')->insert([
            'name' => 'admin'
        ]);
        DB::table('levels')->insert([
            'name' => 'pelanggan'
        ]);
        DB::table('levels')->insert([
            'name' => 'bank'
        ]);
    }
}
