<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits=[
            [
                'camp_id'=>1,
                'name'=>'Pro Teachstack Kit',
                'created_at'=> date('Y-m-d H:i:s', time()),
                'updated_at'=> date('Y-m-d H:i:s', time())
            ],
            [
                'camp_id'=>1,
                'name'=>'iMac Pro 2021 & Display',
                'created_at'=> date('Y-m-d H:i:s', time()),
                'updated_at'=> date('Y-m-d H:i:s', time())
            ],
            [
                'camp_id'=>1,
                'name'=>'1-1 Mentoring Program',
                'created_at'=> date('Y-m-d H:i:s', time()),
                'updated_at'=> date('Y-m-d H:i:s', time())
            ],
            [
                'camp_id'=>1,
                'name'=>'Final Project Certificate',
                'created_at'=> date('Y-m-d H:i:s', time()),
                'updated_at'=> date('Y-m-d H:i:s', time())
            ],
            [
                'camp_id'=>1,
                'name'=>'Offline Course Videos',
                'created_at'=> date('Y-m-d H:i:s', time()),
                'updated_at'=> date('Y-m-d H:i:s', time())
            ],
            [
                'camp_id'=>1,
                'name'=>'Future Job',
                'created_at'=> date('Y-m-d H:i:s', time()),
                'updated_at'=> date('Y-m-d H:i:s', time())
            ],
            [
                'camp_id'=>1,
                'name'=>'Premium Design KIt',
                'created_at'=> date('Y-m-d H:i:s', time()),
                'updated_at'=> date('Y-m-d H:i:s', time())
            ],
            [
                'camp_id'=>1,
                'name'=>'Website Builder',
                'created_at'=> date('Y-m-d H:i:s', time()),
                'updated_at'=> date('Y-m-d H:i:s', time())
            ],
            [
                'camp_id'=>2,
                'name'=>'1-1 Mentoring Program',
                'created_at'=> date('Y-m-d H:i:s', time()),
                'updated_at'=> date('Y-m-d H:i:s', time())
            ],
            [
                'camp_id'=>2,
                'name'=>'Final Project Certificater',
                'created_at'=> date('Y-m-d H:i:s', time()),
                'updated_at'=> date('Y-m-d H:i:s', time())
            ],
            [
                'camp_id'=>2,
                'name'=>'Offline Course Videos',
                'created_at'=> date('Y-m-d H:i:s', time()),
                'updated_at'=> date('Y-m-d H:i:s', time())
            ],
        ];
        CampBenefit::insert($campBenefits);
    }
}
