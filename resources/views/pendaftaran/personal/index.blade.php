@extends('layouts.pesertaApp')

@section('konten')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Welcome John !</h4>
                            <ol class="breadcrumb p-0 m-0">
                                <li>
                                    <a href="#">Codefox</a>
                                </li>
                                <!--<li>-->
                                <!--<a href="#">Dashboard</a>-->
                                <!--</li>-->
                                <li class="active">
                                    Dashboard
                                </li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <div class="form-horizontal">
                                <h4 class="m-t-0 header-title"><b>Data Diri</b></h4>
                                <p class="text-muted m-b-30 font-14">
                                    Berikut data diri anda, silahkan sunting <a href="/personal/update/personal">DISINI</a> apabila ada kesalahan.
                                </p>
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="/foto/{{ $data->foto }}" alt="image"
                                             class="img-responsive img-circle" width="120"/>
                                    </div>
                                    <div class="col-md-10">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nama Peserta</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" readonly="" value="{{ $data->nama_pendaftar }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Gender</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" readonly="" value="{{ ($data->gender == 'L') ? "Laki-Laki" : "Perempuan" }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Alamat Peserta</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" readonly="" value="{{ $data->alamat_pendaftar }}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">No Telepon</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" readonly="" value="{{ $data->telp }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Universitas</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" readonly="" value="{{ $data->universitas }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Kota Universitas</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" readonly="" value="{{ $data->kota_universitas }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Semester Saat Ini</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" readonly="" value="{{ $data->semester }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">IPK</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" readonly="" value="{{ $data->ipk }}">
                                            </div>
                                        </div>

                                        <h4 class="m-t-0 header-title"><b>Informasi Orang Tua</b></h4>
                                        <p class="text-muted m-b-30 font-14">
                                            Berikut informasi orang tua, silahkan disunting <a href="/personal/update/parent">DISINI</a> apabila ada kesalahan.
                                        </p>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nama Ayah</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" readonly="" value="{{ $data->nama_ayah }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nama Ibu</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" readonly="" value="{{ $data->nama_ibu }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Pekerjaan Ayah</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" readonly="" value="{{ $data->pekerjaan_ayah }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Pekerjaan Ibu</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" readonly="" value="{{ $data->pekerjaan_ibu }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Gaji Ayah</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" readonly="" value="{{ $data->gaji_ayah }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Gaji Ibu</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" readonly="" value="{{ $data->gaji_ibu }}">
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer text-right">
            2016 - 2017 © Codefox. - Coderthemes.com
        </footer>
    </div>
@endsection
