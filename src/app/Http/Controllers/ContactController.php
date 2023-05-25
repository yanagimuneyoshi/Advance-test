<?php

namespace App\Http\Controllers;


use App\Http\Requests\ContactRequest;
use App\Models\Contact;

$familyName;
$giveName;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function store(ContactRequest $request )
    {
        //$contact = $request->only(['full_name', 'gender', 'email', 'postcode', 'address', ////'building_name', 'opinion']);
        //$familyName = $_POST['family-name'];
        //$giveName = $_POST['given-name'];
        //$full_name = $familyName. $giveName;
        $contact = $request->only(['family-name','given-name', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
        //$contact=([$fullName, $_POST['gender']]);
        //print $fullName;
        //print $contact[0];
        //return view('confirm',  ['contact' => $contact]);
        Contact::create($contact);
        return view('thanks', ['contact' => $contact]);


    }


    public function confirm(ContactRequest $request)
    {

        $contact = $request->only(['family-name', 'given-name', 'gender','email', 'postcode', 'address', 'building_name', 'opinion']);

        Contact::create($contact);

        //return view('thanks', ['contact' => $contact]);
        return view('confirm',  ['contact' => $contact]);



    }


}

