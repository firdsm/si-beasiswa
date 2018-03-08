@extends('layouts.pesertaApp')

@section('css')
    <link href="/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <link href="/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/plugins/switchery/switchery.min.css">
@endsection

@section('konten')
    <div class="content-page">
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
                            @if($errors->any())
                                <div class="alert alert-icon alert-danger alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <i class="mdi mdi-block-helper"></i>
                                    <strong>Error!</strong> {{ $errors->all()[0] }} Change a few things up and try submitting
                                    again.
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <h4 class="header-title m-t-0">Sunting Info Orang Tua</h4>
                            <p class="text-muted font-14 m-b-20">
                                Masukkan informasi orang tua secara lengkap.
                            </p>

                            <form action="/personal/update/parent" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="n-ayah">Nama Ayah<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="n_ayah" id="n-ayah" required value="{{ $personal->nama_ayah }}">
                                </div>
                                <div class="form-group">
                                    <label for="n-ibu">Nama Ibu<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="n_ibu" id="n-ibu" required value="{{ $personal->nama_ibu }}" placeholder="Masukkan nilai IPK anda (Angka saja)">
                                </div>
                                <div class="form-group">
                                    <label for="p-ayah">Pekerjaan Ayah<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="p_ayah" id="p-ayah" required value="{{ $personal->pekerjaan_ayah }}">
                                </div>
                                <div class="form-group">
                                    <label for="p-ibu">Pekerjaan Ibu<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="p_ibu" id="p-ibu" required value="{{ $personal->pekerjaan_ibu }}">
                                </div>
                                <div class="form-group">
                                    <label for="g-ayah">Gaji Ayah<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="g_ayah" id="g-ayah" required value="{{ $personal->gaji_ayah }}">
                                </div>
                                <div class="form-group">
                                    <label for="g-ibu">Gaji Ibu<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="g_ibu" id="g-ibu" required value="{{ $personal->gaji_ibu }}">
                                </div>
                                <div class="form-group text-right m-b-0">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-default waves-effect m-l-5">
                                        Cancel
                                    </button>
                                </div>

                            </form>
                        </div> <!-- end card-box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="/plugins/switchery/switchery.min.js"></script>
    <script src="/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
    <script src="/plugins/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
    <script src="/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <script src="/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

    <script src="/plugins/moment/moment.js"></script>
    <script src="/plugins/timepicker/bootstrap-timepicker.js"></script>
    <script src="/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <script src="/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="/assets/pages/jquery.form-pickers.init.js"></script>

    <script type="text/javascript" src="/assets/pages/jquery.form-advanced.init.js"></script>
@endsection