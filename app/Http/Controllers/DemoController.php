<?php

namespace App\Http\Controllers;

use App\Models\Demo;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        // Create a new contact instance
        $contact = new Demo();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->save();

        // Optionally, you can return a response or redirect the user
        return redirect()->back()->with('success', 'Contact saved successfully!');
    }
    public function index()
    {
        $contacts = Demo::all();
        return view('demo', compact('contacts'));
    }
}
