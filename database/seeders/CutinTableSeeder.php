<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cutin;

class CutinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Cutin::create([
            "id" => 1,
            "body"=>"　"
        ]);

        Cutin::create([
            "id" => 2,
            "body"=>"チャンス!!"
        ]);

    }
}
