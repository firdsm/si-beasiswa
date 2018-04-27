@extends('layouts.lembagaApp')

@section('konten')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title-box">
                            <section @if (isset($beasiswa)) {{ 'hidden' }} @else {{ '' }} @endif>
                                <a href="/beasiswa/create" type="button"
                                   class="btn btn-success waves-effect waves-light"><i class="fa fa-plus m-r-5"></i>
                                    <span>Tambah Beasiswa</span></a>
                            </section>
                            <ol class="breadcrumb p-0 m-0">
                                <li>
                                    <a href="#">Codefox</a>
                                </li>
                                <li>
                                    <a href="#">UI Kit</a>
                                </li>
                                <li class="active">
                                    Tabs
                                </li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <section @if (isset($beasiswa)) {{ 'hidden' }} @else {{ '' }} @endif>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-icon alert-danger alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert"
                                        aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <i class="mdi mdi-block-helper"></i>
                                <strong>Maaf!</strong> Tidak ada rekrutmen beasiswa aktif untuk saat ini. Silahkan
                                tambahkan beasiswa terlebih dahulu.
                            </div>
                        </div>
                    </div>
                </section>
                <section @if (isset($beasiswa)) {{ '' }} @else {{ 'hidden' }} @endif>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel-group">
                                <div class="panel panel-primary panel-color">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseOne"
                                               class="collapsed">
                                                Informasi
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="col-md-2">
                                                <p>Nama Beasiswa </p>
                                                <p>Tunjangan </p>
                                                <p>Masa Kontrak </p><br>
                                                <a href="/beasiswa/informasi/update/" type="button"
                                                   class="btn btn-dropbox waves-effect waves-light"> <i
                                                            class="fa fa-pencil m-r-5"></i>
                                                    <span>Sunting Informasi</span> </a>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                    : {{ (isset($beasiswa->nama_beasiswa)) ? $beasiswa->nama_beasiswa : "" }}</p>
                                                <p>
                                                    : {{ (isset($beasiswa->jumlah_tunjangan)) ? $beasiswa->jumlah_tunjangan." ".$beasiswa->skala_tunjangan : "" }}</p>
                                                <p>
                                                    : {{ (isset($beasiswa->masa_kontrak)) ? $beasiswa->masa_kontrak : "" }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info panel-color">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseTwo">
                                                Kriteria
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            Kriteria Umum : <br>
                                            {{ (isset($beasiswa->kriteria->kriteria_umum)) ? $beasiswa->kriteria->kriteria_umum : "" }}
                                            <br>
                                            <br> IPK Minimum
                                            : {{ (isset($beasiswa->kriteria->ipk_min)) ? $beasiswa->kriteria->ipk_min : "" }}
                                            <br>
                                            <br> Semester Maks
                                            : {{ (isset($beasiswa->kriteria->semester_maks)) ? $beasiswa->kriteria->semester_maks : "" }}
                                        </div>
                                    </div>
                                </div>
                                <section hidden>
                                    <div class="panel panel-custom panel-color">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion-test"
                                                   href="#collapseThree"
                                                   class="collapsed">
                                                    Collapsible Group Item #3
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                terry
                                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                                dolor
                                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                tempor,
                                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                                anderson
                                                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                                                lomo.
                                                Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                                nesciunt
                                                you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div> <!-- end row -->
                </section>

            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer text-right">
            2016 - 2017 © Codefox. - Coderthemes.com
        </footer>

    </div>
@endsection