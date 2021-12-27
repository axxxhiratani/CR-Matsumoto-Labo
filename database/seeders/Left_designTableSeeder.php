<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Left_design;

class Left_designTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Left_design::create([
            "id" => 1,
            "design_img_id"=>1
        ]);
        Left_design::create([
            "id" => 2,
            "design_img_id"=>2
        ]);
        Left_design::create([
            "id" => 3,
            "design_img_id"=>3
        ]);
        Left_design::create([
            "id" => 4,
            "design_img_id"=>4
        ]);
        Left_design::create([
            "id" => 5,
            "design_img_id"=>5
        ]);
        Left_design::create([
            "id" => 6,
            "design_img_id"=>6
        ]);
        Left_design::create([
            "id" => 7,
            "design_img_id"=>7
        ]);

    }
}
