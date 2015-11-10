<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportSeeder extends Seeder{

    function run(){

        DB::table('reports')->delete();
        $fake = Faker::create();
        foreach (range(1, 20) as $i)
        {
            DB::table('reports')->insert([
//                'id' => $fake->uuid,
                'phone_number' => $fake->phoneNumber,
                'message' => $fake->domainName,
                'category' => $fake->century,
                'mobile_network' => $fake->colorName,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }

    }

} 