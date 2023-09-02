<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Contact as ModelsContact;
use Carbon\Carbon;

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

        $lastname = $request->input('lastname');
        $firstname = $request->input('firstname');
        $fullname = $lastname . $firstname;

        $contact = $request->only([
            'gender',
            'email',
            'postcode',
            'address',
            'building_name',
            'opinion'
        ]);
        $contact['fullname'] = $fullname;

        Contact::create($contact);
        return view('thanks');
    }

    public function management(Request $request)
    {
        $contacts = Contact::paginate(10);
        return view('management', compact('contacts'));
    }

    public function destroy(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('management');
    }

    public function search(Request $request)
    {
        $searchParams = $request->all();
        $contacts = Contact::search($searchParams)
            ->when(!empty($searchParams['start_date'])&&!empty($searchParams['end_date']),function($query)use($searchParams){
                $query->whereBetween('created_at',[
                    Carbon::parse($searchParams['start_date'])->startOfDay(),
                    Carbon::parse($searchParams['end_date'])->endOfDay(),
                ]);
            })
            ->paginate(10);

        return view('management', compact('contacts', 'searchParams'));
    }
}
