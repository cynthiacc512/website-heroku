<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DesignController extends Controller {
    public function index(){
        $path = DB::select('select * from designProject');
        return view('design.index',['path'=>$path]);
    }

}
?>