<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lagu;

class LaguController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Lagu::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:150',
            'filename' => 'required|string|max:255',
            'artis' => 'required|string|max:100',
            'album' => 'nullable|string|max:100',
            'cover_album' => 'nullable|string|max:255',
        ]);

        return Lagu::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Lagu::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lagu = Lagu::findOrFail($id);
        $lagu->update($request->all());
        return $lagu;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Lagu::destroy($id);
        return response()->json(['message' => 'Deleted successfully']);
    }
}
