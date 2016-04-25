<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class HomeController extends Controller
{
    public function index() {
        
        $cursosTodos = DB::select("select *from course_name where course_id is not null and trim(course_id)!=''");
        
        return view('home',['cursos'=>$cursosTodos]);
    }
}
