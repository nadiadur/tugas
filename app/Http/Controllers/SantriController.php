<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;

class SantriController extends Controller
{
    public function index()
    {
        $santris = Santri::all();
        return view('santri.index', compact('santris'));
    }

    public function create()
    {
        return view('santri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal_masuk' => 'required|date',
            'alamat' => 'required',
        ]);

        Santri::create($request->all());

        return redirect()->route('santri.index')
                         ->with('success', 'Santri created successfully.');
    }

    public function edit(Santri $santri)
    {
        return view('santri.edit', compact('santri'));
    }

    public function update(Request $request, Santri $santri)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal_masuk' => 'required|date',
            'alamat' => 'required',
        ]);

        $santri->update($request->all());

        return redirect()->route('santri.index')
                         ->with('success', 'Santri updated successfully');
    }

    public function destroy(Santri $santri)
    {
        $santri->delete();

        return redirect()->route('santri.index')
                         ->with('success', 'Santri deleted successfully');
    }
}
