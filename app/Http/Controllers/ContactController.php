<?php  

namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use App\Http\Requests\ContactRequest;
use App\Models\Contact; 
use Mail; 

class ContactController extends Controller { 

      public function contact() { 

       return view('contact'); 
     } 

      public function save(ContactRequest $request) { 

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();
        
        return back()->with('success', 'Thank you for contacting us!');

    }
}