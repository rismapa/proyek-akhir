<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Attribute dari class Student Controller
    private $code = "160613001";
    private $name = "Ana";
    private $course;
    private $task;
    private $quiz;
    private $mid_term;
    private $final;


    // Method dari Class StudentController

    // 1. Method untuk memanggil property
    public function myCourse($course, $task, $quiz, $mid_term, $final) {

        $this->course = $course;
        $code = $this->code;
        $name = $this->name;
        $this->task = $task;
        $this->quiz = $quiz;
        $this->mid_term = $mid_term;    
        $this->final = $final;
        $grade = $this->calculateGrade();

        return view ('student.my_view', compact('course', 'code', 'name', 'task', 'quiz', 'mid_term', 'final', 'grade'));
    }

    // 2. Method untuk menghitung grade
    public function calculateGrade() {

        $grade = ($this->task * 0.1) + ($this->quiz * 0.1) + ($this->mid_term * 0.3) + ($this->final * 0.5);
        return $grade;
    }
}

    // RISMA PUTRI ANGGRAENI - 200313007