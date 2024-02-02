<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
   public  function index() {
      $students = Student::paginate(10);
      return view('index', compact('students'));
   }

   public function filter() {
      $students = Student::where('score', '>', 60)
      ->where('teacher_id', '=', 3)
      ->get();
      return view('filter', compact('students'));
   }

   public function show($id){
      $students = Student::find($id);
      $activities =  $students->activities;
      return view('show', ['activities' => $activities, 'students' => $students]); 

      // $activities = Activity::find($id);
      // $students = $activities->students;
      // return view('example', ['activities' => $activities, 'students' => $students]); 
   }

   public function create() {
      return view('create');
   }

   public function store(Request $request) {
      $request->validate([
         'name' => 'required',
         'score' => 'required',
         'teacher_id' => 'required'
      ]);

      Student::create([
         'name' => $request->name,
         'score' => $request->score,
         'teacher_id' => $request->teacher_id
      ]);

      return Redirect::route('index');
   }

   public function update(Student $student, Request $request) {
      $request->validate([
         'name' => 'required',
         'score' => 'required',
         'teacher_id' => 'required'
      ]);

      $student->update([
         'name' => $request->name,
         'score' => $request->score,
         'teacher_id' => $request->teacher_id
      ]);
      return Redirect::route('index');
   }

   public function edit(Student $student) {
      return view('edit', compact('student'));
   }

   public function delete(Student $student) {
      $student->delete();
      return Redirect::route('index');
   }
}
