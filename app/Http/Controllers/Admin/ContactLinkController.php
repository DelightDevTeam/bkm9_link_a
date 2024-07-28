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

        return redirect(route('admin.linkss.index'))->with('success', 'New Link Created Successfully.');
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
        $text_update = ContactLink::findOrFail($id);

        // Pass the retrieved data to the 'admin.contact.edit' view
        return view('admin.contact.edit', compact('text_update'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Validate the request data
    $request->validate([
        'viber' => 'required|string|max:255',
        'game_site_link' => 'required|string|max:255',
        'facebook_page' => 'required|string|max:255',
        'line' => 'required|string|max:255',
        'telegram' => 'required|string|max:255',
        'messager' => 'required|string|max:255',
    ]);

    // Find the specific contact link by id
    $contactLink = ContactLink::findOrFail($id);

    // Update the contact link with the validated data
    $contactLink->update([
        'viber' => $request->viber,
        'game_site_link' => $request->game_site_link,
        'facebook_page' => $request->facebook_page,
        'line' => $request->line,
        'telegram' => $request->telegram,
        'messager' => $request->messager,
    ]);

    // Redirect back to the contact links index with a success message
    return redirect(route('admin.linkss.index'))->with('success', 'Contact Link Updated Successfully.');
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
