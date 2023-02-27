<?php


namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact_us(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject'=>'required',
            'message' => 'required'
         ]);

         Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject'=>$request->subject,
            'message' => $request->message
         ]);

         return redirect('/')->with('message', 'Gracias tu mensaje se ha enviado correctamente. Nos podremos en contacto a la brevedad');
    }

    public function get_messages(){

        $contacts=Contact::orderBy('id','desc')->paginate(10);

        return view("get_messages",['contacts'=>$contacts]);
    }

    public function delete_message($id){
        Contact::destroy($id);
        // echo "deleted";

        return redirect('get_messages')->with('message', 'Message Deleted Successfully');
    }
}
