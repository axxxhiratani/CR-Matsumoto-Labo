<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Directing;

class DirectingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Directing::create([
            "id" => 1,
            'movie'=>"https://cr-matsumotolab.s3.ap-northeast-1.amazonaws.com/video/1.MOV",
            'time'=>45
        ]);
        Directing::create([
            "id" => 2,
            'movie'=>"https://cr-matsumotolab.s3.ap-northeast-1.amazonaws.com/video/2.MOV",
            'time'=>100
        ]);
        Directing::create([
            "id" => 3,
            'movie'=>"https://cr-matsumotolab.s3.ap-northeast-1.amazonaws.com/video/3.MOV",
            'time'=>150
        ]);
        Directing::create([
            "id" => 4,
            'movie'=>"https://cr-matsumotolab.s3.ap-northeast-1.amazonaws.com/video/4.MOV",
            'time'=>138
        ]);
        Directing::create([
            "id" => 5,
            'movie'=>"https://cr-matsumotolab.s3.ap-northeast-1.amazonaws.com/video/5.MOV",
            'time'=>165
        ]);
        Directing::create([
            "id" => 6,
            'movie'=>"https://cr-matsumotolab.s3.ap-northeast-1.amazonaws.com/video/6.MOV",
            'time'=>145
        ]);

    }
}
