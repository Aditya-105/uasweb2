<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;
use Illuminate\Support\Facades\DB;


class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Paket';
        $datas = Paket::orderBy('id', 'ASC')->get();
        return view('paket.index', compact(
            'title' ,'datas'
        ));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paket.create'); 
    }

    // public function create(Request $request)
    // {
    //     $this->validate($request, [
    //         'nama_paket'=>'required|string',
    //         'foto'=>'sometimes|image|max:500|mimes:jpeg,jpg,png,png',
    //         'keterangan'=>'required|string',
    //             ]);
    //     $paket = $request->file('foto');
    //     $namaFile = $paket->getClientOriginalName();
    //     $request->file('foto')->move('image', $namaFile);
    //     $do = new Paket($request->all());
    //     $do->foto = $namaFile;
    //     $do->save();
    //     return redirect('/paket');
    // }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_paket'=>'required',
            'keterangan'=>'nullable',
            'foto'=>'nullable',
        ]);

        $data['nama_paket'] = $request->nama_paket;
        $data['keterangan'] = $request->keterangan;
        if ($request->foto != "" || $request->foto != null) {
            $queryInc = \DB::select("SHOW TABLE STATUS LIKE 'paket'");
            $inc = $queryInc[0]->Auto_increment;

            // menyimpan data file yang diupload ke variabel $file
            $foto = $request->file('foto');

            $nama_file = $request->nama_paket.'_'.$inc.'.'.$foto->extension();

            // isi dengan nama folder tempat ke mana file diupload
            $tujuan_upload = 'image/';
            $foto->move($tujuan_upload, $nama_file);

            $data['foto'] = $nama_file;
        } else {
            $data['foto'] = 'no-image.jpg';
        }

        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        Paket::insert($data);

        \Session::flash('sukses', 'Data berhasil ditambah');

        return redirect('paket');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_paket'=>'required',
            'keterangan'=>'nullable',
            'foto'=>'nullable',
        ]);

        $data['nama_paket'] = $request->nama_paket;
        $data['keterangan'] = $request->keterangan;
        if ($request->foto != "" || $request->foto != null) {
            // $queryInc = \DB::select("SHOW TABLE STATUS LIKE 'paket'");
            // $inc = $queryInc[0]->Auto_increment;

            // menyimpan data file yang diupload ke variabel $file
            $foto = $request->file('foto');

            $nama_file = $request->nama_paket.'_'.$id.'.'.$foto->extension();

            // isi dengan nama folder tempat ke mana file diupload
            $tujuan_upload = 'image/';
            $foto->move($tujuan_upload, $nama_file);

            $data['foto'] = $nama_file;
        }

        $data['updated_at'] = date('Y-m-d H:i:s');

        Paket::where('id', $id)->update($data);

        \Session::flash('sukses', 'Data berhasil diubah');

        return redirect('paket');
    }

    public function delete($id)
    {
        try {
            Paket::where('id', $id)->delete();
            \Session::flash('sukses', 'Data berhasil dihapus');
        } catch (Exception $e) {
            \Session::flash('gagal', $e->getMessage());
        }

        return redirect('paket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 
    }
}
