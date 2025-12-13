<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('main.contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('main.contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // 1. Opslaan in database
        $contact = Contact::create($validated);

        // 2. Mail versturen
        Mail::send('emails.contact-admin', $validated, function ($mail) use ($validated) {
            $mail->to('info@nielsdegast.nl')
                 ->subject('Nieuw contactbericht: ' . $validated['subject'])
                 ->replyTo($validated['email']);
        });

        // 3️⃣ Bevestigingsmail naar GEBRUIKER
        Mail::send('emails.contact-user', $validated, function ($mail) use ($validated) {
            $mail->to($validated['email'])
                 ->subject('We hebben je bericht ontvangen');
        });


        return back()->with('success', 'Je bericht is succesvol verzonden!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
