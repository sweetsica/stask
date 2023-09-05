<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'parentTaskId' => null,
            'name' => 'Thiết kế chức năng màn "Cơ cấu tổ chức"',
            'description' => 'Thay đổi cây sơ đồ thành dạng có thể sắp xếp và có thêm số thứ tự dạng a.b.c',
            'kpi' => '15',
            'resultKpi' => null,
            'time' => '480',
            'tag' => '',
            'status' => '0',
            'comment' => '',
            'projectId' => '1',
            'userIdWork' => '5',
            'userIdLead' => '2',
            'normId' => null,
        ]);
        Task::create([
            'parentTaskId' => null,
            'name' => 'Thiết kế chức năng màn "Đơn hàng"',
            'description' => 'Đầy đủ chức năng thêm sửa xóa và có thể liên kết với nhân viên, khách hàng, sản phẩm',
            'kpi' => '15',
            'resultKpi' => null,
            'time' => '480',
            'tag' => '',
            'status' => '0',
            'comment' => '',
            'projectId' => '1',
            'userIdWork' => '5',
            'userIdLead' => '2',
            'normId' => null,
        ]);
    }
}
