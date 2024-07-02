<?php
session_start();

$level = session("level");
?>
@extends('layouts.app')
@section('title' , " Tambah Anggota")
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
          <th>Nama Anggota</th>
          <th>Email</th>
          <th>Nomor Hp</th>
          <th style="width: 40px">Status</th>
        </tr>
      </thead>
      <tbody>
        @php $no = 1 @endphp
        @foreach ($datas as $data)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$data->nama_anggota}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->nomor_hp}}</td>
            <td>
                <a href="{{route("anggota.edit", $data->id)}}" class="btn btn-success btn-sm">Edit</a> |

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
<a href="{{route("anggota.create")}}"  class="btn btn-primary mb-3">Tambah Anggota</a>
@endif
 @endsection
