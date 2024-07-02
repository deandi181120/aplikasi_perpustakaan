<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BukuController extends Controller
{
    public function index()
    {
        $datas = Buku::get();
        $title = "Buku";
        return view("buku.index", compact("title", "datas"));
    }
    public function create()
    {
        $levels = Level::get();
        $title = "Tambah Buku";
        return view("buku.create", compact("title", "levels"));
    }
    public function edit(string $id)
    {
        $edit = Buku::find($id);
        $title = "Edit Buku";
        return view("buku.edit", compact("title", "edit"));
    }
    public function store(request  $request)
    {
        Buku::create([
            "nama_buku"=> $request->nama_buku,
            "penerbit"=> $request->penerbit,
            "qty"=> $request->qty,
            "deskripsi"=> $request->deskripsi,
            "penulis"=> $request->penulis,
            "gendre"=> $request->gendre
        ]);
        return redirect()->to("buku")->with('message', 'Data berhasil ditambah');
    }
    public function update(request  $request, string $id)
    {

        Buku::where("id", $id)->update([
            "nama_buku"=> $request->nama_buku,
            "penerbit"=> $request->penerbit,
            "qty"=> $request->qty,
            "deskripsi"=> $request->deskripsi,
            "penulis"=> $request->penulis,
            "gendre"=> $request->gendre
        ]);
        return redirect()->to("buku")->with('message', 'Data berhasil diubah');
    }
}
