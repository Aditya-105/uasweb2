@extends('layouts.app')

@section('content')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="fa fa-folder bg-dark"></i>
                    <div class="d-inline">
                        <h5>Paket</h5>
                        <span>Halaman untuk mengelola Paket dari Website Retina Photo.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="home"><i class="feather icon-home"></i> Beranda</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Paket</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <h5>List Paket</h5>
                                </div>
                                <div class="col text-right">
                                    <button type="button" class="btn btn-success waves-effect" data-toggle="modal"
                                        data-target="#tambahData"><i class="fa fa-plus mr-1"></i> Tambah Data</button>
                                </div>
                                <div class="modal fade" id="tambahData" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><i class="fa fa-plus-circle mr-1"></i> Tambah Data Paket</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true" style="font-size: 25px">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form" method="post" action="{{ url('paket/add') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label"><i class="fa fa-folder mr-1"></i> Nama Paket</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="nama_paket" placeholder="Masukkan Nama Paket">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label"><i class="fa fa-photo mr-1"></i> Foto</label>
                                                        <div class="col-sm-10">
                                                            <input type="file" name="foto" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label"><i class="fa fa-info-circle mr-1"></i> Keterangan</label>
                                                        <div class="col-sm-10">
                                                            <textarea rows="5" cols="5" class="form-control" name="keterangan" placeholder="Masukkan Keterangan Paket"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-2"></div>
                                                        <div class="col-sm-10">
                                                            <button class="btn btn-success"><i class="fa fa-send mr-1"></i> Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="dt-responsive table-responsive">
                                <table id="multi-colum-dt" class="table table-striped table-bordered dataTable"
                                    style="table-layout: fixed;">
                                    <thead>
                                        <tr>
                                            <th style="width: 5%;"><i class="fa fa-hashtag mr-1"></i></th>
                                            <th style="width: 15%;"><i class="fa fa-folder mr-1"></i> Nama Paket</th>
                                            <th style="width: 20%;"><i class="fa fa-photo mr-1"></i> Foto</th>
                                            <th style="width: 45%;"><i class="fa fa-info-circle mr-1"></i> Keterangan</th>
                                            <th style="width: 15%;"><i class="fa fa-cog mr-1"></i> Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datas as $e => $item)
                                            <tr>
                                                <td style="width: 5%;">{{ $e + 1 }}</td>
                                                <td style="width: 15%;">{{ $item->nama_paket }}</td>
                                                <td style="width: 20%;"><img src="{{ asset('image/' . $item->foto) }}"
                                                        style="width: 100%" alt=""></td>
                                                <td style="width: 45%; white-space: normal">{{ $item->keterangan }}</td>
                                                <td style="width: 15%;" class="text-center">
                                                    <button class="btn btn-sm btn-info waves-effect" type="button" data-toggle="modal"
                                                    data-target="#detailData{{$e+1}}"><i
                                                            class="fa fa-search"></i></button>
                                                    <button class="btn btn-sm btn-warning" type="button" data-toggle="modal"
                                                    data-target="#editData{{$e+1}}"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-danger" type="button" data-toggle="modal"
                                                    data-target="#hapusData{{$e+1}}"><i
                                                            class="fa fa-edit"></i></button>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="detailData{{$e+1}}" tabindex="-1" role="dialog">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title"><i class="fa fa-search mr-1"></i> Detail Paket</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true" style="font-size: 25px">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label"><i class="fa fa-folder mr-1"></i> Nama Paket</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control bg-white" name="nama_paket" value="{{ $item->nama_paket }}" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label"><i class="fa fa-info-circle mr-1"></i> Keterangan</label>
                                                                <div class="col-sm-10">
                                                                    <textarea rows="5" cols="5" class="form-control bg-white" name="keterangan" readonly>{{ $item->keterangan }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label"><i class="fa fa-calendar mr-1"></i> Tgl Buat</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control bg-white" name="created_at" value="{{ $item->created_at->isoFormat('dddd, D MMMM Y').' | '.$item->created_at->format('H:i:s') }}" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label"><i class="fa fa-calendar mr-1"></i> Tgl Ubah</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control bg-white" name="updated_at" value="{{ $item->updated_at->isoFormat('dddd, D MMMM Y').' | '.$item->updated_at->format('H:i:s') }}" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label"><i class="fa fa-photo mr-1"></i> Foto</label>
                                                                <div class="col-sm-10">
                                                                    <img src="{{ asset('image/'.$item->foto) }}" style="width:50%" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="editData{{$e+1}}" tabindex="-1" role="dialog">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title"><i class="fa fa-edit mr-1"></i> Edit Paket</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true" style="font-size: 25px">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form role="form" method="post" action="{{ url('paket/edit/'.$item->id) }}" enctype="multipart/form-data">
                                                                @csrf
                                                                {{ method_field('PUT') }}
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label"><i class="fa fa-folder mr-1"></i> Nama Paket</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="nama_paket" placeholder="Masukkan Nama Paket" value="{{ $item->nama_paket }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label"><i class="fa fa-photo mr-1"></i> Foto</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="file" name="foto" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label"><i class="fa fa-info-circle mr-1"></i> Keterangan</label>
                                                                    <div class="col-sm-10">
                                                                        <textarea rows="5" cols="5" class="form-control" name="keterangan" placeholder="Masukkan Keterangan Paket">{{ $item->keterangan }}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-2"></div>
                                                                    <div class="col-sm-10">
                                                                        <button class="btn btn-success"><i class="fa fa-send mr-1"></i> Submit</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="hapusData{{$e+1}}" tabindex="-1" role="dialog">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title"><i class="fa fa-trash mr-1"></i> Hapus Paket</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true" style="font-size: 25px">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Yakin ingin menghapus Paket {{ $item->nama_paket }} ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form role="form" method="post" action="{{ url('paket/delete/'.$item->id) }}">
                                                                @csrf
                                                                {{ method_field('delete') }}
                                                                <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i>Ya, Hapus Paket</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="styleSelector">
        </div>
    </div>
@endsection
