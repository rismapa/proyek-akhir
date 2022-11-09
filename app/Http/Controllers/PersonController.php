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

    public function create() {
        return view('person.create');
    }

    //untuk menerima inputan dari Form 
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:30',
            'email' => 'required|email'
        ]);
        $person = $request;
        return view('person.print', compact('person'));
    }
}
