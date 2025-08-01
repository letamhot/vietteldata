<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tenGoiCuoc' => 'SD70',
                'giaTien' => '70000 / 30 ngày',
                'dungLuong' => '1GB/ngày',
                'cuPhap' => 'SD70 PRO Gửi 290',
                'moTa' => '70000 / 30 ngày 1GB/ngày 
Soạn :SD70 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói SD70 Soạn tin theo cú pháp: SD70 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước SD70, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước SD70 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 2,
                'created_at' => '2025-07-31 09:06:18',
                'updated_at' => '2025-07-31 09:06:18',
            ),
            1 => 
            array (
                'id' => 2,
                'tenGoiCuoc' => '3SD70',
                'giaTien' => '140000 / 90 ngày',
                'dungLuong' => '1GB/ngày',
                'cuPhap' => '3SD70 PRO Gửi 290',
                'moTa' => '140000 / 90 ngày 1GB/ngày 
Soạn :3SD70 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3SD70 Soạn tin theo cú pháp: 3SD70 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3SD70, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3SD70 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 2,
                'created_at' => '2025-07-31 09:06:18',
                'updated_at' => '2025-07-31 09:06:18',
            ),
            2 => 
            array (
                'id' => 3,
                'tenGoiCuoc' => '6SD70',
                'giaTien' => '420000 / 180 ngày',
                'dungLuong' => '1GB/ngày',
                'cuPhap' => '6SD70 PRO Gửi 290',
                'moTa' => '420000 / 180 ngày 1GB/ngày 
Soạn :6SD70 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6SD70 Soạn tin theo cú pháp: 6SD70 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6SD70, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6SD70 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 2,
                'created_at' => '2025-07-31 09:06:18',
                'updated_at' => '2025-07-31 09:06:18',
            ),
            3 => 
            array (
                'id' => 4,
                'tenGoiCuoc' => '12SD70',
                'giaTien' => '840000 / 360 ngày',
                'dungLuong' => '1GB/ngày',
                'cuPhap' => '12SD70 PRO Gửi 290',
                'moTa' => '840000 / 360 ngày 1GB/ngày 
Soạn :12SD70 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12SD70 Soạn tin theo cú pháp: 12SD70 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12SD70, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12SD70 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 2,
                'created_at' => '2025-07-31 09:06:18',
                'updated_at' => '2025-07-31 09:06:18',
            ),
            4 => 
            array (
                'id' => 5,
                'tenGoiCuoc' => 'SD90',
                'giaTien' => '90000 / 30 ngày',
                'dungLuong' => '1.5GB/ngày',
                'cuPhap' => 'SD90 PRO Gửi 290',
                'moTa' => '90000 / 30 ngày 1.5GB/ngày 
Soạn :SD90 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói SD90 Soạn tin theo cú pháp: SD90 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước SD90, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước SD90 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 2,
                'created_at' => '2025-07-31 09:06:18',
                'updated_at' => '2025-07-31 09:06:18',
            ),
            5 => 
            array (
                'id' => 6,
                'tenGoiCuoc' => '3SD90',
                'giaTien' => '270000 / 90 ngày',
                'dungLuong' => '1.5GB/ngày',
                'cuPhap' => '3SD90 PRO Gửi 290',
                'moTa' => '270000 / 90 ngày 1.5GB/ngày 
Soạn :3SD90 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3SD90 Soạn tin theo cú pháp: 3SD90 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3SD90, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3SD90 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 2,
                'created_at' => '2025-07-31 09:06:18',
                'updated_at' => '2025-07-31 09:06:18',
            ),
            6 => 
            array (
                'id' => 7,
                'tenGoiCuoc' => '6SD90',
                'giaTien' => '540000 / 180 ngày',
                'dungLuong' => '1.5GB/ngày',
                'cuPhap' => '6SD90 PRO Gửi 290',
                'moTa' => '540000 / 180 ngày 1.5GB/ngày 
Soạn :6SD90 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6SD90 Soạn tin theo cú pháp: 6SD90 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6SD90, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6SD90 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 2,
                'created_at' => '2025-07-31 09:06:18',
                'updated_at' => '2025-07-31 09:06:18',
            ),
            7 => 
            array (
                'id' => 8,
                'tenGoiCuoc' => '12SD90',
                'giaTien' => '1080000 / 360 ngày',
                'dungLuong' => '1.5GB/ngày',
                'cuPhap' => '12SD90 PRO Gửi 290',
                'moTa' => '1080000 / 360 ngày 1.5GB/ngày 
Soạn :12SD90 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12SD90 Soạn tin theo cú pháp: 12SD90 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12SD90, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12SD90 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 2,
                'created_at' => '2025-07-31 09:06:18',
                'updated_at' => '2025-07-31 09:06:18',
            ),
            8 => 
            array (
                'id' => 14,
                'tenGoiCuoc' => 'V120B',
                'giaTien' => '120000 / 30 ngày',
                'dungLuong' => ' 1.5GB/ngày + miễn phí 10p/cuộc thoại nội mạng + 50p thoại ngoại mạng/30 ngày +Miễn phí gói Basic TV360',
                'cuPhap' => 'V120B PRO Gửi 290',
                'moTa' => '120000 / 30 ngày 1.5GB/ngày + miễn phí 10p/cuộc thoại nội mạng + 50p thoại ngoại mạng/30 ngày +Miễn phí gói Basic TV360 
Soạn :V120B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói V120B Soạn tin theo cú pháp: V120B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước V120B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước V120B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:29:15',
                'updated_at' => '2025-08-01 00:29:15',
            ),
            9 => 
            array (
                'id' => 15,
                'tenGoiCuoc' => '3V120B',
                'giaTien' => '360 / 90 ngày',
                'dungLuong' => ' 1.5GB/ngày + miễn phí 10p/cuộc thoại nội mạng + 50p thoại ngoại mạng/30 ngày +Miễn phí gói Basic TV361',
                'cuPhap' => '3V120B PRO Gửi 290',
                'moTa' => '360 / 90 ngày 1.5GB/ngày + miễn phí 10p/cuộc thoại nội mạng + 50p thoại ngoại mạng/30 ngày +Miễn phí gói Basic TV361 
Soạn :3V120B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3V120B Soạn tin theo cú pháp: 3V120B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3V120B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3V120B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:29:15',
                'updated_at' => '2025-08-01 00:29:15',
            ),
            10 => 
            array (
                'id' => 16,
                'tenGoiCuoc' => '6V120B',
                'giaTien' => '720000 / 180 ngày',
                'dungLuong' => ' 1.5GB/ngày + miễn phí 10p/cuộc thoại nội mạng + 50p thoại ngoại mạng/30 ngày + Miễn phí gói Basic TV360',
                'cuPhap' => '6V120B PRO Gửi 290',
                'moTa' => '720000 / 180 ngày 1.5GB/ngày + miễn phí 10p/cuộc thoại nội mạng + 50p thoại ngoại mạng/30 ngày + Miễn phí gói Basic TV360 
Soạn :6V120B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6V120B Soạn tin theo cú pháp: 6V120B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6V120B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6V120B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:29:15',
                'updated_at' => '2025-08-01 00:29:15',
            ),
            11 => 
            array (
                'id' => 17,
                'tenGoiCuoc' => '12V120B',
                'giaTien' => '1440000 / 360 ngày',
                'dungLuong' => ' 1.5GB/ngày + miễn phí 10p/cuộc thoại nội mạng + 50p thoại ngoại mạng/30 ngày + Miễn phí gói Basic TV360',
                'cuPhap' => '12V120B PRO Gửi 290',
                'moTa' => '1440000 / 360 ngày 1.5GB/ngày + miễn phí 10p/cuộc thoại nội mạng + 50p thoại ngoại mạng/30 ngày + Miễn phí gói Basic TV360 
Soạn :12V120B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12V120B Soạn tin theo cú pháp: 12V120B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12V120B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12V120B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:29:15',
                'updated_at' => '2025-08-01 00:29:15',
            ),
            12 => 
            array (
                'id' => 18,
                'tenGoiCuoc' => 'V150B',
                'giaTien' => '150000 / 30 ngày',
                'dungLuong' => '2GB/ngày + miễn phí 10p/cuộc thoại nội mạng + 80p thoại ngoại mạng/30 ngày + Miễn phí gói Basic TV360',
                'cuPhap' => 'V150B PRO Gửi 290',
                'moTa' => '150000 / 30 ngày 2GB/ngày + miễn phí 10p/cuộc thoại nội mạng + 80p thoại ngoại mạng/30 ngày + Miễn phí gói Basic TV360 
Soạn :V150B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói V150B Soạn tin theo cú pháp: V150B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước V150B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước V150B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:29:15',
                'updated_at' => '2025-08-01 00:29:15',
            ),
            13 => 
            array (
                'id' => 19,
                'tenGoiCuoc' => '3V150B',
                'giaTien' => '450 / 90 ngày',
                'dungLuong' => '2GB/ngày + miễn phí 10p/cuộc thoại nội mạng + 80p thoại ngoại mạng/30 ngày + Miễn phí gói Basic TV361',
                'cuPhap' => '3V150B PRO Gửi 290',
                'moTa' => '450 / 90 ngày 2GB/ngày + miễn phí 10p/cuộc thoại nội mạng + 80p thoại ngoại mạng/30 ngày + Miễn phí gói Basic TV361 
Soạn :3V150B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3V150B Soạn tin theo cú pháp: 3V150B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3V150B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3V150B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:29:15',
                'updated_at' => '2025-08-01 00:29:15',
            ),
            14 => 
            array (
                'id' => 20,
                'tenGoiCuoc' => '6V150B',
                'giaTien' => '900000 / 180 ngày',
                'dungLuong' => '2GB/ngày + miễn phí 10p/cuộc thoại nội mạng + 80p thoại ngoại mạng/30 ngày + Miễn phí gói Basic TV360',
                'cuPhap' => '6V150B PRO Gửi 290',
                'moTa' => '900000 / 180 ngày 2GB/ngày + miễn phí 10p/cuộc thoại nội mạng + 80p thoại ngoại mạng/30 ngày + Miễn phí gói Basic TV360 
Soạn :6V150B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6V150B Soạn tin theo cú pháp: 6V150B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6V150B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6V150B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:29:16',
                'updated_at' => '2025-08-01 00:29:16',
            ),
            15 => 
            array (
                'id' => 21,
                'tenGoiCuoc' => '12V150B',
                'giaTien' => '1800000 / 360 ngày',
                'dungLuong' => '2GB/ngày + miễn phí 10p/cuộc thoại nội mạng + 80p thoại ngoại mạng/30 ngày + Miễn phí gói Basic TV360',
                'cuPhap' => '12V150B PRO Gửi 290',
                'moTa' => '1800000 / 360 ngày 2GB/ngày + miễn phí 10p/cuộc thoại nội mạng + 80p thoại ngoại mạng/30 ngày + Miễn phí gói Basic TV360 
Soạn :12V150B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12V150B Soạn tin theo cú pháp: 12V150B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12V150B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12V150B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:29:16',
                'updated_at' => '2025-08-01 00:29:16',
            ),
            16 => 
            array (
                'id' => 22,
                'tenGoiCuoc' => 'V160B',
                'giaTien' => '160000 / 30 ngày',
                'dungLuong' => '4GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng',
                'cuPhap' => 'V160B PRO Gửi 290',
                'moTa' => '160000 / 30 ngày 4GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng 
Soạn :V160B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói V160B Soạn tin theo cú pháp: V160B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước V160B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước V160B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:33:39',
                'updated_at' => '2025-08-01 00:33:39',
            ),
            17 => 
            array (
                'id' => 23,
                'tenGoiCuoc' => '3V160B',
                'giaTien' => '480000 / 90 ngày',
                'dungLuong' => '4GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng',
                'cuPhap' => '3V160B PRO Gửi 290',
                'moTa' => '480000 / 90 ngày 4GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng 
Soạn :3V160B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3V160B Soạn tin theo cú pháp: 3V160B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3V160B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3V160B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:33:39',
                'updated_at' => '2025-08-01 00:33:39',
            ),
            18 => 
            array (
                'id' => 24,
                'tenGoiCuoc' => '6V160B',
                'giaTien' => '960000 / 180 ngày',
                'dungLuong' => '4GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng',
                'cuPhap' => '6V160B PRO Gửi 290',
                'moTa' => '960000 / 180 ngày 4GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng 
Soạn :6V160B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6V160B Soạn tin theo cú pháp: 6V160B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6V160B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6V160B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:33:39',
                'updated_at' => '2025-08-01 00:33:39',
            ),
            19 => 
            array (
                'id' => 25,
                'tenGoiCuoc' => '12V160B',
                'giaTien' => '1920000 / 360 ngày',
                'dungLuong' => '4GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng',
                'cuPhap' => '12V160B PRO Gửi 290',
                'moTa' => '1920000 / 360 ngày 4GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng 
Soạn :12V160B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12V160B Soạn tin theo cú pháp: 12V160B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12V160B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12V160B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:33:40',
                'updated_at' => '2025-08-01 00:33:40',
            ),
            20 => 
            array (
                'id' => 26,
                'tenGoiCuoc' => 'V180B',
                'giaTien' => '180000 / 30 ngày',
                'dungLuong' => '6GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng',
                'cuPhap' => 'V180B PRO Gửi 290',
                'moTa' => '180000 / 30 ngày 6GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng 
Soạn :V180B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói V180B Soạn tin theo cú pháp: V180B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước V180B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước V180B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:33:40',
                'updated_at' => '2025-08-01 00:33:40',
            ),
            21 => 
            array (
                'id' => 27,
                'tenGoiCuoc' => '3V180B',
                'giaTien' => '540000 / 90 ngày',
                'dungLuong' => '6GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng',
                'cuPhap' => '3V180B PRO Gửi 290',
                'moTa' => '540000 / 90 ngày 6GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng 
Soạn :3V180B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3V180B Soạn tin theo cú pháp: 3V180B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3V180B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3V180B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:33:40',
                'updated_at' => '2025-08-01 00:33:40',
            ),
            22 => 
            array (
                'id' => 28,
                'tenGoiCuoc' => '6V180B',
                'giaTien' => '1080000 / 180 ngày',
                'dungLuong' => '6GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng',
                'cuPhap' => '6V180B PRO Gửi 290',
                'moTa' => '1080000 / 180 ngày 6GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng 
Soạn :6V180B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6V180B Soạn tin theo cú pháp: 6V180B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6V180B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6V180B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:33:40',
                'updated_at' => '2025-08-01 00:33:40',
            ),
            23 => 
            array (
                'id' => 29,
                'tenGoiCuoc' => '12V180B',
                'giaTien' => '2160000 / 360 ngày',
                'dungLuong' => '6GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng',
                'cuPhap' => '12V180B PRO Gửi 290',
                'moTa' => '2160000 / 360 ngày 6GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng 
Soạn :12V180B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12V180B Soạn tin theo cú pháp: 12V180B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12V180B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12V180B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:33:40',
                'updated_at' => '2025-08-01 00:33:40',
            ),
            24 => 
            array (
                'id' => 30,
                'tenGoiCuoc' => 'V160B',
                'giaTien' => '160000 / 30 ngày',
                'dungLuong' => '4GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng',
                'cuPhap' => 'V160B PRO Gửi 290',
                'moTa' => '160000 / 30 ngày 4GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng 
Soạn :V160B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói V160B Soạn tin theo cú pháp: V160B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước V160B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước V160B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:34:45',
                'updated_at' => '2025-08-01 00:34:45',
            ),
            25 => 
            array (
                'id' => 31,
                'tenGoiCuoc' => '3V160B',
                'giaTien' => '480000 / 90 ngày',
                'dungLuong' => '4GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng',
                'cuPhap' => '3V160B PRO Gửi 290',
                'moTa' => '480000 / 90 ngày 4GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng 
Soạn :3V160B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3V160B Soạn tin theo cú pháp: 3V160B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3V160B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3V160B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:34:45',
                'updated_at' => '2025-08-01 00:34:45',
            ),
            26 => 
            array (
                'id' => 32,
                'tenGoiCuoc' => '6V160B',
                'giaTien' => '960000 / 180 ngày',
                'dungLuong' => '4GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng',
                'cuPhap' => '6V160B PRO Gửi 290',
                'moTa' => '960000 / 180 ngày 4GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng 
Soạn :6V160B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6V160B Soạn tin theo cú pháp: 6V160B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6V160B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6V160B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:34:45',
                'updated_at' => '2025-08-01 00:34:45',
            ),
            27 => 
            array (
                'id' => 33,
                'tenGoiCuoc' => '12V160B',
                'giaTien' => '1920000 / 360 ngày',
                'dungLuong' => '4GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng',
                'cuPhap' => '12V160B PRO Gửi 290',
                'moTa' => '1920000 / 360 ngày 4GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng 
Soạn :12V160B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12V160B Soạn tin theo cú pháp: 12V160B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12V160B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12V160B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:34:45',
                'updated_at' => '2025-08-01 00:34:45',
            ),
            28 => 
            array (
                'id' => 34,
                'tenGoiCuoc' => 'V180B',
                'giaTien' => '180000 / 30 ngày',
                'dungLuong' => '6GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng',
                'cuPhap' => 'V180B PRO Gửi 290',
                'moTa' => '180000 / 30 ngày 6GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng 
Soạn :V180B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói V180B Soạn tin theo cú pháp: V180B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước V180B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước V180B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:34:45',
                'updated_at' => '2025-08-01 00:34:45',
            ),
            29 => 
            array (
                'id' => 35,
                'tenGoiCuoc' => '3V180B',
                'giaTien' => '540000 / 90 ngày',
                'dungLuong' => '6GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng',
                'cuPhap' => '3V180B PRO Gửi 290',
                'moTa' => '540000 / 90 ngày 6GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng 
Soạn :3V180B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3V180B Soạn tin theo cú pháp: 3V180B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3V180B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3V180B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:34:45',
                'updated_at' => '2025-08-01 00:34:45',
            ),
            30 => 
            array (
                'id' => 36,
                'tenGoiCuoc' => '6V180B',
                'giaTien' => '1080000 / 180 ngày',
                'dungLuong' => '6GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng',
                'cuPhap' => '6V180B PRO Gửi 290',
                'moTa' => '1080000 / 180 ngày 6GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng 
Soạn :6V180B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6V180B Soạn tin theo cú pháp: 6V180B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6V180B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6V180B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:34:45',
                'updated_at' => '2025-08-01 00:34:45',
            ),
            31 => 
            array (
                'id' => 37,
                'tenGoiCuoc' => '12V180B',
                'giaTien' => '2160000 / 360 ngày',
                'dungLuong' => '6GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng',
                'cuPhap' => '12V180B PRO Gửi 290',
                'moTa' => '2160000 / 360 ngày 6GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng 
Soạn :12V180B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12V180B Soạn tin theo cú pháp: 12V180B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12V180B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12V180B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:34:46',
                'updated_at' => '2025-08-01 00:34:46',
            ),
            32 => 
            array (
                'id' => 38,
                'tenGoiCuoc' => 'V200B',
                'giaTien' => '200000 / 30 ngày',
                'dungLuong' => '8GB/ngày + miễn phí 20p/cuộc thoại nội mạng + 100p thoại ngoại mạng + Miễn phí gói Basic TV360',
                'cuPhap' => 'V200B PRO Gửi 290',
                'moTa' => '200000 / 30 ngày 8GB/ngày + miễn phí 20p/cuộc thoại nội mạng + 100p thoại ngoại mạng + Miễn phí gói Basic TV360 
Soạn :V200B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói V200B Soạn tin theo cú pháp: V200B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước V200B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước V200B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:34:46',
                'updated_at' => '2025-08-01 00:34:46',
            ),
            33 => 
            array (
                'id' => 39,
                'tenGoiCuoc' => '3V200B',
                'giaTien' => '600000 / 90 ngày',
                'dungLuong' => '8GB/ngày + miễn phí 20p/cuộc thoại nội mạng + 100p thoại ngoại mạng + Miễn phí gói Basic TV361',
                'cuPhap' => '3V200B PRO Gửi 290',
                'moTa' => '600000 / 90 ngày 8GB/ngày + miễn phí 20p/cuộc thoại nội mạng + 100p thoại ngoại mạng + Miễn phí gói Basic TV361 
Soạn :3V200B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3V200B Soạn tin theo cú pháp: 3V200B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3V200B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3V200B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:34:46',
                'updated_at' => '2025-08-01 00:34:46',
            ),
            34 => 
            array (
                'id' => 40,
                'tenGoiCuoc' => '6V200B',
                'giaTien' => '1200000 / 180 ngày',
                'dungLuong' => '8GB/ngày + miễn phí 20p/cuộc thoại nội mạng + 100p thoại ngoại mạng + Miễn phí gói Basic TV360',
                'cuPhap' => '6V200B PRO Gửi 290',
                'moTa' => '1200000 / 180 ngày 8GB/ngày + miễn phí 20p/cuộc thoại nội mạng + 100p thoại ngoại mạng + Miễn phí gói Basic TV360 
Soạn :6V200B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6V200B Soạn tin theo cú pháp: 6V200B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6V200B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6V200B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:34:46',
                'updated_at' => '2025-08-01 00:34:46',
            ),
            35 => 
            array (
                'id' => 41,
                'tenGoiCuoc' => '12V200B',
                'giaTien' => '2400000 / 360 ngày',
                'dungLuong' => '8GB/ngày + miễn phí 20p/cuộc thoại nội mạng + 100p thoại ngoại mạng + Miễn phí gói Basic TV360',
                'cuPhap' => '12V200B PRO Gửi 290',
                'moTa' => '2400000 / 360 ngày 8GB/ngày + miễn phí 20p/cuộc thoại nội mạng + 100p thoại ngoại mạng + Miễn phí gói Basic TV360 
Soạn :12V200B PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12V200B Soạn tin theo cú pháp: 12V200B PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12V200B, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12V200B Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:34:46',
                'updated_at' => '2025-08-01 00:34:46',
            ),
            36 => 
            array (
                'id' => 42,
                'tenGoiCuoc' => 'MXH100',
                'giaTien' => '100000 / 30 ngày',
                'dungLuong' => '1GB/ngày + Miễn phí Data truy cập Youtube, Facebook, Tiktok + Miễn phí gói Basic TV360',
                'cuPhap' => 'MXH100 PRO Gửi 290',
                'moTa' => '100000 / 30 ngày 1GB/ngày + Miễn phí Data truy cập Youtube, Facebook, Tiktok + Miễn phí gói Basic TV360 
Soạn :MXH100 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói MXH100 Soạn tin theo cú pháp: MXH100 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước MXH100, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước MXH100 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:34:46',
                'updated_at' => '2025-08-01 00:34:46',
            ),
            37 => 
            array (
                'id' => 43,
                'tenGoiCuoc' => '3MXH100',
                'giaTien' => '300000 / 90 ngày',
                'dungLuong' => '1GB/ngày + Miễn phí Data truy cập Youtube, Facebook, Tiktok + Miễn phí gói Basic TV361',
                'cuPhap' => '3MXH100 PRO Gửi 290',
                'moTa' => '300000 / 90 ngày 1GB/ngày + Miễn phí Data truy cập Youtube, Facebook, Tiktok + Miễn phí gói Basic TV361 
Soạn :3MXH100 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3MXH100 Soạn tin theo cú pháp: 3MXH100 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3MXH100, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3MXH100 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:34:46',
                'updated_at' => '2025-08-01 00:34:46',
            ),
            38 => 
            array (
                'id' => 44,
                'tenGoiCuoc' => '6MXH100',
                'giaTien' => '600000 / 180 ngày',
                'dungLuong' => '1GB/ngày + Miễn phí Data truy cập Youtube, Facebook, Tiktok + Miễn phí gói Basic TV360',
                'cuPhap' => '6MXH100 PRO Gửi 290',
                'moTa' => '600000 / 180 ngày 1GB/ngày + Miễn phí Data truy cập Youtube, Facebook, Tiktok + Miễn phí gói Basic TV360 
Soạn :6MXH100 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6MXH100 Soạn tin theo cú pháp: 6MXH100 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6MXH100, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6MXH100 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:34:46',
                'updated_at' => '2025-08-01 00:34:46',
            ),
            39 => 
            array (
                'id' => 45,
                'tenGoiCuoc' => '12MXH100',
                'giaTien' => '1200000 / 360 ngày',
                'dungLuong' => '1GB/ngày + Miễn phí Data truy cập Youtube, Facebook, Tiktok + Miễn phí gói Basic TV360',
                'cuPhap' => '12MXH100 PRO Gửi 290',
                'moTa' => '1200000 / 360 ngày 1GB/ngày + Miễn phí Data truy cập Youtube, Facebook, Tiktok + Miễn phí gói Basic TV360 
Soạn :12MXH100 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12MXH100 Soạn tin theo cú pháp: 12MXH100 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12MXH100, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12MXH100 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:34:46',
                'updated_at' => '2025-08-01 00:34:46',
            ),
            40 => 
            array (
                'id' => 46,
                'tenGoiCuoc' => 'MXH120',
                'giaTien' => '120000 / 30 ngày',
                'dungLuong' => '1GB/ngày + Miễn phí Data truy cập Youtube, Facebook, Tiktok, nhắn tin Messenger +Miễn phí cuộc gọi nội mạng dưới 10p, Miễn phí 50p gọi ngoại mạng + Miễn phí gói Basic TV360 ',
                'cuPhap' => 'MXH120 PRO Gửi 290',
                'moTa' => '120000 / 30 ngày 1GB/ngày + Miễn phí Data truy cập Youtube, Facebook, Tiktok, nhắn tin Messenger +Miễn phí cuộc gọi nội mạng dưới 10p, Miễn phí 50p gọi ngoại mạng + Miễn phí gói Basic TV360  
Soạn :MXH120 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói MXH120 Soạn tin theo cú pháp: MXH120 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước MXH120, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước MXH120 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:34:46',
                'updated_at' => '2025-08-01 00:34:46',
            ),
            41 => 
            array (
                'id' => 47,
                'tenGoiCuoc' => '3MXH120',
                'giaTien' => '360000 / 90 ngày',
                'dungLuong' => '1GB/ngày + Miễn phí Data truy cập Youtube, Facebook, Tiktok, nhắn tin Messenger +Miễn phí cuộc gọi nội mạng dưới 10p, Miễn phí 50p gọi ngoại mạng + Miễn phí gói Basic TV361',
                'cuPhap' => '3MXH120 PRO Gửi 290',
                'moTa' => '360000 / 90 ngày 1GB/ngày + Miễn phí Data truy cập Youtube, Facebook, Tiktok, nhắn tin Messenger +Miễn phí cuộc gọi nội mạng dưới 10p, Miễn phí 50p gọi ngoại mạng + Miễn phí gói Basic TV361 
Soạn :3MXH120 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3MXH120 Soạn tin theo cú pháp: 3MXH120 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3MXH120, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3MXH120 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:34:46',
                'updated_at' => '2025-08-01 00:34:46',
            ),
            42 => 
            array (
                'id' => 48,
                'tenGoiCuoc' => '6MXH120',
                'giaTien' => '720000 / 180 ngày',
                'dungLuong' => '1GB/ngày + Miễn phí Data truy cập Youtube, Facebook, Tiktok, nhắn tin Messenger +Miễn phí cuộc gọi nội mạng dưới 10p, Miễn phí 50p gọi ngoại mạng + Miễn phí gói Basic TV360 ',
                'cuPhap' => '6MXH120 PRO Gửi 290',
                'moTa' => '720000 / 180 ngày 1GB/ngày + Miễn phí Data truy cập Youtube, Facebook, Tiktok, nhắn tin Messenger +Miễn phí cuộc gọi nội mạng dưới 10p, Miễn phí 50p gọi ngoại mạng + Miễn phí gói Basic TV360  
Soạn :6MXH120 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6MXH120 Soạn tin theo cú pháp: 6MXH120 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6MXH120, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6MXH120 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:34:46',
                'updated_at' => '2025-08-01 00:34:46',
            ),
            43 => 
            array (
                'id' => 49,
                'tenGoiCuoc' => '12MXH120',
                'giaTien' => '1440000 / 360 ngày',
                'dungLuong' => '1GB/ngày + Miễn phí Data truy cập Youtube, Facebook, Tiktok, nhắn tin Messenger +Miễn phí cuộc gọi nội mạng dưới 10p, Miễn phí 50p gọi ngoại mạng + Miễn phí gói Basic TV360 ',
                'cuPhap' => '12MXH120 PRO Gửi 290',
                'moTa' => '1440000 / 360 ngày 1GB/ngày + Miễn phí Data truy cập Youtube, Facebook, Tiktok, nhắn tin Messenger +Miễn phí cuộc gọi nội mạng dưới 10p, Miễn phí 50p gọi ngoại mạng + Miễn phí gói Basic TV360  
Soạn :12MXH120 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12MXH120 Soạn tin theo cú pháp: 12MXH120 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12MXH120, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12MXH120 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:34:46',
                'updated_at' => '2025-08-01 00:34:46',
            ),
            44 => 
            array (
                'id' => 50,
                'tenGoiCuoc' => 'MXH150',
                'giaTien' => '150000 / 30 ngày',
                'dungLuong' => '1.5GB/ngày + Miễn phí Data truy cập Youtube, Facebook, Tiktok, nhắn tin Messenger +Miễn phí cuộc gọi nội mạng dưới 10p, Miễn phí 50p gọi ngoại mạng + Miễn phí gói Basic TV360 ',
                'cuPhap' => 'MXH150 PRO Gửi 290',
                'moTa' => '150000 / 30 ngày 1.5GB/ngày + Miễn phí Data truy cập Youtube, Facebook, Tiktok, nhắn tin Messenger +Miễn phí cuộc gọi nội mạng dưới 10p, Miễn phí 50p gọi ngoại mạng + Miễn phí gói Basic TV360  
Soạn :MXH150 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói MXH150 Soạn tin theo cú pháp: MXH150 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước MXH150, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước MXH150 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:34:47',
                'updated_at' => '2025-08-01 00:34:47',
            ),
            45 => 
            array (
                'id' => 51,
                'tenGoiCuoc' => '3MXH150',
                'giaTien' => '450000 / 90 ngày',
                'dungLuong' => '1.5GB/ngày + Miễn phí Data truy cập Youtube, Facebook, Tiktok, nhắn tin Messenger +Miễn phí cuộc gọi nội mạng dưới 10p, Miễn phí 50p gọi ngoại mạng + Miễn phí gói Basic TV361',
                'cuPhap' => '3MXH150 PRO Gửi 290',
                'moTa' => '450000 / 90 ngày 1.5GB/ngày + Miễn phí Data truy cập Youtube, Facebook, Tiktok, nhắn tin Messenger +Miễn phí cuộc gọi nội mạng dưới 10p, Miễn phí 50p gọi ngoại mạng + Miễn phí gói Basic TV361 
Soạn :3MXH150 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3MXH150 Soạn tin theo cú pháp: 3MXH150 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3MXH150, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3MXH150 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:34:47',
                'updated_at' => '2025-08-01 00:34:47',
            ),
            46 => 
            array (
                'id' => 52,
                'tenGoiCuoc' => '6MXH150',
                'giaTien' => '900000 / 180 ngày',
                'dungLuong' => '1.5GB/ngày + Miễn phí Data truy cập Youtube, Facebook, Tiktok, nhắn tin Messenger +Miễn phí cuộc gọi nội mạng dưới 10p, Miễn phí 50p gọi ngoại mạng + Miễn phí gói Basic TV360 ',
                'cuPhap' => '6MXH150 PRO Gửi 290',
                'moTa' => '900000 / 180 ngày 1.5GB/ngày + Miễn phí Data truy cập Youtube, Facebook, Tiktok, nhắn tin Messenger +Miễn phí cuộc gọi nội mạng dưới 10p, Miễn phí 50p gọi ngoại mạng + Miễn phí gói Basic TV360  
Soạn :6MXH150 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6MXH150 Soạn tin theo cú pháp: 6MXH150 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6MXH150, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6MXH150 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:34:47',
                'updated_at' => '2025-08-01 00:34:47',
            ),
            47 => 
            array (
                'id' => 53,
                'tenGoiCuoc' => '12MXH150',
                'giaTien' => '1800000 / 360 ngày',
                'dungLuong' => '1.5GB/ngày + Miễn phí Data truy cập Youtube, Facebook, Tiktok, nhắn tin Messenger +Miễn phí cuộc gọi nội mạng dưới 10p, Miễn phí 50p gọi ngoại mạng + Miễn phí gói Basic TV360 ',
                'cuPhap' => '12MXH150 PRO Gửi 290',
                'moTa' => '1800000 / 360 ngày 1.5GB/ngày + Miễn phí Data truy cập Youtube, Facebook, Tiktok, nhắn tin Messenger +Miễn phí cuộc gọi nội mạng dưới 10p, Miễn phí 50p gọi ngoại mạng + Miễn phí gói Basic TV360  
Soạn :12MXH150 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12MXH150 Soạn tin theo cú pháp: 12MXH150 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12MXH150, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12MXH150 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 00:34:47',
                'updated_at' => '2025-08-01 00:34:47',
            ),
            48 => 
            array (
                'id' => 54,
                'tenGoiCuoc' => '5G135N',
                'giaTien' => '135000 / 30 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '5G135N PRO Gửi 290',
                'moTa' => '135000 / 30 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :5G135N PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 5G135N Soạn tin theo cú pháp: 5G135N PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 5G135N, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 5G135N Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:45:55',
                'updated_at' => '2025-08-01 00:45:55',
            ),
            49 => 
            array (
                'id' => 55,
                'tenGoiCuoc' => '3T5G135N',
                'giaTien' => '405000 / 90 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '3T5G135N PRO Gửi 290',
                'moTa' => '405000 / 90 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :3T5G135N PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3T5G135N Soạn tin theo cú pháp: 3T5G135N PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3T5G135N, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3T5G135N Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:45:55',
                'updated_at' => '2025-08-01 00:45:55',
            ),
            50 => 
            array (
                'id' => 56,
                'tenGoiCuoc' => '6T5G135N',
                'giaTien' => '810000 / 180 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '6T5G135N PRO Gửi 290',
                'moTa' => '810000 / 180 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :6T5G135N PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6T5G135N Soạn tin theo cú pháp: 6T5G135N PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6T5G135N, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6T5G135N Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:45:55',
                'updated_at' => '2025-08-01 00:45:55',
            ),
            51 => 
            array (
                'id' => 57,
                'tenGoiCuoc' => '12T5G135N',
                'giaTien' => '1620000 / 360 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '12T5G135N PRO Gửi 290',
                'moTa' => '1620000 / 360 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :12T5G135N PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12T5G135N Soạn tin theo cú pháp: 12T5G135N PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12T5G135N, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12T5G135N Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:45:55',
                'updated_at' => '2025-08-01 00:45:55',
            ),
            52 => 
            array (
                'id' => 58,
                'tenGoiCuoc' => '5G150',
                'giaTien' => '150000 / 30 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '5G150 PRO Gửi 290',
                'moTa' => '150000 / 30 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :5G150 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 5G150 Soạn tin theo cú pháp: 5G150 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 5G150, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 5G150 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:45:56',
                'updated_at' => '2025-08-01 00:45:56',
            ),
            53 => 
            array (
                'id' => 59,
                'tenGoiCuoc' => '3T5G150',
                'giaTien' => '450000 / 90 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '3T5G150 PRO Gửi 290',
                'moTa' => '450000 / 90 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :3T5G150 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3T5G150 Soạn tin theo cú pháp: 3T5G150 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3T5G150, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3T5G150 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:45:56',
                'updated_at' => '2025-08-01 00:45:56',
            ),
            54 => 
            array (
                'id' => 60,
                'tenGoiCuoc' => '6T5G150',
                'giaTien' => '900000 / 180 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '6T5G150 PRO Gửi 290',
                'moTa' => '900000 / 180 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :6T5G150 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6T5G150 Soạn tin theo cú pháp: 6T5G150 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6T5G150, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6T5G150 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:45:56',
                'updated_at' => '2025-08-01 00:45:56',
            ),
            55 => 
            array (
                'id' => 61,
                'tenGoiCuoc' => '12T5G150',
                'giaTien' => '1800000 / 360 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '12T5G150 PRO Gửi 290',
                'moTa' => '1800000 / 360 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :12T5G150 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12T5G150 Soạn tin theo cú pháp: 12T5G150 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12T5G150, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12T5G150 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:45:56',
                'updated_at' => '2025-08-01 00:45:56',
            ),
            56 => 
            array (
                'id' => 62,
                'tenGoiCuoc' => '5G135N',
                'giaTien' => '135000 / 30 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '5G135N PRO Gửi 290',
                'moTa' => '135000 / 30 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :5G135N PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 5G135N Soạn tin theo cú pháp: 5G135N PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 5G135N, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 5G135N Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:47:24',
                'updated_at' => '2025-08-01 00:47:24',
            ),
            57 => 
            array (
                'id' => 63,
                'tenGoiCuoc' => '3T5G135N',
                'giaTien' => '405000 / 90 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '3T5G135N PRO Gửi 290',
                'moTa' => '405000 / 90 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :3T5G135N PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3T5G135N Soạn tin theo cú pháp: 3T5G135N PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3T5G135N, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3T5G135N Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:47:24',
                'updated_at' => '2025-08-01 00:47:24',
            ),
            58 => 
            array (
                'id' => 64,
                'tenGoiCuoc' => '6T5G135N',
                'giaTien' => '810000 / 180 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '6T5G135N PRO Gửi 290',
                'moTa' => '810000 / 180 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :6T5G135N PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6T5G135N Soạn tin theo cú pháp: 6T5G135N PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6T5G135N, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6T5G135N Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:47:24',
                'updated_at' => '2025-08-01 00:47:24',
            ),
            59 => 
            array (
                'id' => 65,
                'tenGoiCuoc' => '12T5G135N',
                'giaTien' => '1620000 / 360 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '12T5G135N PRO Gửi 290',
                'moTa' => '1620000 / 360 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :12T5G135N PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12T5G135N Soạn tin theo cú pháp: 12T5G135N PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12T5G135N, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12T5G135N Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:47:24',
                'updated_at' => '2025-08-01 00:47:24',
            ),
            60 => 
            array (
                'id' => 66,
                'tenGoiCuoc' => '5G150',
                'giaTien' => '150000 / 30 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '5G150 PRO Gửi 290',
                'moTa' => '150000 / 30 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :5G150 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 5G150 Soạn tin theo cú pháp: 5G150 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 5G150, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 5G150 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:47:24',
                'updated_at' => '2025-08-01 00:47:24',
            ),
            61 => 
            array (
                'id' => 67,
                'tenGoiCuoc' => '3T5G150',
                'giaTien' => '450000 / 90 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '3T5G150 PRO Gửi 290',
                'moTa' => '450000 / 90 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :3T5G150 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3T5G150 Soạn tin theo cú pháp: 3T5G150 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3T5G150, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3T5G150 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:47:24',
                'updated_at' => '2025-08-01 00:47:24',
            ),
            62 => 
            array (
                'id' => 68,
                'tenGoiCuoc' => '6T5G150',
                'giaTien' => '900000 / 180 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '6T5G150 PRO Gửi 290',
                'moTa' => '900000 / 180 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :6T5G150 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6T5G150 Soạn tin theo cú pháp: 6T5G150 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6T5G150, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6T5G150 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:47:24',
                'updated_at' => '2025-08-01 00:47:24',
            ),
            63 => 
            array (
                'id' => 69,
                'tenGoiCuoc' => '12T5G150',
                'giaTien' => '1800000 / 360 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '12T5G150 PRO Gửi 290',
                'moTa' => '1800000 / 360 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :12T5G150 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12T5G150 Soạn tin theo cú pháp: 12T5G150 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12T5G150, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12T5G150 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:47:24',
                'updated_at' => '2025-08-01 00:47:24',
            ),
            64 => 
            array (
                'id' => 70,
                'tenGoiCuoc' => '5G135N',
                'giaTien' => '135000 / 30 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '5G135N PRO Gửi 290',
                'moTa' => '135000 / 30 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :5G135N PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 5G135N Soạn tin theo cú pháp: 5G135N PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 5G135N, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 5G135N Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:48:31',
                'updated_at' => '2025-08-01 00:48:31',
            ),
            65 => 
            array (
                'id' => 71,
                'tenGoiCuoc' => '3T5G135N',
                'giaTien' => '405000 / 90 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '3T5G135N PRO Gửi 290',
                'moTa' => '405000 / 90 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :3T5G135N PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3T5G135N Soạn tin theo cú pháp: 3T5G135N PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3T5G135N, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3T5G135N Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:48:31',
                'updated_at' => '2025-08-01 00:48:31',
            ),
            66 => 
            array (
                'id' => 72,
                'tenGoiCuoc' => '6T5G135N',
                'giaTien' => '810000 / 180 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '6T5G135N PRO Gửi 290',
                'moTa' => '810000 / 180 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :6T5G135N PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6T5G135N Soạn tin theo cú pháp: 6T5G135N PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6T5G135N, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6T5G135N Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:48:31',
                'updated_at' => '2025-08-01 00:48:31',
            ),
            67 => 
            array (
                'id' => 73,
                'tenGoiCuoc' => '12T5G135N',
                'giaTien' => '1620000 / 360 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '12T5G135N PRO Gửi 290',
                'moTa' => '1620000 / 360 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :12T5G135N PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12T5G135N Soạn tin theo cú pháp: 12T5G135N PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12T5G135N, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12T5G135N Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:48:31',
                'updated_at' => '2025-08-01 00:48:31',
            ),
            68 => 
            array (
                'id' => 74,
                'tenGoiCuoc' => '5G150',
                'giaTien' => '150000 / 30 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '5G150 PRO Gửi 290',
                'moTa' => '150000 / 30 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :5G150 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 5G150 Soạn tin theo cú pháp: 5G150 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 5G150, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 5G150 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:48:31',
                'updated_at' => '2025-08-01 00:48:31',
            ),
            69 => 
            array (
                'id' => 75,
                'tenGoiCuoc' => '3T5G150',
                'giaTien' => '450000 / 90 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '3T5G150 PRO Gửi 290',
                'moTa' => '450000 / 90 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :3T5G150 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3T5G150 Soạn tin theo cú pháp: 3T5G150 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3T5G150, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3T5G150 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:48:31',
                'updated_at' => '2025-08-01 00:48:31',
            ),
            70 => 
            array (
                'id' => 76,
                'tenGoiCuoc' => '6T5G150',
                'giaTien' => '900000 / 180 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '6T5G150 PRO Gửi 290',
                'moTa' => '900000 / 180 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :6T5G150 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6T5G150 Soạn tin theo cú pháp: 6T5G150 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6T5G150, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6T5G150 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:48:32',
                'updated_at' => '2025-08-01 00:48:32',
            ),
            71 => 
            array (
                'id' => 77,
                'tenGoiCuoc' => '12T5G150',
                'giaTien' => '1800000 / 360 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '12T5G150 PRO Gửi 290',
                'moTa' => '1800000 / 360 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :12T5G150 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12T5G150 Soạn tin theo cú pháp: 12T5G150 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12T5G150, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12T5G150 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:48:32',
                'updated_at' => '2025-08-01 00:48:32',
            ),
            72 => 
            array (
                'id' => 78,
                'tenGoiCuoc' => '5G135N',
                'giaTien' => '135000 / 30 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '5G135N PRO Gửi 290',
                'moTa' => '135000 / 30 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :5G135N PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 5G135N Soạn tin theo cú pháp: 5G135N PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 5G135N, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 5G135N Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:49:37',
                'updated_at' => '2025-08-01 00:49:37',
            ),
            73 => 
            array (
                'id' => 79,
                'tenGoiCuoc' => '3T5G135N',
                'giaTien' => '405000 / 90 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '3T5G135N PRO Gửi 290',
                'moTa' => '405000 / 90 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :3T5G135N PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3T5G135N Soạn tin theo cú pháp: 3T5G135N PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3T5G135N, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3T5G135N Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:49:37',
                'updated_at' => '2025-08-01 00:49:37',
            ),
            74 => 
            array (
                'id' => 80,
                'tenGoiCuoc' => '6T5G135N',
                'giaTien' => '810000 / 180 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '6T5G135N PRO Gửi 290',
                'moTa' => '810000 / 180 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :6T5G135N PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6T5G135N Soạn tin theo cú pháp: 6T5G135N PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6T5G135N, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6T5G135N Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:49:37',
                'updated_at' => '2025-08-01 00:49:37',
            ),
            75 => 
            array (
                'id' => 81,
                'tenGoiCuoc' => '12T5G135N',
                'giaTien' => '1620000 / 360 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '12T5G135N PRO Gửi 290',
                'moTa' => '1620000 / 360 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :12T5G135N PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12T5G135N Soạn tin theo cú pháp: 12T5G135N PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12T5G135N, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12T5G135N Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:49:37',
                'updated_at' => '2025-08-01 00:49:37',
            ),
            76 => 
            array (
                'id' => 82,
                'tenGoiCuoc' => '5G150',
                'giaTien' => '150000 / 30 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '5G150 PRO Gửi 290',
                'moTa' => '150000 / 30 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :5G150 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 5G150 Soạn tin theo cú pháp: 5G150 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 5G150, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 5G150 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:49:37',
                'updated_at' => '2025-08-01 00:49:37',
            ),
            77 => 
            array (
                'id' => 83,
                'tenGoiCuoc' => '3T5G150',
                'giaTien' => '450000 / 90 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '3T5G150 PRO Gửi 290',
                'moTa' => '450000 / 90 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :3T5G150 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3T5G150 Soạn tin theo cú pháp: 3T5G150 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3T5G150, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3T5G150 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:49:37',
                'updated_at' => '2025-08-01 00:49:37',
            ),
            78 => 
            array (
                'id' => 84,
                'tenGoiCuoc' => '6T5G150',
                'giaTien' => '900000 / 180 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '6T5G150 PRO Gửi 290',
                'moTa' => '900000 / 180 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :6T5G150 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6T5G150 Soạn tin theo cú pháp: 6T5G150 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6T5G150, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6T5G150 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:49:37',
                'updated_at' => '2025-08-01 00:49:37',
            ),
            79 => 
            array (
                'id' => 85,
                'tenGoiCuoc' => '12T5G150',
                'giaTien' => '1800000 / 360 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '12T5G150 PRO Gửi 290',
                'moTa' => '1800000 / 360 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :12T5G150 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12T5G150 Soạn tin theo cú pháp: 12T5G150 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12T5G150, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12T5G150 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:49:37',
                'updated_at' => '2025-08-01 00:49:37',
            ),
            80 => 
            array (
                'id' => 86,
                'tenGoiCuoc' => '5G135N',
                'giaTien' => '135000 / 30 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '5G135N PRO Gửi 290',
                'moTa' => '135000 / 30 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :5G135N PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 5G135N Soạn tin theo cú pháp: 5G135N PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 5G135N, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 5G135N Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:51:32',
                'updated_at' => '2025-08-01 00:51:32',
            ),
            81 => 
            array (
                'id' => 87,
                'tenGoiCuoc' => '3T5G135N',
                'giaTien' => '405000 / 90 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '3T5G135N PRO Gửi 290',
                'moTa' => '405000 / 90 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :3T5G135N PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3T5G135N Soạn tin theo cú pháp: 3T5G135N PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3T5G135N, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3T5G135N Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:51:32',
                'updated_at' => '2025-08-01 00:51:32',
            ),
            82 => 
            array (
                'id' => 88,
                'tenGoiCuoc' => '6T5G135N',
                'giaTien' => '810000 / 180 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '6T5G135N PRO Gửi 290',
                'moTa' => '810000 / 180 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :6T5G135N PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6T5G135N Soạn tin theo cú pháp: 6T5G135N PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6T5G135N, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6T5G135N Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:51:32',
                'updated_at' => '2025-08-01 00:51:32',
            ),
            83 => 
            array (
                'id' => 89,
                'tenGoiCuoc' => '12T5G135N',
                'giaTien' => '1620000 / 360 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '12T5G135N PRO Gửi 290',
                'moTa' => '1620000 / 360 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :12T5G135N PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12T5G135N Soạn tin theo cú pháp: 12T5G135N PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12T5G135N, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12T5G135N Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:51:32',
                'updated_at' => '2025-08-01 00:51:32',
            ),
            84 => 
            array (
                'id' => 90,
                'tenGoiCuoc' => '5G150',
                'giaTien' => '150000 / 30 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '5G150 PRO Gửi 290',
                'moTa' => '150000 / 30 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :5G150 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 5G150 Soạn tin theo cú pháp: 5G150 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 5G150, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 5G150 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:51:32',
                'updated_at' => '2025-08-01 00:51:32',
            ),
            85 => 
            array (
                'id' => 91,
                'tenGoiCuoc' => '3T5G150',
                'giaTien' => '450000 / 90 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '3T5G150 PRO Gửi 290',
                'moTa' => '450000 / 90 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :3T5G150 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3T5G150 Soạn tin theo cú pháp: 3T5G150 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3T5G150, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3T5G150 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:51:32',
                'updated_at' => '2025-08-01 00:51:32',
            ),
            86 => 
            array (
                'id' => 92,
                'tenGoiCuoc' => '6T5G150',
                'giaTien' => '900000 / 180 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '6T5G150 PRO Gửi 290',
                'moTa' => '900000 / 180 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :6T5G150 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6T5G150 Soạn tin theo cú pháp: 6T5G150 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6T5G150, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6T5G150 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:51:32',
                'updated_at' => '2025-08-01 00:51:32',
            ),
            87 => 
            array (
                'id' => 93,
                'tenGoiCuoc' => '12T5G150',
                'giaTien' => '1800000 / 360 ngày',
                'dungLuong' => '6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox',
                'cuPhap' => '12T5G150 PRO Gửi 290',
                'moTa' => '1800000 / 360 ngày 6GB/Ngày + Miễn phí gói Basic TV360 4K, 20GB Mybox 
Soạn :12T5G150 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12T5G150 Soạn tin theo cú pháp: 12T5G150 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12T5G150, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12T5G150 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 1,
                'created_at' => '2025-08-01 00:51:32',
                'updated_at' => '2025-08-01 00:51:32',
            ),
            88 => 
            array (
                'id' => 94,
                'tenGoiCuoc' => '5G160',
                'giaTien' => '160000 / 30 ngày',
                'dungLuong' => '4GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng',
                'cuPhap' => '5G160 PRO Gửi 290',
                'moTa' => '160000 / 30 ngày 4GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng 
Soạn :5G160 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 5G160 Soạn tin theo cú pháp: 5G160 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 5G160, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 5G160 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 01:00:01',
                'updated_at' => '2025-08-01 01:00:01',
            ),
            89 => 
            array (
                'id' => 95,
                'tenGoiCuoc' => '3T5G160',
                'giaTien' => '480000 / 90 ngày',
                'dungLuong' => '4GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng',
                'cuPhap' => '3T5G160 PRO Gửi 290',
                'moTa' => '480000 / 90 ngày 4GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng 
Soạn :3T5G160 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3T5G160 Soạn tin theo cú pháp: 3T5G160 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3T5G160, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3T5G160 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 01:00:01',
                'updated_at' => '2025-08-01 01:00:01',
            ),
            90 => 
            array (
                'id' => 96,
                'tenGoiCuoc' => '6T5G160',
                'giaTien' => '960000 / 180 ngày',
                'dungLuong' => '4GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng',
                'cuPhap' => '6T5G160 PRO Gửi 290',
                'moTa' => '960000 / 180 ngày 4GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng 
Soạn :6T5G160 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6T5G160 Soạn tin theo cú pháp: 6T5G160 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6T5G160, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6T5G160 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 01:00:01',
                'updated_at' => '2025-08-01 01:00:01',
            ),
            91 => 
            array (
                'id' => 97,
                'tenGoiCuoc' => '12T5G160',
                'giaTien' => '1920000 / 360 ngày',
                'dungLuong' => '4GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng',
                'cuPhap' => '12T5G160 PRO Gửi 290',
                'moTa' => '1920000 / 360 ngày 4GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng 
Soạn :12T5G160 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12T5G160 Soạn tin theo cú pháp: 12T5G160 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12T5G160, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12T5G160 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 01:00:01',
                'updated_at' => '2025-08-01 01:00:01',
            ),
            92 => 
            array (
                'id' => 98,
                'tenGoiCuoc' => '5G180',
                'giaTien' => '180000 / 30 ngày',
                'dungLuong' => '6GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng',
                'cuPhap' => '5G180 PRO Gửi 290',
                'moTa' => '180000 / 30 ngày 6GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng 
Soạn :5G180 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 5G180 Soạn tin theo cú pháp: 5G180 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 5G180, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 5G180 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 01:00:02',
                'updated_at' => '2025-08-01 01:00:02',
            ),
            93 => 
            array (
                'id' => 99,
                'tenGoiCuoc' => '3T5G180',
                'giaTien' => '540000 / 90 ngày',
                'dungLuong' => '6GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng',
                'cuPhap' => '3T5G180 PRO Gửi 290',
                'moTa' => '540000 / 90 ngày 6GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng 
Soạn :3T5G180 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3T5G180 Soạn tin theo cú pháp: 3T5G180 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3T5G180, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3T5G180 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 01:00:02',
                'updated_at' => '2025-08-01 01:00:02',
            ),
            94 => 
            array (
                'id' => 100,
                'tenGoiCuoc' => '6T5G180',
                'giaTien' => '1080000 / 180 ngày',
                'dungLuong' => '6GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng',
                'cuPhap' => '6T5G180 PRO Gửi 290',
                'moTa' => '1080000 / 180 ngày 6GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng 
Soạn :6T5G180 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6T5G180 Soạn tin theo cú pháp: 6T5G180 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6T5G180, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6T5G180 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 01:00:02',
                'updated_at' => '2025-08-01 01:00:02',
            ),
            95 => 
            array (
                'id' => 101,
                'tenGoiCuoc' => '12T5G180',
                'giaTien' => '2160000 / 360 ngày',
                'dungLuong' => '6GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng',
                'cuPhap' => '12T5G180 PRO Gửi 290',
                'moTa' => '2160000 / 360 ngày 6GB/ngày + Miễn phí gói Basic TV360 + Miễn phí cuộc gọi nội mạng dưới 10p + 100p gọi ngoại mạng 
Soạn :12T5G180 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12T5G180 Soạn tin theo cú pháp: 12T5G180 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12T5G180, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12T5G180 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 01:00:02',
                'updated_at' => '2025-08-01 01:00:02',
            ),
            96 => 
            array (
                'id' => 102,
                'tenGoiCuoc' => '5G230',
                'giaTien' => '230000 / 30 ngày',
                'dungLuong' => '8GB/ngày + miễn phí 20p/cuộc thoại nội mạng + 100p thoại ngoại mạng + Miễn phí gói Basic TV360',
                'cuPhap' => '5G230 PRO Gửi 290',
                'moTa' => '230000 / 30 ngày 8GB/ngày + miễn phí 20p/cuộc thoại nội mạng + 100p thoại ngoại mạng + Miễn phí gói Basic TV360 
Soạn :5G230 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 5G230 Soạn tin theo cú pháp: 5G230 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 5G230, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 5G230 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 01:00:02',
                'updated_at' => '2025-08-01 01:00:02',
            ),
            97 => 
            array (
                'id' => 103,
                'tenGoiCuoc' => '3T5G230',
                'giaTien' => '690000 / 90 ngày',
                'dungLuong' => '8GB/ngày + miễn phí 20p/cuộc thoại nội mạng + 100p thoại ngoại mạng + Miễn phí gói Basic TV361',
                'cuPhap' => '3T5G230 PRO Gửi 290',
                'moTa' => '690000 / 90 ngày 8GB/ngày + miễn phí 20p/cuộc thoại nội mạng + 100p thoại ngoại mạng + Miễn phí gói Basic TV361 
Soạn :3T5G230 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 3T5G230 Soạn tin theo cú pháp: 3T5G230 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 3T5G230, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 3T5G230 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 01:00:02',
                'updated_at' => '2025-08-01 01:00:02',
            ),
            98 => 
            array (
                'id' => 104,
                'tenGoiCuoc' => '6T5G230',
                'giaTien' => '1380000 / 180 ngày',
                'dungLuong' => '8GB/ngày + miễn phí 20p/cuộc thoại nội mạng + 100p thoại ngoại mạng + Miễn phí gói Basic TV360',
                'cuPhap' => '6T5G230 PRO Gửi 290',
                'moTa' => '1380000 / 180 ngày 8GB/ngày + miễn phí 20p/cuộc thoại nội mạng + 100p thoại ngoại mạng + Miễn phí gói Basic TV360 
Soạn :6T5G230 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 6T5G230 Soạn tin theo cú pháp: 6T5G230 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 6T5G230, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 6T5G230 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 01:00:02',
                'updated_at' => '2025-08-01 01:00:02',
            ),
            99 => 
            array (
                'id' => 105,
                'tenGoiCuoc' => '12T5G230',
                'giaTien' => '2760000 / 360 ngày',
                'dungLuong' => '8GB/ngày + miễn phí 20p/cuộc thoại nội mạng + 100p thoại ngoại mạng + Miễn phí gói Basic TV360',
                'cuPhap' => '12T5G230 PRO Gửi 290',
                'moTa' => '2760000 / 360 ngày 8GB/ngày + miễn phí 20p/cuộc thoại nội mạng + 100p thoại ngoại mạng + Miễn phí gói Basic TV360 
Soạn :12T5G230 PRO Gửi 290',
            'huongDan' => 'Hướng dẫn đăng ký gói 12T5G230 Soạn tin theo cú pháp: 12T5G230 PRO Gửi 290 Hoặc nhấn \'Đăng ký gói cước\' đã được tích hợp sẵn cú pháp, bạn chỉ cần gửi SMS là xong. Kiểm tra khuyến mại còn lại của gói cước 12T5G230, soạn: KTTK gửi 191. Hướng dẫn hủy gói cước 12T5G230 Hủy gia hạn(Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi về và soạn Y gửi 191 để xác nhận.',
                'tag_id' => 3,
                'created_at' => '2025-08-01 01:00:02',
                'updated_at' => '2025-08-01 01:00:02',
            ),
        ));
        
        
    }
}