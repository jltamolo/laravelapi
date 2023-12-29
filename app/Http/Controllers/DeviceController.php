<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    function list($id=null){
        return $id?Device::find($id):Device::all();

    }
    function add(Request $req){
        $device = new Device;
        $device->device_name=$req->device_name;
        $device->device_description=$req->device_description;
        $device->device_code=$req->device_code;
        $result=$device->save();
        if($result){
            return["result"=>"Data has been posted successfully"];
        }
        else{
            return["result"=>"Failed"];
        }
       

    }
    function update(Request $req){
        $device = Device::find($req->id);
        $device->device_name=$req->device_name;
        $device->device_description=$req->device_description;
        $device->device_code=$req->device_code;
        $result=$device->save();
        if($result){
            return["result"=>"Data has been updated"];
        }
        else{
            return["result"=>"Failed"];
        }
        
}
    function search($device_name){
        return Device::where("device_name", $device_name)->get();
       /* For finding characters: return Device::where("device_name", "like", "%" .$device_name. "%")->get();*/

    }
}
