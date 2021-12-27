<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Design_img;

class Design_imgTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Design_img::create([
            "id" => 1,
            "img" => "https://cr-matsumotolab.s3.ap-northeast-1.amazonaws.com/img/1.png"
        ]);
        Design_img::create([
            "id" => 2,
            "img" => "https://cr-matsumotolab.s3.ap-northeast-1.amazonaws.com/img/2.png"
        ]);
        Design_img::create([
            "id" => 3,
            "img" => "https://cr-matsumotolab.s3.ap-northeast-1.amazonaws.com/img/3.png"
        ]);
        Design_img::create([
            "id" => 4,
            "img" => "https://cr-matsumotolab.s3.ap-northeast-1.amazonaws.com/img/4.png"
        ]);
        Design_img::create([
            "id" => 5,
            "img" => "https://cr-matsumotolab.s3.ap-northeast-1.amazonaws.com/img/5.png"
        ]);
        Design_img::create([
            "id" => 6,
            "img" => "https://cr-matsumotolab.s3.ap-northeast-1.amazonaws.com/img/6.png"
        ]);
        Design_img::create([
            "id" => 7,
            "img" => "https://cr-matsumotolab.s3.ap-northeast-1.amazonaws.com/img/7.png"
        ]);



    }
}
