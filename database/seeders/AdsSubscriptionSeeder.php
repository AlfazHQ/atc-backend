<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdsSubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $timestamp = Carbon::now()->toDateTimeString();
        $ads_subscriptions = [
            [
                'user_id'=>5,
                'ads_id'=> 1,
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'user_id'=>5,
                'ads_id'=> 2,
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'user_id'=>5,
                'ads_id'=> 3,
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'user_id'=>5,
                'ads_id'=> 4,
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'user_id'=>5,
                'ads_id'=> 5,
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'user_id'=>5,
                'ads_id'=> 6,
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'user_id'=>5,
                'ads_id'=> 7,
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ]
        ];


        DB::table('ads_subscriptions')->insert($ads_subscriptions);
    }
}
