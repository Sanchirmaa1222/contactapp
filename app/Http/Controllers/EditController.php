<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    public function edit(){
        return view('contacts.edit');
    }
}