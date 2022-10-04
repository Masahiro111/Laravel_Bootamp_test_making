<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
    {
        return view('chirps.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => ['required', 'string', 'max:255'],
        ]);

        // $request->user()->chirps()->create($validated);

        Chirp::query()
            ->create([
                'user_id' => auth()->id()
            ] + $validated);

        return redirect()->route('chirps.index');
    }

    public function show(Chirp $chirp)
    {
        //
    }

    public function edit(Chirp $chirp)
    {
        //
    }

    public function update(Request $request, Chirp $chirp)
    {
        //
    }

    public function destroy(Chirp $chirp)
    {
        //
    }
}
