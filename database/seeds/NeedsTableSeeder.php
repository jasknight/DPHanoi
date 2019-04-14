<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NeedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('needs')->insert([
            ['detail' => 'Chăm sóc y tế, PHCN', 'need_user_detail' => 0],
            ['detail' => 'Học văn hóa', 'need_user_detail' => 0],
            ['detail' => 'Học nghề', 'need_user_detail' => 1],
            ['detail' => 'Hỗ trợ sinh kế', 'need_user_detail' => 0],
            ['detail' => 'Phổ biến thông tin', 'need_user_detail' => 0],
            ['detail' => 'Hỗ trợ chính sách', 'need_user_detail' => 0],
        ]);
    }
}
