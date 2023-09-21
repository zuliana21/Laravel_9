<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sekolah;

class siswaController extends Controller
{
    public function index()
    {
        return view('siswas.index', [
            'siswas' => sekolah::get(),
        ]);
    }

    public function tambah()
    {
        return view('siswas.tambah', [
        
        ]);
    }

   public function store(Request $request)
    {
        $sekolah = new Sekolah();

        $sekolah->namasekolah = $request->namasekolah;
        $sekolah->alamat = $request->alamat;
        $sekolah->jurusan = $request->jurusan;
        $sekolah->jumlahguru = $request->jumlahguru;

        $sekolah->save();

        return redirect()->route('sekolahs.index');
     }

     public function edit($id)
      {
        $siswa = sekolah::find($id);

        return view('siswas.edit', [
            'siswa' => $siswa,
        ]);
      }

      public function update(Request $request, $id)
      {
        $sekolah = sekolah::find($id);

        $sekolah->namasekolah = $request->namasekolah;
        $sekolah->alamat = $request->alamat;
        $sekolah->jurusan = $request->jurusan;
        $sekolah->jumlahguru = $request->jumlahguru;

        $sekolah->save();

        return redirect()->route('sekolahs.index');
      }

      public function destroy($id) 
      {
        $sekolah = sekolah::find($id);

        $sekolah->delete();

        return redirect()->route('sekolahs.index');
      }
    
}
