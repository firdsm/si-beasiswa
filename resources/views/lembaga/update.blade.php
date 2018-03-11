@extends('layouts.lembagaApp')

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
                            <h4 class="header-title m-t-0">Informasi Lembaga</h4>
                            <p class="text-muted font-14 m-b-20">
                                Masukkan informasi lembaga ini sebelum anda memulai.
                            </p>

                            <form action="/lembaga/update" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="nama">Nama Lembaga<span class="text-danger">*</span></label>
                                    <input value="{{ $lembaga->nama_lembaga }}" type="text" class="form-control" required placeholder="Masukkan Nama Lembaga" id="nama" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat Lembaga<span class="text-danger">*</span></label>
                                    <textarea required id="alamat" class="form-control" name="alamat">{{ $lembaga->alamat_lembaga }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="img">Logo Lembaga<span class="text-danger">*</span></label>
                                    <input name="img" id="img" type="file" class="filestyle" data-buttontext="Select file" data-buttonname="btn-default">
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