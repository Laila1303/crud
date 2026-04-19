<?php

namespace App\Http\Controllers;

use App\Models\Crush;
use Illuminate\Http\Request;

class CrushController extends Controller
{
    public function index()
    {
        $crushes = Crush::orderBy('created_at', 'desc')->get();
        return view('crushes.index', compact('crushes'));
    }

    public function create()
    {
        return view('crushes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'reason' => 'required|string',
            'status' => 'required|in:Secret,Confessed,Rejected,Dating',
            'crush_level' => 'required|integer|min:1|max:10',
        ]);

        Crush::create($request->all());

        return redirect()->route('crushes.index')->with('success', 'Data gebetan berhasil ditambahkan!');
    }

    public function show(Crush $crush)
    {
        return view('crushes.show', compact('crush'));
    }

    public function edit(Crush $crush)
    {
        return view('crushes.edit', compact('crush'));
    }

    public function update(Request $request, Crush $crush)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'reason' => 'required|string',
            'status' => 'required|in:Secret,Confessed,Rejected,Dating',
            'crush_level' => 'required|integer|min:1|max:10',
        ]);

        $crush->update($request->all());

        return redirect()->route('crushes.index')->with('success', 'Data gebetan berhasil diperbarui!');
    }

    public function destroy(Crush $crush)
    {
        $crush->delete();

        return redirect()->route('crushes.index')->with('success', 'Data gebetan berhasil dihapus!');
    }
}
