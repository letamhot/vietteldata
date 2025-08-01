<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'chiTietLoaiGoiCuoc' => 'GÓI CƯỚC 5G MỚI NHẤT',
                'moTa' => 'GÓI CƯỚC 5G MỚI NHẤT',
                'category_id' => 1,
                'created_at' => '2025-07-24 03:16:21',
                'updated_at' => '2025-07-24 03:16:21',
            ),
            1 => 
            array (
                'id' => 2,
                'chiTietLoaiGoiCuoc' => 'Danh sách gói data',
                'moTa' => 'Danh sách gói data',
                'category_id' => 1,
                'created_at' => '2025-07-24 03:49:47',
                'updated_at' => '2025-07-24 03:49:47',
            ),
            2 => 
            array (
                'id' => 3,
                'chiTietLoaiGoiCuoc' => 'COMBO MIỄN PHI THOẠI VÀ DATA',
                'moTa' => 'COMBO MIỄN PHI THOẠI VÀ DATA',
                'category_id' => 2,
                'created_at' => '2025-07-24 03:49:48',
                'updated_at' => '2025-07-24 03:50:08',
            ),
            3 => 
            array (
                'id' => 4,
                'chiTietLoaiGoiCuoc' => 'GÓI DATA NGÀY VÀ TUẦN',
                'moTa' => 'GÓI DATA NGÀY VÀ TUẦN',
                'category_id' => 3,
                'created_at' => '2025-07-24 03:50:27',
                'updated_at' => '2025-07-24 03:50:27',
            ),
            4 => 
            array (
                'id' => 5,
                'chiTietLoaiGoiCuoc' => 'MIỄN PHÍ GỌI THOẠI',
                'moTa' => 'MIỄN PHÍ GỌI THOẠI',
                'category_id' => 4,
                'created_at' => '2025-07-24 03:50:43',
                'updated_at' => '2025-07-24 03:50:43',
            ),
        ));
        
        
    }
}