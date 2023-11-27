<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        return view('my_notes');
    }

    public function create() 
    {
        return view('create_note');
    }

    public function store() {

    }

    public function edit() {
        return view('edit_note');
    }
}

