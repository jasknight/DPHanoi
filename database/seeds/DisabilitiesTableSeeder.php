<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DisabilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disabilities')->insert([
            ['description' => 'Vận động'],
            ['description' => 'Trí tuệ'],
            ['description' => 'Thần kinh tâm thần'],
            ['description' => 'Nghe nói'],
            ['description' => 'Thị giác'],
            ['description' => 'Khác'],
        ]);
    }
}
