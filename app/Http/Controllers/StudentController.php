<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;

class StudentController extends Controller
{
   public function show($id){
      // $students = Student::find($id);
      // $activities =  $students->activities;
      // return view('example', ['activities' => $activities, 'students' => $students]); 

      $activities = Activity::find($id);
      $students = $activities->students;
      return view('example', ['activities' => $activities, 'students' => $students]); 
   }

}
