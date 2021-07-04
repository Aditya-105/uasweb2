@extends('layouts.app')

@section('content')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="fa fa-user bg-dark"></i>
                    <div class="d-inline">
                        <h5>Profil</h5>
                        <span>Halaman untuk mengelola Profil Website Retina Photo.</span>
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
                            <a>Profil</a>
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
                                    <h5>Profil Website</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-block">
                            <form role="form" method="post" action="{{ url('profil/edit/'.$datas->id  ) }}" enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PUT') }}
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><i class="fa fa-folder mr-1"></i> Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul" value="{{ $datas->judul }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><i class="fa fa-info-circle mr-1"></i> Keterangan</label>
                                    <div class="col-sm-10">
                                        <textarea rows="5" cols="5" class="form-control" name="keterangan" placeholder="Masukkan Keterangan">{{ $datas->keterangan }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><i class="fa fa-photo mr-1"></i> Logo</label>
                                    <div class="col-sm-10">
                                        <div class="mb-3">
                                            <div class="lead mb-2">
                                                Logo Website Saat Ini
                                            </div>
                                            <img src="{{ asset('image/'.$datas->logo) }}" style="width:20%" alt="">
                                        </div>
                                        <input type="file" name="logo" class="form-control col-4">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><i class="fa fa-photo mr-1"></i> Foto</label>
                                    <div class="col-sm-10">
                                        <div class="mb-3">
                                            <div class="lead mb-2">
                                                Foto About Us Saat Ini
                                            </div>
                                            <img src="{{ asset('image/'.$datas->foto) }}" style="width:20%" alt="">
                                        </div>
                                        <input type="file" name="foto" class="form-control col-4">
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

        <div id="styleSelector">
        </div>
    </div>
@endsection
