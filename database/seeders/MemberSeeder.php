<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::create([
            'name' => 'Nguyễn Ngọc Bảo',
            'description' => 'Project Manager',
            'email' => 'barondeepsnow@gmail.com',
            'password' => Hash::make('123456'),
            'roleID' => 1,
            'salary' => '0'
        ]);
        Member::create([
            'name' => 'Hồ Thị Hồng Vân',
            'description' => 'Assistant',
            'email' => 'van@gmail.com',
            'password' => Hash::make('123456'),
            'roleID' => 2,
            'salary' => '0'
        ]);
        Member::create([
            'name' => 'Tống Thị Liễu',
            'description' => 'Nhân viên BA',
            'email' => 'lieu@gmail.com',
            'password' => Hash::make('123456'),
            'roleID' => 3,
            'salary' => '0'
        ]);
        Member::create([
            'name' => 'Nguyễn Huy Tùng',
            'description' => 'Nhân viên BA',
            'email' => 'tung@gmail.com',
            'password' => Hash::make('123456'),
            'roleID' => 3,
            'salary' => '0'
        ]);
        Member::create([
            'name' => 'Trần Chung Huy',
            'description' => 'Nhân viên FE',
            'email' => 'huy@gmail.com',
            'password' => Hash::make('123456'),
            'roleID' => 4,
            'salary' => '0'
        ]);
        Member::create([
            'name' => 'Nguyễn Ngọc Minh',
            'description' => 'Nhân viên BE',
            'email' => 'minh@gmail.com',
            'password' => Hash::make('123456'),
            'roleID' => 4,
            'salary' => '0'
        ]);
    }
}
