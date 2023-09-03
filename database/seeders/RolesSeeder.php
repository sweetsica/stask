<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Role::create([
           'name' => 'ADM',
           'description' => 'Quyền quản trị',
            'numbKey' => (0)
       ]);
        Role::create([
            'name' => 'COF',
            'description' => 'Quyền trưởng phòng',
            'numbKey' => (1)
        ]);
        Role::create([
            'name' => 'TL',
            'description' => 'Quyền nhóm trưởng',
            'numbKey' => (1)
        ]);
        Role::create([
            'name' => 'TM',
            'description' => 'Quyền nhân viên',
            'numbKey' => (2)
        ]);
        Role::create([
            'name' => 'CUS',
            'description' => 'Quyền khách',
            'numbKey' => (2)
        ]);
    }
}
