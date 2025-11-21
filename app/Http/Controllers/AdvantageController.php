<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advantage;

class AdvantageController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('advantages.create', [
            'pagetitle' => 'Create Advantage',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Advantage::create($validated);

        return redirect('/products')->with('success', 'Advantage created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $advantage = Advantage::findOrFail($id);
        return view('advantages.edit', [
            'advantage' => $advantage,
            'pagetitle' => 'Update Advantage',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $advantage = Advantage::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $advantage->update($validated);

        return redirect('/products')->with('success', 'Advantage updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $advantage = Advantage::findOrFail($id);
        $advantage->delete();

        return redirect('/products')->with('success', 'Advantage deleted successfully!');
    }
}