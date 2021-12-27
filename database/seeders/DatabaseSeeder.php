<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lost;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(DirectingTableSeeder::class);
        $this->call(CutinTableSeeder::class);
        $this->call(Design_imgTableSeeder::class);
        $this->call(Right_designTableSeeder::class);
        $this->call(Left_designTableSeeder::class);
        $this->call(Center_designTableSeeder::class);
        $this->call(LostTableSeeder::class);
        $this->call(WinTableSeeder::class);
    }
}
