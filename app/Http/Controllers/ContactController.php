<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.contact.index');
    }
    public function index_contact()
    {       //Logic untuk mengaktifkan warna di navbar
          session(['active_button' => 'contact']);

        $contact = Contact::find(1);
        return view('dashboard.contact.index', compact('contact'));
    }

    public function create_dashboard_contact()
    {
        return view('dashboard.contact.create');
    }

    public function store_dashboard_contact(Request $request)
    {
        $request->validate([
            'welcome_message' => 'required', 
            'github_link' => 'required',
            'whatsapp_link'=> 'required',
            'linkedin_link'=> 'required'
        ]);

        Contact::create([
            'welcome_message' => $request->welcome_message, 
            'github_link' => $request->github_link, 
            'whatsapp_link' => $request->whatsapp_link, 
            'linkedin_link' => $request->linkedin_link
        ]);

        return Redirect::route('index_dashboard_contact');
    }

    public function edit_dashboard_contact()
    {
        $contact = Contact::find(1);
        return view('dashboard.contact.edit', compact('contact'));
    }

    public function update_dashboard_contact(Request $request, Contact $contact)
    {
        $request->validate([
            'welcome_message' => 'required',
            'github_link' => 'required',
            'whatsapp_link' => 'required',
            'linkedin_link' => 'required'
        ]);

        $contact->update([
            'welcome_message' => $request->welcome_message, 
            'github_link' => $request->github_link, 
            'whatsapp_link' => $request->whatsapp_link,
            'linkedin_link' => $request->linkedin_link
        ]);

        return Redirect::route('index_dashboard_contact');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
