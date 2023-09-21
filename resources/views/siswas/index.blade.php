@extends('template.default')

@php
   $title = 'Data Siswa';
   $preTitle = 'Semua Data';
@endphp

@push('page-action')
   <a href="{{ route('sekolahs.tambah') }}" class="btn btn-primary">Tambah Data</a>
@endpush

@section('body')
<h1>Zuliana XII PPLG 1</h1>

<div class="col-lg-8">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>Nama Sekolah</th>
                          <th>Alamat</th>
                          <th>Jurusan</th>
                          <th>Jumlah Guru</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach ($siswas as $siswa)
                       <tr>
                          <td>{{ $siswa->namasekolah}}</td>
                          <td>{{ $siswa->alamat}}</td>
                          <td>{{ $siswa->jurusan}}</td>
                          <td>{{ $siswa->jumlahguru}}</td>
                          <td>
                            <a href="{{ route('sekolahs.edit',  $siswa->id) }}">Edit</a>
                            <form action="{{ route('sekolahs.destroy', $siswa->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <input type="submit" value="Hapus" class="btn btn-denger btn-sm">
                            </form>
                          </td>
                        </tr>
                       @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              @endsection