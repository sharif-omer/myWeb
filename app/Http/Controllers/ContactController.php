<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index()
    {
        $contact = Contact::all();
        return view('backend.index', compact('contact'));
    }// End Method

  
    public function create()
    {
        $contact = Contact::create();
        return view('welcome', compact('contact'));
    }// End Method

    public function store(Request $request)
    {
    // Validate the contact form data
      $request->validate([
        'name' => 'required',
        'email' => 'required',
        'number' => 'required',
        'subject' => 'required',
        'message' => 'required',
      ]);

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->number = $request->number;
        $contact->subject = $request->subject;
        $contact->message  = $request->message ;
        $contact->save();

        // $notification = array (
        //     'message' => 'Your Messge Sent Sucessfully',
        //     'alert-type' => 'success'
        // );
        return redirect()->back();          
    }// End Method

    public function destroy($id)
    {
     $contact = Contact::findOrFail($id);

    Contact::findOrFail($id)->delete();

     $notification = array (
      'message' => 'Messge Of User Deleted Sucessfully',
      'alert-type' => 'success'
  );
  return redirect()->back()->with($notification);

  }// End Method
}
