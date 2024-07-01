@extends('layouts.app')
@section('title' , "Users")
@section('content')


<div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambah <small>Users</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{route("user.store")}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Level</label>
                    <select name="id_level" class="form-control">
                        <option disabled selected>---</option>
                        @foreach ($levels as $level)
                        <option value="{{$level->id}}">{{$level->nama_level}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="nama" class="form-control"  placeholder="Enter Name">
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
              </form>
            </div>

@endsection
