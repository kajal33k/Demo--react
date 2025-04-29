<?php

namespace App\Http\Controllers;

use App\Models\Cause;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
 

class CauseController extends Controller
{
    
    public function index()
    {
        $causes = Cause::where('is_active', true)->get();
        return view('causes.index', compact('causes'));
    }

    public function show(Cause $cause)
    {
        return view('causes.show', compact('cause'));
    }

    public function create()
    {
        return view('causes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'goal_amount' => 'required|numeric|min:1',
            'image' => 'nullable|image|max:2048',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('causes', 'public');
        }

        Cause::create($validated);

        return redirect()->route('causes.index')->with('success', 'Cause created successfully.');
    }
}

