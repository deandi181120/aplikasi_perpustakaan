<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AnggotaController extends Controller
{
    public function index()
    {
        $datas = Anggota::get();
        $title = "Anggota";
        return view("anggota.index", compact("title", "datas"));
    }
    public function create()
    {
        $levels = Level::get();
        $title = "Tambah Anggota";
        return view("anggota.create", compact("title", "levels"));
    }
    public function edit(string $id)
    {
        $edit = Anggota::find($id);
        $title = "Edit Anggota";
        return view("anggota.edit", compact("title", "edit"));
    }
    public function store(request  $request)
    {
        Anggota::create([
            "nama_anggota" => $request->nama_anggota,
            "email"  => $request->email,
            "nomor_hp" => $request->nomor_hp
        ]);
        return redirect()->to("anggota")->with('message', 'Data berhasil ditambah');
    }
    public function update(request  $request, string $id)
    {

        Anggota::where("id", $id)->update([
            "nama_anggota" => $request->nama_anggota,
            "email"  => $request->email,
            "nomor_hp" => $request->nomor_hp
        ]);
        return redirect()->to("anggota")->with('message', 'Data berhasil diubah');
    }
}
