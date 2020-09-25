<?php


namespace App\Http\Controllers;


use App\Mail\SendContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('sites.kontakt');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email:rfc,dns',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->first_name = $data['first_name'];
        $contact->last_name = $data['last_name'];
        $contact->email = $data['email'];
        $contact->message = $data['message'];
        $contact->save();

        //Send Mail
        Mail::raw('Name: '. $data['first_name'] . ' ' . $data['last_name'] . ' Email: ' . $data['email'] . ' Text: ' . $data['message'], function($message)
        {
            $message->from('pascal@lentz-it.de', 'Pascal');
            $message->to('pascal@lentz-it.de');
            $message->subject('Kontaktaufnahme - SC08 Elsdorf');
        });

        return redirect('kontakt')->with('status', 'Deine Anfrage wurde erfolgreich eingereicht! Wir kümmern ums schnellstmöglich um eine Antwort.');
    }

    public function update()
    {

    }
}
