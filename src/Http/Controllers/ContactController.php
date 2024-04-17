<?php

namespace Trick\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Trick\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact-us');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'query' => 'required'
        ]);
        // Contact::create(['name' => 'Test', 'query' => 'test con']);
        $contact = new Contact();
        $contact->name = $request->post('name');
        $contact->query = $request->post('query');
        $contact->save();
        return redirect(route('contact'))->with(['message' => 'Information has been stored successfully..']);
    }
}
