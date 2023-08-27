<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Contact as ModelsContact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only([
            'lastname',
            'firstname',
            'gender',
            'email',
            'postcode',
            'address',
            'building_name',
            'opinion'
        ]);
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        if ($request->input('back')) {
            return redirect('/')->withInput();
        }

        $contact = $request->only([
            'fullname',
            'gender',
            'email',
            'postcode',
            'address',
            'building_name',
            'opinion'
        ]);
        Contact::create($contact);
        return view('thanks');
    }
}
