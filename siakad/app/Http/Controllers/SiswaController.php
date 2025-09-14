<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::all();
        $paginate = Siswa::orderBy("id_siswa","asc")->paginate(3);
        return view("index",["siswa" => $siswa, "paginate" => $paginate]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "Nis" => "required",
            "Nama" => "required",
            "Kelas" => "required",
            "Jurusan" => "required"
        ]);

        Siswa::create($request->all());
        return redirect()->route("siswa.index")->with("success","Berhasil menambahkan data siswa baru!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        return view("detail",compact("siswa"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        return view("edit",compact("siswa"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            "Nis" => "required",
            "Nama" => "required",
            "Kelas" => "required",
            "Jurusan" => "required"
        ]);

        $siswa->update($request->all());
        return redirect()->route("siswa.index")->with("success","Berhasil melakukan update data siswa!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route("siswa.index")->with("success","Berhasil menghapus data siswa!");
    }
}
