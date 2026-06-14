<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      
        // 社員データ（EmployeesSeeder）
        $this->call([
            EmployeesSeeder::class,
            SalesSeeder::class, // ← 売上Seederも後で追加するならここ
        ]);
    }
}
