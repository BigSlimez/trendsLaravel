<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ticket;

class ticketController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'voornaam'=> 'required|min:2',
            'naam'=> 'required|min:2',
            'geboortedatum'=> 'required',

        ]);

        $ticket = new Ticket();
        $ticket->voornaam = $validated['voornaam'];
        $ticket->naam = $validated['naam'];
        $ticket->geboortedatum = $validated['geboortedatum'];
        $ticket->prijs = 0;
        $ticket->email = 'test@lol.com';
        $ticket->save();

        return redirect()->route('index');

    }
}
