<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\ContactLink;
use App\Http\Controllers\Controller;

class ContactLinkController extends Controller
{
    public function index()
    {
        $texts = ContactLink::latest()->get();

        return view('admin.contact.index', compact('texts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'text' => 'required',
        // ]);
        ContactLink::create([
            'viber' => $request->viber,
            'game_site_link' => $request->game_site_link,
            'facebook_page' => $request->facebook_page,
            'line' => $request->line,
            'telegram' => $request->telegram,
            'messager' => $request->messager,
        ]);

        return redirect(route('admin.contact-links.index'))->with('success', 'New Link Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $text = ContactLink::findOrFail($id);
        
        return view('admin.contact.show', compact('text'));
    }

    /**
     * Show the form for editing the specified resource.
     */
     public function edit($id)
    {
        // Retrieve the ContactLink model by its ID or fail if not found
        $text = ContactLink::findOrFail($id);

        // Pass the retrieved data to the 'admin.contact.edit' view
        return view('admin.contact.edit', compact('text'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactLink $text)
    {
        // $request->validate([
        //     'text' => 'required',
        // ]);
        $text->update([
            'viber' => $request->viber,
            'game_site_link' => $request->game_site_link,
            'facebook_page' => $request->facebook_page,
            'line' => $request->line,
            'telegram' => $request->telegram,
            'messager' => $request->messager,
        ]);

        return redirect(route('admin.contact-links.index'))->with('success', 'Contact Link Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactLink $text)
    {
        $text->delete();

        return redirect()->back()->with('success', 'Contact Link Deleted Successfully.');
    }
}
