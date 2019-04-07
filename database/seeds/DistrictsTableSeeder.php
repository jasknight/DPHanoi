<?php

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$sql = base_path('hanoi.sql');
		DB::unprepared(file_get_contents($sql));
    }
}
