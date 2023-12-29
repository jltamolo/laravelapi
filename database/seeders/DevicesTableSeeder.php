<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Device;

class DevicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Device::truncate();
        Device::create(['device_name' =>'Samsung', 'device_description'=>'A30', 'device_code'=>'A22345']);
        Device::create(['device_name' =>'Iphpne', 'device_description'=>'I13', 'device_code'=>'A2982345']);
        Device::create(['device_name' =>'Huawei', 'device_description'=>'ART', 'device_code'=>'Y22345']);   


    }   
}
