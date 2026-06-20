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
   [
                'employee_id' => '1001',
                'amount' => 2000,
                'sale_date' => '2024-08-01',
                'memo' => '初回売上'
            ],
            [
                'employee_id' => '1002',
                'amount' => 1000,
                'sale_date' => '2024-08-02',
                'memo' => '紹介案件'
            ],
[
                'employee_id' => '1001',
                'amount' => 10000,
                'sale_date' => '2024-09-01',
                'memo' => '初回売上'
            ],
            [
                'employee_id' => '1002',
                'amount' => 10000,
                'sale_date' => '2024-09-02',
                'memo' => '紹介案件'
            ],
   [
                'employee_id' => '1001',
                'amount' => 5000,
                'sale_date' => '2024-10-10',
                'memo' => '初回売上'
            ],
            [
                'employee_id' => '1002',
                'amount' => 8000,
                'sale_date' => '2024-10-12',
                'memo' => '紹介案件'
            ],
[
                'employee_id' => '1001',
                'amount' => 10000,
                'sale_date' => '2024-11-03',
                'memo' => '初回売上'
            ],
            [
                'employee_id' => '1002',
                'amount' => 10000,
                'sale_date' => '2024-11-04',
                'memo' => '紹介案件'
            ],
   [
                'employee_id' => '1001',
                'amount' => 5000,
                'sale_date' => '2024-12-21',
                'memo' => '初回売上'
            ],
            [
                'employee_id' => '1002',
                'amount' => 8000,
                'sale_date' => '2024-12-22',
                'memo' => '紹介案件'
            ],
[
                'employee_id' => '1001',
                'amount' => 10000,
                'sale_date' => '2025-05-01',
                'memo' => '初回売上'
            ],
            [
                'employee_id' => '1002',
                'amount' => 10000,
                'sale_date' => '2025-05-02',
                'memo' => '紹介案件'
            ],
   [
                'employee_id' => '1001',
                'amount' => 5000,
                'sale_date' => '2025-06-03',
                'memo' => '初回売上'
            ],
            [
                'employee_id' => '1002',
                'amount' => 8000,
                'sale_date' => '2025-06-24',
                'memo' => '紹介案件'
            ],
[
                'employee_id' => '1001',
                'amount' => 10000,
                'sale_date' => '2025-07-26',
                'memo' => '初回売上'
            ],
            [
                'employee_id' => '1002',
                'amount' => 10000,
                'sale_date' => '2025-07-22',
                'memo' => '紹介案件'
            ],

   [
                'employee_id' => '1001',
                'amount' => 5000,
                'sale_date' => '2025-08-01',
                'memo' => '初回売上'
            ],
            [
                'employee_id' => '1002',
                'amount' => 8000,
                'sale_date' => '2025-08-02',
                'memo' => '紹介案件'
            ],
[
                'employee_id' => '1001',
                'amount' => 10000,
                'sale_date' => '2025-09-01',
                'memo' => '初回売上'
            ],
            [
                'employee_id' => '1002',
                'amount' => 10000,
                'sale_date' => '2025-09-02',
                'memo' => '紹介案件'
            ],

        ]);
    }
}
