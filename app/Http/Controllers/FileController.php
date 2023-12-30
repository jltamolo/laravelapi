<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Device;
class FileController extends Controller
{
    function upload(Request $req){
        $result=$req->file('file')->store('apiDocs');
        return ["result"=>$result];
    }
}
