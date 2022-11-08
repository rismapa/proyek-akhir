<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    //
    // private $name = 'Risma Putri Anggraeni';

    public function index(){
        return view('person.index');
    }

    public function show($name)
    {
        return 'Hello lagi ' . $name;
    }
}
