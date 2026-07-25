<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    Role::insert([
        ['name' => 'Super Admin'],
        ['name' => 'Admin'],
        ['name' => 'Principal'],
        ['name' => 'HOD'],
        ['name' => 'Faculty'],
        ['name' => 'Student'],
        ['name' => 'Librarian'],
        ['name' => 'Accountant'],
        ['name' => 'Parent'],
    ]);
}
}
