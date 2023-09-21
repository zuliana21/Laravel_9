@extends('template.default')

@php
   $title = 'Data Siswa';
   $preTitle = 'Edit Data Siswa';
@endphp

@section('body')
<h1>Tambah Data</h1>

<form action="{{ route('sekolahs.update', $siswa->id) }}" class="" method="post">
    @csrf
    @method('PUT')
<div class="mb-3">
     <label class="form-label">Nama Sekolah</label>
     <input type="text" name="namasekolah" class="form-control" name="example-text-input" 
     placeholder="tulis nama sekolah" value="{{$siswa->namasekolah}}">
 </div>

 <div class="mb-3">
     <label class="form-label">Alamat</label>
     <input type="text" name="alamat" class="form-control" name="example-text-input" 
     placeholder="tulis alamat" value="{{$siswa->alamat}}">
 </div>

 <div class="mb-3">
     <label class="form-label">Jurusan</label>
     <input type="text" name="jurusan" class="form-control" name="example-text-input" 
     placeholder="tulis jurusan" value="{{$siswa->jurusan}}">
 </div>

 <div class="mb-3">
     <label class="form-label">Jumlah Guru</label>
     <input type="text" name="jumlahguru" class="form-control" name="example-text-input" 
     placeholder="tulis jumlah guru" value="{{$siswa->jumlahguru}}">
 </div>

 <div class="mb-3">
    <input type="submit" value="Simpan" class="btn btn-primary">
 </div>

</form>

@endsection