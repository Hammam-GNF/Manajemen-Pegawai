<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pegawai.index', compact('pegawai'));
    }

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        $rules = Pegawai::rules();
        $validated = $request->validate($rules['rules'], $rules['messages']);

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('photos', 'public');
            $validated['foto'] = $path;
        }

        Pegawai::create($validated);

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $rules = Pegawai::rules($pegawai->id);

        $validated = $request->validate($rules['rules'], $rules['messages']);

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('photos', 'public');
            $validated['foto'] = $path;
        }

        $pegawai->update($validated);

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diperbarui');
    }

    public function upload(Request $request)
    {
        $rules = Pegawai::uploadRules();
        $request->validate($rules['rules'], $rules['messages']);
        
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('uploads', 'public');
            return response()->json(['success' => true, 'path' => $path]);
        }

        return response()->json(['success' => false], 400);
    }

    public function apiIndex()
    {
        return response()->json(Pegawai::all());
    }

}
