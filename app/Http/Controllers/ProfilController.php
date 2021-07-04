<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    public function index()
    {
        $title = 'Profil';
        $datas = Profil::first();
        return view('profil.index', compact(
            'title' ,'datas'
        ));    
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'judul'=>'required',
            'keterangan'=>'nullable',
            'logo'=>'nullable',
            'foto'=>'nullable',
        ]);

        $profil = Profil::where('id', $id)->first();

        $data['judul'] = $request->judul;
        $data['keterangan'] = $request->keterangan;
        if ($request->logo != "" || $request->logo != null) {
            // $queryInc = \DB::select("SHOW TABLE STATUS LIKE 'paket'");
            // $inc = $queryInc[0]->Auto_increment;

            // menyimpan data file yang diupload ke variabel $file
            $logo = $request->file('logo');

            $nama_file = $profil->logo;

            // isi dengan nama folder tempat ke mana file diupload
            $tujuan_upload = 'image/';
            $logo->move($tujuan_upload, $nama_file);

            $data['logo'] = $nama_file;
        }

        if ($request->foto != "" || $request->foto != null) {
            // $queryInc = \DB::select("SHOW TABLE STATUS LIKE 'paket'");
            // $inc = $queryInc[0]->Auto_increment;

            // menyimpan data file yang diupload ke variabel $file
            $foto = $request->file('foto');

            $nama_file = $profil->foto;

            // isi dengan nama folder tempat ke mana file diupload
            $tujuan_upload = 'image/';
            $foto->move($tujuan_upload, $nama_file);

            $data['foto'] = $nama_file;
        }

        $data['updated_at'] = date('Y-m-d H:i:s');

        Profil::where('id', $id)->update($data);

        \Session::flash('sukses', 'Data berhasil diubah');

        return redirect('profil');
    }
}
