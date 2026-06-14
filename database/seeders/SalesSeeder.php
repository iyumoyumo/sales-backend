<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;   // ← これが必要！

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sales')->insert([
            [
                'employee_id' => '1001',
                'amount' => 5000,
                'sale_date' => '2024-06-01',
                'memo' => '初回売上'
            ],
            [
                'employee_id' => '1002',
                'amount' => 8000,
                'sale_date' => '2024-06-02',
                'memo' => '紹介案件'
            ],
[
                'employee_id' => '1001',
                'amount' => 10000,
                'sale_date' => '2024-07-01',
                'memo' => '初回売上'
            ],
            [
                'employee_id' => '1002',
                'amount' => 10000,
                'sale_date' => '2024-07-02',
                'memo' => '紹介案件'
            ],

        ]);
    }
}
