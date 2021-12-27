<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Center_design;

class Center_designTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Center_design::create([
            "id" => 1,
            "design_img_id"=>1
        ]);
        Center_design::create([
            "id" => 2,
            "design_img_id"=>2
        ]);
        Center_design::create([
            "id" => 3,
            "design_img_id"=>3
        ]);
        Center_design::create([
            "id" => 4,
            "design_img_id"=>4
        ]);
        Center_design::create([
            "id" => 5,
            "design_img_id"=>5
        ]);
        Center_design::create([
            "id" => 6,
            "design_img_id"=>6
        ]);
        Center_design::create([
            "id" => 7,
            "design_img_id"=>7
        ]);
    }
}
