<?php

namespace App\Http\Controllers;


use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


$familyName;
$giveName;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }




    public function store(ContactRequest $request)
    {
        $familyName = $request->input('family-name');
        $givenName = $request->input('given-name');
        $fullName = $familyName . $givenName;

        $contact = [
            'fullname' => $fullName,
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
        // //$validation_array = [

        //     'family-name' => 'required | string',
        //     'given-name' => 'required | string',
        //     'gender' => 'required | string',
        //     'email' => 'required | email',
        //     'postcode'=> 'required | string',
        //     'address' => 'required | string',
        //     'building_name'=> 'required | string',
        //     'opinion' => 'required | string',
        // ];

        // //$validator = Validator::make($request->all(), $validation_array);

        // if ($validator->fails()) {
        //     return redirect('/')
        //         ->withErrors($validator)
        //         ->withInput();
        // };
        if ($request->input('back') == 'back') {
            return redirect('/')
            ->withInput();
        }
        $request->session()->flashInput($request->all());
        $contact = $request->only(['family-name', 'given-name', 'gender','email', 'postcode', 'address', 'building_name', 'opinion']);



        return view('confirm',  ['contact' => $contact]);



    }


}

