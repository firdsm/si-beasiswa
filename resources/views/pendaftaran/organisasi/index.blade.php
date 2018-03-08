@extends('layouts.pesertaApp')

@section('css')
    <!-- DataTables -->
    <link href="/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>
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
                        <div class="card-box table-responsive">

                            <h4 class="m-t-0 header-title"><b>Data Organisasi</b></h4>
                            <p class="text-muted font-14 m-b-30">
                                Berikut data organisasi yang telah diinputkan. klik <a href="/organisasi/create">disini</a> untuk menambahkan data baru.
                            </p>

                            <table id="datatable-fixed-header" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Nama Organisasi</th>
                                    <th>Jabatan</th>
                                    <th>Level/Tingkat</th>
                                    <th>Awal Jabatan</th>
                                    <th>Akhir Jabatan</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($orgs as $org)
                                    <tr>
                                        <td>{{ $org->nama_organisasi }}</td>
                                        <td>{{ $org->jabatan }}</td>
                                        <td>{{ $org->tingkat_organisasi }}</td>
                                        <td>{{ $org->awal_jabatan }}</td>
                                        <td>{{ $org->akhir_jabatan }}</td>
                                        <td class="text-center">
                                            <a title="Lihat Sertifikat" target="_blank" href="/file/organisasi/{{ $org->no_sertifikat }}"><i class="fi-eye"></i></a> |
                                            <a href="/organisasi/download/{{ $org->id }}" title="Download Sertifikat"><i class="fi-download"></i></a> |
                                            <a href="/organisasi/delete/{{ $org->id }}" title="Hapus Data"><i class="fi-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/plugins/datatables/dataTables.bootstrap.js"></script>

    <script src="/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="/plugins/datatables/buttons.bootstrap.min.js"></script>
    <script src="/plugins/datatables/jszip.min.js"></script>
    <script src="/plugins/datatables/pdfmake.min.js"></script>
    <script src="/plugins/datatables/vfs_fonts.js"></script>
    <script src="/plugins/datatables/buttons.html5.min.js"></script>
    <script src="/plugins/datatables/buttons.print.min.js"></script>
    <script src="/plugins/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="/plugins/datatables/responsive.bootstrap.min.js"></script>
    <script src="/plugins/datatables/dataTables.scroller.min.js"></script>
    <script src="/plugins/datatables/dataTables.colVis.js"></script>
    <script src="/plugins/datatables/dataTables.fixedColumns.min.js"></script>

    <!-- init -->
    <script src="/assets/pages/jquery.datatables.init.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({keys: true});
            $('#datatable-responsive').DataTable();
            $('#datatable-colvid').DataTable({
                "dom": 'C<"clear">lfrtip',
                "colVis": {
                    "buttonText": "Change columns"
                }
            });
            $('#datatable-scroller').DataTable({
                ajax: "../plugins/datatables/json/scroller-demo.json",
                deferRender: true,
                scrollY: 380,
                scrollCollapse: true,
                scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
            var table = $('#datatable-fixed-col').DataTable({
                scrollY: "300px",
                scrollX: true,
                scrollCollapse: true,
                paging: false,
                fixedColumns: {
                    leftColumns: 1,
                    rightColumns: 1
                }
            });
        });
        TableManageButtons.init();
    </script>
@endsection