<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //All Data Index
    public function index(){
        $contacts=Contact::all();
        return view('contacts.index', compact('contacts'));
    }
    // Data Create Form
    public function create(){
        return view('contacts.create');
    }

    // Data Store
    public function store(Request $request){
        Contact::create($request->all());
        return redirect()->route('contacts.index')->with('success','Contact added Successfully!');
    }

    // edit Data
    public function edit($id){
        $contact= Contact::findOrFail($id);
        return view('contacts.edit',compact('contact'));
    }
    // Update Data
    public function update(Request $request, $id){
        $contact=Contact::findOrFail($id);
        $contact->update($request->all());
        return redirect()->route('contacts.index')->with('success','Updated Successfully');
    }
    // Delete Data
    public function destroy($id){
        Contact::destroy($id);
        return redirect()->route('contacts.index')->with('success','Data Deleted Done!');

    }
}
