<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tenLoaiGoiCuoc' => 'Gói Data',
                'moTa' => 'Các gói cước chỉ dành riêng cho Data',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'tenLoaiGoiCuoc' => 'Gói Combo',
                'moTa' => 'Các gói thoại và data',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'tenLoaiGoiCuoc' => 'Gói dữ liệu ngày và tuần',
                'moTa' => 'Dữ liệu ngày và tuần',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'tenLoaiGoiCuoc' => 'Gói gọi thoại',
                'moTa' => 'Gói này chỉ dành riêng cho các cuộc gọi thoại',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'tenLoaiGoiCuoc' => 'Gói cước gia đình',
                'moTa' => 'Gói cước gia đình',
                'created_at' => '2025-07-24 01:48:01',
                'updated_at' => '2025-07-24 01:48:01',
            ),
        ));
        
        
    }
}