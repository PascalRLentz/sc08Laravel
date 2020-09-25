<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function index()
    {
        return view('sites.fotos');
    }

    public function store(Request $request)
    {
        return redirect('foto')->with('status', 'Deine Anfrage wurde erfolgreich eingereicht! Wir kümmern ums schnellstmöglich um eine Antwort.');
    }

    public function update()
    {

    }
}
