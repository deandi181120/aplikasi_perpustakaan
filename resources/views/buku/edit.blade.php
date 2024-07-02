@extends('layouts.app')
@section('title' , "Buku")
@section('content')


<div class="card">
              <div class="card-header">
                <h3 class="card-title">Edit <small>Buku</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{route("buku.update", $edit->id)}}">
                @csrf
                @method("PUT")
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Nama Buku</label>
                    <input type="text" value="{{$edit->nama_buku}}" name="nama_buku" class="form-control"  placeholder="Enter Buku">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Penerbit</label>
                      <input type="text"value="{{$edit->penerbit}}" name="penerbit" class="form-control" id="exampleInputEmail1" placeholder="Enter Penerbit">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Quantity</label>
                      <input type="text"value="{{$edit->qty}}" name="qty" class="form-control" id="exampleInputPassword1" placeholder="Enter Quantity">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Deskripsi</label>
                      <textarea type="text" name="deskripsi" class="form-control" placeholder="Enter Deskripsi">{{$edit->deskripsi}}</textarea>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Penulis</label>
                      <input type="text"value="{{$edit->penulis}}" name="penulis" class="form-control" placeholder="Enter Penulis">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Gendre</label>
                      <input type="text"value="{{$edit->gendre}}" name="gendre" class="form-control" placeholder="Enter Gendre">
                  </div>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>
            </div>

@endsection
