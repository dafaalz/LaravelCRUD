<?php

namespace App\Http\Controllers;
use App\Models\Lagu;
use Illuminate\Http\Request;

class LaguController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lagus = Lagu::all();
        return view('lagu-test', compact('lagus'));
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
            'judul' => 'required',
            'filename' => 'required', 
            'artis' => 'required'
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
        return response()->json(['message' => 'Deleted']);
    }
}
