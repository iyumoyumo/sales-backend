<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
    ['employee_id' => '1001', 'name' => '佐藤一郎', 'email' => 'sato@example.com'],
    ['employee_id' => '1002', 'name' => '鈴木二郎', 'email' => 'suzuki@example.com'],
    ['employee_id' => '1003', 'name' => '田中三郎', 'email' => 'tanaka@example.com'],
]);

    }
}
