<?php

namespace Database\Seeders;

use App\Models\Norm;
use Illuminate\Database\Seeder;

class NormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Norm::create([
            'name' => 'Tổng hợp, lập biên bản họp và đăng tải lên DWT',
            'description' => '',
            'time' => '60',
            'kpi' => '0.5'
        ]);
        Norm::create([
            'name' => 'Lập trình chức năng thêm mới đơn giản (BE)',
            'description' => 'Gồm các trường cơ bản, ghi và lưu không cần liên kết quá nhiều (<3 bảng)',
            'time' => '30',
            'kpi' => '0.25'
        ]);
        Norm::create([
            'name' => 'Lập trình chức năng sửa đơn giản (BE)',
            'description' => 'Lấy đầy đủ dữ liệu các trường từ DB, lưu và cập nhật chỉnh sửa. Có đi kèm chức năng kiểm tra quyền khi cập nhật',
            'time' => '35',
            'kpi' => '0.5'
        ]);
        Norm::create([
            'name' => 'Lập trình chức năng xem đơn giản (BE)',
            'description' => 'Hiển thị dữ liệu từ DB ra giao diện. Có đi kèm chức năng kiểm tra quyền khi xem',
            'time' => '15',
            'kpi' => '0.15'
        ]);
        Norm::create([
            'name' => 'Lập trình chức năng xóa đơn giản (BE)',
            'description' => 'Xóa dữ liệu khỏi DB. Có đi kèm chức năng kiểm tra quyền khi xóa.',
            'time' => '15',
            'kpi' => '0.15'
        ]);
        Norm::create([
            'name' => 'Lập trình chức năng thêm mới nâng cao (BE)',
            'description' => 'Gồm các trường phức tạp, ghi và lưu cần liên kết nhiều (>2 bảng)',
            'time' => '120',
            'kpi' => '1'
        ]);
        Norm::create([
            'name' => 'Lập trình chức năng sửa nâng cao (BE)',
            'description' => 'Lấy đầy đủ dữ liệu các trường từ DB, lưu và cập nhật chỉnh sửa. Có đi kèm chức năng kiểm tra quyền khi cập nhật. Chức năng sửa này có thể phát sinh kèm ô chọn, lọc và tìm kiếm các dữ liệu ở n+2 bảng khác',
            'time' => '240',
            'kpi' => '2'
        ]);
        Norm::create([
            'name' => 'Lập trình chức năng xem nâng cao (BE)',
            'description' => 'Hiển thị dữ liệu từ DB ra giao diện. Có đi kèm chức năng kiểm tra đầu ra là nội bộ, theo người, vị trí, vai trò hoặc công cộng',
            'time' => '120',
            'kpi' => '1'
        ]);
        Norm::create([
            'name' => 'Lập trình chức năng xóa nâng cao (BE)',
            'description' => 'Xóa dữ liệu khỏi DB. Có đi kèm chức năng kiểm tra quyền và xóa đệm, lịch sử khi xóa.',
            'time' => '120',
            'kpi' => '1'
        ]);
    }
}
