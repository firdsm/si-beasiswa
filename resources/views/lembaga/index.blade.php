@extends('layouts.lembagaApp')

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
                                <h4 class="m-t-0 header-title"><b>Informasi Lembaga</b></h4>
                                <p class="text-muted m-b-30 font-14">
                                    Berikut informasi dari Lembaga ini, silahkan sunting <a href="/lembaga/update">DISINI</a> apabila ada kesalahan.
                                </p>
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="/foto/{{ $lembaga->logo_lembaga }}" alt="image"
                                             class="img-responsive img-circle" width="120"/>
                                    </div>
                                    <div class="col-md-10">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nama Lembaga</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" readonly="" value="{{ $lembaga->nama_lembaga }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Alamat Lembaga</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" readonly>{{ $lembaga->alamat_lembaga }}</textarea>
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
