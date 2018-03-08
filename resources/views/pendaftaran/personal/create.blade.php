@extends('layouts.pesertaApp')

@section('addedMeta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b>Data Diri</b></h4>
                            <p class="text-muted m-b-30 font-13">
                                Isilah data berikut dengan benar sebagai informasi Data diri.
                            </p>

                            <form id="wizard-validation-form" action="#">
                                <div>
                                    <h3>Step 1</h3>
                                    <section>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="nama"> Nama Peserta *</label>
                                            <div class="col-lg-10">
                                                <input id="user" type="hidden" value="{{ \Illuminate\Support\Facades\Auth::id() }}">
                                                <input id="nama" name="nama" type="text" class="required form-control">
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="alamat">Alamat Peserta *</label>
                                            <div class="col-lg-10">
                                                <input id="alamat" name="alamat" type="text" class="required form-control">
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="gender"> Gender *</label>
                                            <div class="col-lg-10">
                                                <input id="gender" name="gender" type="text" class="required form-control">
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="telp"> No Telp *</label>
                                            <div class="col-lg-10">
                                                <input id="telp" name="telp" type="text" class="required form-control">
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="semester"> Semester Saat ini *</label>
                                            <div class="col-lg-10">
                                                <input id="semester" name="semester" type="text" class="required form-control">
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="ipk"> IPK *</label>
                                            <div class="col-lg-10">
                                                <input id="ipk" name="ipk" type="text" class="required form-control">
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-12 control-label ">(*) Wajib diisi</label>
                                        </div>

                                    </section>
                                    <h3>Step 2</h3>
                                    <section>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label" for="namaAyah"> Nama Ayah *</label>
                                            <div class="col-lg-10">
                                                <input id="namaAyah" name="namaAyah" type="text" class="required form-control">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="namaIbu"> Nama Ibu *</label>
                                            <div class="col-lg-10">
                                                <input id="namaIbu" name="namaIbu" type="text" class="required form-control">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label" for="jobAyah"> Pekerjaan Ayah *</label>
                                            <div class="col-lg-10">
                                                <input id="jobAyah" name="jobAyah" type="text" class="required form-control">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="jobIbu"> Pekerjaan Ibu *</label>
                                            <div class="col-lg-10">
                                                <input id="jobIbu" name="jobIbu" type="text" class="required form-control">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label" for="gajiAyah"> Gaji Ayah </label>
                                            <div class="col-lg-10">
                                                <input id="gajiAyah" name="gajiAyah" type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="gajiIbu"> Gaji Ibu </label>
                                            <div class="col-lg-10">
                                                <input id="gajiIbu" name="gajiIbu" type="number" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-12 control-label ">(*) Wajib Diisi</label>
                                        </div>

                                    </section>
                                    <h3>Step 3</h3>
                                    <section>
                                        <div class="form-group clearfix">
                                            <div class="col-lg-12">
                                                <ul class="list-unstyled w-list">
                                                    <li><b>Nama Peserta :</b> Jonathan </li>
                                                    <li><b>Alamat :</b> Smith </li>
                                                    <li><b>Gender :</b> jonathan@smith.com</li>
                                                    <li><b>No Telp :</b> 123 Your City, Cityname. </li>
                                                    <li><b>Semester :</b> Jonathan </li>
                                                    <li><b>IPK :</b> Smith </li>
                                                    <li><b>Nama Ayah :</b> jonathan@smith.com</li>
                                                    <li><b>Nama Ibu :</b> 123 Your City, Cityname. </li>
                                                    <li><b>Pekerjaan Ayah :</b> Jonathan </li>
                                                    <li><b>Pekerjaan Ibu :</b> Smith </li>
                                                    <li><b>Gaji Ayah :</b> jonathan@smith.com</li>
                                                    <li><b>Gaji Ibu :</b> 123 Your City, Cityname. </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </section>
                                    <h3>Step Final</h3>
                                    <section>
                                        <div class="form-group clearfix">
                                            <div class="col-lg-12">
                                                <input id="acceptTerms-2" name="acceptTerms2" type="checkbox" class="required">
                                                <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="/assets/pages/jquery.wizard-init.js" type="text/javascript"></script>
@endsection