<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
