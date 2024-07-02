@extends('layouts.app')
@section('title' , "Tambah Buku")
@section('content')


<div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambah <small>Buku</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{route("buku.store")}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Nama Buku</label>
                  <input type="text" name="nama_buku" class="form-control"  placeholder="Enter Buku">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" id="exampleInputEmail1" placeholder="Enter Penerbit">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Quantity</label>
                    <input type="text" name="qty" class="form-control" id="exampleInputPassword1" placeholder="Enter Quantity">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi</label>
                    <textarea type="text" name="deskripsi" class="form-control" placeholder="Enter Deskripsi"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Penulis</label>
                    <input type="text" name="penulis" class="form-control" placeholder="Enter Penulis">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Gendre</label>
                    <input type="text" name="gendre" class="form-control" placeholder="Enter Gendre">
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
              </form>
            </div>

@endsection
