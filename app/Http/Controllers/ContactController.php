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

         Contact::create($request->all());

         return redirect('/')->with('message', 'Thanks for contacting us! We will be in touch with you shortly.');
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
