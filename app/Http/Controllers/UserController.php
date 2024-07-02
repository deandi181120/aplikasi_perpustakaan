<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $datas = Users::with("level")->get();
        $title = "Users";
        return view("user.index", compact("title", "datas"));
    }
    public function create()
    {
        $levels = Level::get();
        $title = "Tambah Users";
        return view("user.create", compact("title", "levels"));
    }
    public function edit(string $id)
    {
        $levels = Level::get();
        $edit = Users::with("level")->find($id);
        $title = "Edit Users";
        return view("user.edit", compact("title", "levels", "edit"));
    }
    public function store(request  $request)
    {
        users::create([
            "id_level" => $request->id_level,
            "nama" => $request->nama,
            "email"  => $request->email,
            "password" => sha1($request->password)
        ]);
        return redirect()->to("user")->with('message', 'Data berhasil ditambah');
    }
    public function update(request  $request, string $id)
    {
        $users = Users::find($id);
        if ($users->password == $request->password) {
            users::where("id", $id)->update([
                "id_level" => $request->id_level,
                "nama" => $request->nama,
                "email"  => $request->email,
            ]);
        } else {
            users::where("id", $id)->update([
                "id_level" => $request->id_level,
                "nama" => $request->nama,
                "email"  => $request->email,
                "password" => sha1($request->password)
            ]);
        }

        return redirect()->to("user")->with('message', 'Data berhasil ditambah');
    }
}
