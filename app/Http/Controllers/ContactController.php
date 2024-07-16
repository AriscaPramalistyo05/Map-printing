<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index', [
        'contacts' => Contact::all(),
    ]);
    }
    public function create()
    {
        return view('index');
    }
    public function data()
    {
        return view('data', [
            'contacts' => Contact::all(),
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'required|string',
        ]);

        Contact::create($validatedData);
        return redirect()->route('index')->with('success', 'Pesan Anda telah dikirim!');
    }
}