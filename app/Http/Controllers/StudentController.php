<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
   public function show($id){
        $name = Student::find($id)->name;
        return view('example', ['name' => $name]);
   }

}
