<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    // Store contact form submission (frontend)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'subject' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        ContactForm::create([
            'name' => $validated['username'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'subject' => $validated['subject'] ?? null,
            'message' => $validated['message'] ?? null,
        ]);

        return redirect()->back()->with('success', 'Your message has been sent!');
    }

    // Admin: List all contact form submissions
    public function index()
    {
        $contacts = ContactForm::latest()->paginate(20);
        return view('admin.contact_forms.index', compact('contacts'));
    }

    // Admin: View a single contact form submission
    public function show($id)
    {
        $contact = ContactForm::findOrFail($id);
        return view('admin.contact_forms.show', compact('contact'));
    }

    // Admin: Delete a contact form submission
    public function destroy($id)
    {
        $contact = ContactForm::findOrFail($id);
        $contact->delete();
        return redirect()->route('admin.contact-forms.index')->with('success', 'Contact form deleted successfully.');
    }
}
