<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageContent;

class PageContentController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pageContents.create', [
            'pagetitle' => 'Create Page Content',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        PageContent::create($validated);

        return redirect('/products')->with('success', 'Page content created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pagecontent = PageContent::findOrFail($id);
        return view('pageContents.edit', [
            'pagecontent' => $pagecontent,
            'pagetitle' => 'Update Page Content',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pagecontent = PageContent::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $pagecontent->update($validated);

        return redirect('/products')->with('success', 'Page content updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pagecontent = PageContent::findOrFail($id);
        $pagecontent->delete();

        return redirect('/products')->with('success', 'Page content deleted successfully!');
    }
}