<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Mahasiswa = Mahasiswa::all();
        $paginate = Mahasiswa::orderBy('id_mahasiswa','asc')->paginate(3);

        return view('Mahasiswa.index',['Mahasiswa' => $Mahasiswa, 'paginate' => $paginate]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required'
        ]);

        Mahasiswa::create($request->all());
        return redirect()->router('Mahasiswa.index')->with('success','Data Mahasigma baru berhasil di tamabahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('Mahasiswa.show',compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('Mahasiswa.edit',compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required'
        ]);

        Mahasiswa::update($request->all());
        return redirect()->router('Mahasiswa.index')->with('success','Data Mahasigma baru berhasil di perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->router('Mahasiswa.index')->with('success','Data Mahasigma baru berhasil di hapus');
    }
}
