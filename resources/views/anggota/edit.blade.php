@extends('layouts.app')
@section('title' , "Anggota")
@section('content')


<div class="card">
              <div class="card-header">
                <h3 class="card-title">Edit <small>Anggota</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{route("anggota.update", $edit->id)}}">
                @csrf
                @method("PUT")
                  <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" value="{{$edit->nama_anggota}}" name="nama_anggota" class="form-control"  placeholder="Enter Name">
                  </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" name="email" value="{{$edit->email}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nomor HP</label>
                      <input type="text" name="nomor_hp" value="{{$edit->nomor_hp}}" class="form-control" id="exampleInputPassword1" placeholder="EnterNomor HP">
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>
            </div>

@endsection
