<?php

namespace App\Http\Controllers;


use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;

$familyName;
$giveName;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    //public function index()
   /// {
   //     $category= Todo::with('category')->get();
    //    $categories = Category::all();
   // }







    public function store(ContactRequest $request)
    {
        $familyname = $request->input('family-name');
        $givenname = $request->input('given-name');
        $fullname = $familyname . ' ' . $givenname;

        $contact = [
            'fullname' => $fullname,
            'gender' => $request->input('gender'),
            'email' => $request->input('email'),
            'postcode' => $request->input('postcode'),
            'address' => $request->input('address'),
            'building_name' => $request->input('building_name'),
            'opinion' => $request->input('opinion'),
        ];

        Contact::create($contact);

        return view('thanks', ['contact' => $contact]);
    }







    public function confirm(ContactRequest $request)
    {

        $contact = $request->only(['family-name', 'given-name', 'gender','email', 'postcode', 'address', 'building_name', 'opinion']);



        return view('confirm',  ['contact' => $contact]);



    }


}

