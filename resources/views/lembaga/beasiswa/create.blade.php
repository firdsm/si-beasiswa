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
                            <h4 class="header-title m-t-0">Tambah Organisasi</h4>
                            <p class="text-muted font-14 m-b-20">
                                Masukkan informasi organisasi yang pernah anda ikuti secara lengkap.
                            </p>

                            <form action="/beasiswa/create" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="beasiswa">Nama Beasiswa<span class="text-danger">*</span></label>
                                    <input required type="text" class="form-control" name="beasiswa" id="beasiswa">
                                </div>
                                <div class="form-group">
                                    <label for="skala">Skala Tunjangan<span class="text-danger">*</span></label>
                                    <select required class="form-control" name="skala" id="skala">
                                        <option selected disabled value="">Pilih skala tunjangan</option>
                                        <option value="per Bulan">per Bulan</option>
                                        <option value="per Semester">per Semester</option>
                                        <option value="per Tahun">per Tahun</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah Tunjangan<span class="text-danger">*</span></label>
                                    <input required type="text" class="form-control" name="jumlah" id="jumlah">
                                </div>
                                <div class="form-group">
                                    <label for="kontrak">Kontrak Beasiswa<span class="text-danger">*</span></label>
                                    <select required class="form-control" name="kontrak" id="kontrak">
                                        <option selected disabled value="">Pilih Masa Kontrak</option>
                                        <option value="1 Periode">1 Periode</option>
                                        <option value="2 Periode">2 Periode</option>
                                        <option value="3 Periode">3 Periode</option>
                                        <option value="Sampai Lulus">Sampai Lulus</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="kriteria">Kriteria<span class="text-danger">*</span></label>
                                    <textarea required id="kriteria" class="form-control" name="kriteria"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="ipk">IPK Minimum<span class="text-danger">*</span></label>
                                    <input required placeholder="Masukkan IPK minimum untuk pendaftar" type="text" class="form-control" name="ipk" id="ipk">
                                </div>
                                <div class="form-group">
                                    <label for="semester">Semester Maksimum<span class="text-danger">*</span></label>
                                    <input required placeholder="Masukkan semester maksimum untuk pendaftar" type="text" class="form-control" name="semester" id="semester">
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