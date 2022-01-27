<?php

namespace Database\Seeders;

use App\Models\Camp;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camp = [
            [
                'title'=> 'Gila Belajar',
                'slug'=> Str::slug('Gila Belajar'),
                'price'=> 280,
                'created_at'=> date('Y-m-d H:i:s', time()),
                'updated_at'=> date('Y-m-d H:i:s', time())
            ],
            [
                'title'=> 'Baru Mulai',
                'slug'=> Str::slug('Baru Mulai'),
                'price'=> 140,
                'created_at'=> date('Y-m-d H:i:s', time()),
                'updated_at'=> date('Y-m-d H:i:s', time())
            ],
        ];
        Camp::insert($camp);
    }
}
