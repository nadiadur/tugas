<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Guru;

class guruController extends Controller
{
    public function index() 
    {
        $gurus = guru::all();
        return view('guru.index', compact('gurus'));
    }
    public function create(){
        return view('guru.create');
    }
    public function store(Request $request){
        $validateData = $request->validate([
            'nama' => 'string|required',
            'alamat'=> 'string|required',
            'pengampu' => 'string|required',
            'telpon' => 'string|required|min:10|max:13'
        ]);

         $guru = Guru::create($validateData);

         if ($guru) {
         return to_route('guru.index')->with('success', 'berhasil Menambah Data');
        }else{
            return to_route('guru.index')->with('fail', 'Gagal Menambah Data');
        }
    } 
    public function edit(Guru $guru)
    {
       // $guru = Guru::all();
        return view('guru.edit', compact('guru'));
    }

    public function update(Request $request, Guru $guru)

    {

        $validateData = $request->validate([
            'nama' => 'string|required',
            'alamat'=> 'string|required',
            'pengampu' => 'string|required',
            'telpon' => 'string|required|min:10|max:13'
        ]);

        $updated = $guru->update($validateData);

        if ($updated) {
            return redirect()->route('guru.index')->with('success', 'Berhasil Mengupdate Data');
        } else {
            return redirect()->route('guru.index')->with('fail', 'Gagal Mengupdate Data');
        }
    }
    public function destroy(Guru $guru)
{
    $deleted = $guru->delete();

    if ($deleted) {
        return redirect()->route('guru.index')->with('success', 'Berhasil Menghapus Data Guru');
    } else {
        return redirect()->route('guru.index')->with('fail', 'Gagal Menghapus Data Guru');
    }
}
}

