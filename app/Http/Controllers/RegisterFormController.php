<?php


namespace App\Http\Controllers;

use App\Models\RegisterForm;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class RegisterFormController extends Controller
{
    public function index() {
        return view('sites.anmeldung');
    }

    public function show() {

    }

    public function store(Request $request) {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email:rfc,dns',
            'telephone' => 'nullable',
            'address' => 'nullable',
            'zip_code' => 'nullable',
            'city' => 'nullable',
            'association' => 'nullable',
            'comment' => 'required',
        ]);

        $register_form = new RegisterForm();
        $register_form->first_name = $data['first_name'];
        $register_form->last_name = $data['last_name'];
        $register_form->email = $data['email'];
        $register_form->telephone = $data['telephone'];
        $register_form->address = $data['address'];
        $register_form->zip_code = $data['zip_code'];
        $register_form->city = $data['city'];
        $register_form->association = $data['association'];
        $register_form->comment = $data['comment'];
        $register_form->save();

        //Send Mail
        /*
        Mail::raw(
            'Name: '. $data['first_name'] . ' ' . $data['last_name'] .
                ' Email: ' . $data['email'] . ' Text: ' . $data['comment'], function($message)
        {
            $message->from('pascal@lentz-it.de', 'Pascal');
            $message->to('pascal@lentz-it.de');
            $message->subject('Anmeldung - SC08 Elsdorf');
        });
        */
        $html = '<b>Name: </b>' . $data['first_name'] . ' ' . $data['last_name'] . '<br>' . '<b>Email: </b>' . $data['email'] . '<br>' . '<b>Telefonnummer: </b>' . $data['telephone'];
        Mail::send([], [], function (\Illuminate\Mail\Message $message) use ($html) {
            $message->to('pascal@lentz-it.de')
                ->subject('Anmeldung - SC08 Elsdorf')
                ->from('pascal@lentz-it.de')
                ->setBody($html, 'text/html');
        });

        return redirect('anmeldung')->with('status', 'Deine Anfrage wurde erfolgreich eingereicht! Wir kümmern ums schnellstmöglich um eine Antwort.');
    }

    public function update() {

    }
}
