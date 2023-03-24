<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::updateOrCreate(['id' => 1], [
            "name" => "Admin",
            "email" => "admin@gmail.com",
            "password" => \Hash::make('123456'),
        ]);
        $this->command->info('Admin table seeded!');
    }
}
