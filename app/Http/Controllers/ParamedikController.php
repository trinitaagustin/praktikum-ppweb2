<?php

namespace App\Http\Controllers;

use App\Models\Paramedik;
use Illuminate\Http\Request;

class ParamedikController extends Controller
{
    // Menampilkan daftar semua paramedik
    public function index()
    {
        $paramedik = Paramedik::all();
        return view('paramedik.index', compact('paramedik'));
    }

    // Menampilkan form tambah paramedik
    public function create()
    {
        return view('paramedik.create');
    }

    // Menyimpan data paramedik baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'kategori' => 'required',
            'telpon' => 'required',
            'alamat' => 'required',
            'unit_kerja_id' => 'required',
        ]);

        Paramedik::create($request->all());
        return redirect('/paramedik')->with('success', 'Data paramedik berhasil ditambahkan!');
    }

    // ✅ Menampilkan detail paramedik berdasarkan ID
    public function show($id)
    {
        $paramedik = Paramedik::findOrFail($id);
        return view('paramedik.show', compact('paramedik'));
    }

    // Menampilkan form edit paramedik berdasarkan ID
    public function edit($id)
    {
        $paramedik = Paramedik::findOrFail($id);
        return view('paramedik.edit', compact('paramedik'));
    }

    // Menyimpan perubahan data paramedik
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'kategori' => 'required',
            'telpon' => 'required',
            'alamat' => 'required',
            'unit_kerja_id' => 'required',
        ]);

        $paramedik = Paramedik::findOrFail($id);
        $paramedik->update($request->all());
        return redirect('/paramedik')->with('success', 'Data paramedik berhasil diubah!');
    }

    // Menghapus data paramedik berdasarkan ID
    public function destroy($id)
    {
        $paramedik = Paramedik::findOrFail($id);
        $paramedik->delete();
        return redirect('/paramedik')->with('success', 'Data paramedik berhasil dihapus!');
    }
}
