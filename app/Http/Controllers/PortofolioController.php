<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use Illuminate\Support\Facades\DB;

class PortofolioController extends Controller
{
    public function index()
    {
        $title = 'Portofolio';
        $datas = Portofolio::all();
        return view('portofolio.index', compact(
            'title' ,'datas'
        ));   
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'foto'=>'nullable',
        ]);

        if ($request->foto != "" || $request->foto != null) {
            $queryInc = \DB::select("SHOW TABLE STATUS LIKE 'portofolio'");
            $inc = $queryInc[0]->Auto_increment;

            // menyimpan data file yang diupload ke variabel $file
            $foto = $request->file('foto');

            $nama_file = 'portofolio_'.$inc.'.'.$foto->extension();

            // isi dengan nama folder tempat ke mana file diupload
            $tujuan_upload = 'image/';
            $foto->move($tujuan_upload, $nama_file);

            $data['foto'] = $nama_file;
        } else {
            $data['foto'] = 'no-image.jpg';
        }

        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        Portofolio::insert($data);

        \Session::flash('sukses', 'Data berhasil ditambah');

        return redirect('portofolio');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'foto'=>'nullable',
        ]);

        // $portofolio = Portofolio::where('id', $id)->first();

        if ($request->foto != "" || $request->foto != null) {
            // $queryInc = \DB::select("SHOW TABLE STATUS LIKE 'portofolio'");
            // $inc = $queryInc[0]->Auto_increment;

            // menyimpan data file yang diupload ke variabel $file
            $foto = $request->file('foto');

            $nama_file = 'portofolio_'.$id.$foto->extension();

            // isi dengan nama folder tempat ke mana file diupload
            $tujuan_upload = 'image/';
            $foto->move($tujuan_upload, $nama_file);

            $data['foto'] = $nama_file;
        }

        $data['updated_at'] = date('Y-m-d H:i:s');

        Portofolio::where('id', $id)->update($data);

        \Session::flash('sukses', 'Data berhasil diubah');

        return redirect('portofolio');
    }
}
