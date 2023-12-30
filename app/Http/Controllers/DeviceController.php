<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Validator;

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
    function delete($id){
        $device = Device::find($id);
        $result= $device->delete();
        if($result){
            return["result"=>"Data has been deleted"];
        }
        else{
            return["result"=>"Failed"];
        }
        


    }
    function testData(Request $req){
        $rules=array(
            "device_code"=>"required|min:2|max:5"
        );
        $validator = Validator::make($req->all(), $rules);
        if($validator->fails()){
            return response()->json($validator->errors(), 401);
        }
        else{
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
       

    }
}
