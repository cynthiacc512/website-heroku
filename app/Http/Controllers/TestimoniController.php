<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestimoniController extends Controller {
    public function index(){
        $testimonial = DB::select('select * from testimoni');
        return view('home.index',['testimonial'=>$testimonial]);
    }

}
?>