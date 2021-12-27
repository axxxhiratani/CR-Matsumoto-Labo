<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Winning;


class WinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Winning::create([
            "left_design_id" => 1,
            "right_design_id" => 1,
            "center_design_id" => 1,
            "round" => 4,
            "cutin_id" => 2,
            "directing_id" => 5,
        ]);
        Winning::create([
            "left_design_id" => 2,
            "right_design_id" => 2,
            "center_design_id" => 2,
            "round" => 4,
            "cutin_id" => 1,
            "directing_id" => 5,
        ]);
        Winning::create([
            "left_design_id" => 3,
            "right_design_id" => 3,
            "center_design_id" => 3,
            "round" => 4,
            "cutin_id" => 2,
            "directing_id" => 5,
        ]);
        Winning::create([
            "left_design_id" => 4,
            "right_design_id" => 4,
            "center_design_id" => 4,
            "round" => 4,
            "cutin_id" => 1,
            "directing_id" => 5,
        ]);
        Winning::create([
            "left_design_id" => 5,
            "right_design_id" => 5,
            "center_design_id" => 5,
            "round" => 4,
            "cutin_id" => 2,
            "directing_id" => 5,
        ]);
        Winning::create([
            "left_design_id" => 6,
            "right_design_id" => 6,
            "center_design_id" => 6,
            "round" => 4,
            "cutin_id" => 1,
            "directing_id" => 5,
        ]);
        Winning::create([
            "left_design_id" => 7,
            "right_design_id" => 7,
            "center_design_id" => 7,
            "round" => 10,
            "cutin_id" => 2,
            "directing_id" => 5,
        ]);

    }
}
