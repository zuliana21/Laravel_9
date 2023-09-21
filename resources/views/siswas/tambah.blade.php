@extends('template.default')

@php
   $title = 'Data Siswa';
   $preTitle = 'Tambah Data';
@endphp

@section('body')
<h1>Tambah Data</h1>

<form action="{{ route('sekolahs.store') }}" class="" method="post">
    @csrf
<div class="mb-3">
     <label class="form-label">Nama Sekolah</label>
     <input type="text" name="namasekolah" class="form-control" name="example-text-input" 
     placeholder="tulis nama sekolah">
 </div>

 <div class="mb-3">
     <label class="form-label">Alamat</label>
     <input type="text" name="alamat" class="form-control" name="example-text-input" 
     placeholder="tulis alamat">
 </div>

 <div class="mb-3">
     <label class="form-label">Jurusan</label>
     <input type="text" name="jurusan" class="form-control" name="example-text-input" 
     placeholder="tulis jurusan">
 </div>

 <div class="mb-3">
     <label class="form-label">Jumlah Guru</label>
     <input type="text" name="jumlahguru" class="form-control" name="example-text-input" 
     placeholder="tulis jumlah guru">
 </div>

 <div class="mb-3">
    <input type="submit" value="Simpan" class="btn btn-primary">
 </div>

</form>

@endsection