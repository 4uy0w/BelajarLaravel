<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShrineComics;

class ShrineComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comic = ShrineComics::all();
        $paginate = ShrineComics::orderBy("comic_id","asc")->paginate(3);
        return view("ShrineComics.index",["comic" => $comic, "paginate" => $paginate]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("ShrineComics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
                "comic_title" => "required",
                "comic_page" => "required",
                "comic_price" => "required",
                "comic_writer" => "required",
                "genre" => "required",
                "comic_release_date" => "required",
                "comic_comment" => "required"
        ]);

        ShrineComics::create($request->all());
        return redirect()->route("ShrineComics.index")->with("success","Berhasil menambahkan komik baru!");
    }

    /**
     * Display the specified resource.
     */
    public function show(ShrineComics $ShrineComic)
    {
        return view("ShrineComics.detail",compact("ShrineComic"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShrineComics $ShrineComic)
    {
        return view("ShrineComics.edit",compact("ShrineComic"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ShrineComics $ShrineComic)
    {
        $request->validate([
                "comic_title" => "required",
                "comic_page" => "required",
                "comic_price" => "required",
                "comic_writer" => "required",
                "genre" => "required",
                "comic_release_date" => "required",
                "comic_comment" => "required"
        ]);

        $ShrineComic->update($request->all());
        return redirect()->route("ShrineComics.index")->with("success","Berhasil update komik!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShrineComics $ShrineComic)
    {
        $ShrineComic->delete();
        return redirect()->route("ShrineComics.index")->with("success","Berhasil hapus komik!");
    }
}
