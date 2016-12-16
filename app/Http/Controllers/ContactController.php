<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Contact;

use App\Validators\ContactValidator;

use App\Http\Requests\ContactRequest;

use Auth;

use Response;

class ContactController extends Controller
{

  public function sendMessage(ContactRequest $request){
    $data = [];
    $contact = new Contact();
    $contact->name = $request->get('name');
    $contact->email = $request->get('email');
    $contact->phone = $request->get('phone');
    $contact->subject = $request->get('subject');
    $contact->message = $request->get('message');
    if(Auth::user()){
      $contact->user_id = Auth::user()->id;
    }

      $contact->save();
      return redirect()->back()->with(['success'=>'Message send successfully.']);
  }

  public function viewcontacts(){
    return view('admin.pages.contact.viewcontacts')->with(['contacts'=>Contact::all()]);
  }

  public function viewcontact($id){
    $contact = Contact::findOrFail($id);
    return Response::json(['contact'=>[
        'name'=>$contact->name,
        'email'=>$contact->email,
        'phone'=>$contact->phone,
        'subject'=>$contact->subject,
        'message'=>$contact->message
      ]]);
  }

  public function delete($id){
    $contact = Contact::findOrFail($id);
    $contact->delete();
    return redirect()->back()->with(['success'=>'One contact deleted.']);
  }


}
