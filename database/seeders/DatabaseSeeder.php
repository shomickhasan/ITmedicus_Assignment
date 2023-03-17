<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Companies;
use App\Models\Employees;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       //db seeder run
       $this->call([
        UserTableSeeder::class,
       ]);

       //companies factory dammy data genarator
       Companies::factory(17)->create();
       Employees::factory(25)->create();
    }
}
