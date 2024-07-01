<?php
session_start();

$level = session("level");
?>
@extends('layouts.app')
@section('title' , " Tambah Users")
@section('content')


@if ($level == 2 || $level == 3)

<div class="card">

<div class="card-header">


    <h3 class="card-title">Bordered Table</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table class="table table-bordered" id="datatables">
      <thead>
        <tr>
          <th style="width: 10px">#</th>
          <th>Level</th>
          <th>Username</th>
          <th>Email</th>
          <th style="width: 40px">Status</th>
        </tr>
      </thead>
      <tbody>
        @php $no = 1 @endphp
        @foreach ($datas as $data)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$data->level->nama_level}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->email}}</td>
            <td>
                <a href="{{route("user.edit", $data->id)}}" class="btn btn-success btn-sm">Edit</a> |

                <form method="POST" action="" class="d-inline">
                  @csrf
                  <input type="hidden" name="_method" value="DELETE">
                  <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
              </form></td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
<a href="{{route("user.create")}}"  class="btn btn-primary mb-3">Tambah User</a>
@endif
 @endsection
