<?php

namespace App\Http\Controllers;
use App\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        // $students = Student::all();
        // $students = Student::where('gender', 'P')->orWhere('birth_place', 'Bandung')->get();
        // $students = Student::orderBy('name', 'desc')->get();
        // $students = Student::where('code', 'like', '%7%')->get();
        // $students = Student::where('birth_place', 'Jakarta')->Where('gender', 'W')->get();
        // $students = Student::where('code', 'like', '%2%')->Where('birth_place', 'Jakarta')
        //             ->orWhere('birth_place', 'like', '%u%')->Where('gender', 'W')          
        //             ->get();
        
        // $students = Student::latest()->limit(5)->get();
        // $students = Student::take(5)->get();

        $students = Student::whereMonth('birth_date', '03')->get();
        
        return view('student.index', 
            ['students' => $students]);
    }
}
// Risma Putri Anggraeni

    // public function index() {
    //     $students = Student::all();

    // //Memecah object students ke dalam student
    // foreach ($students as $student) {
    //     echo "<br />Nama : " . $student->name;
    //     echo "<br />NRP : " . $student->code;
    //     echo "<br />Kelas : " . $student->group;
    // }
    
    // }

    // // Attribute dari class Student Controller
    // private $code = "160613001";
    // private $name = "Ana";
    // private $course;
    // private $task;
    // private $quiz;
    // private $mid_term;
    // private $final;


    // // Method dari Class StudentController

    // // 1. Method untuk memanggil property
    // public function myCourse($course, $task, $quiz, $mid_term, $final) {

    //     $this->course = $course;
    //     $code = $this->code;
    //     $name = $this->name;
    //     $this->task = $task;
    //     $this->quiz = $quiz;
    //     $this->mid_term = $mid_term;    
    //     $this->final = $final;
    //     $grade = $this->calculateGrade();

    //     return view ('student.my_view', compact('course', 'code', 'name', 'task', 'quiz', 'mid_term', 'final', 'grade'));
    // }

    // // 2. Method untuk menghitung grade
    // public function calculateGrade() {

    //     $grade = ($this->task * 0.1) + ($this->quiz * 0.1) + ($this->mid_term * 0.3) + ($this->final * 0.5);
    //     return $grade;
    // }

    // RISMA PUTRI ANGGRAENI - 200313007