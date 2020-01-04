@extends('template')

@section('style')
    <!-- Datatables -->    
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
@endsection

@section('title', 'Surat Pengajuan')

@section('content')

    <div class="">
        <div class="page-title">
            <div class="title_left mt-2 mb-2">
                <h4><b>Surat Pengajuan</b></h4>                
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Filter</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">                            
                            <select name="" id="selector_periode" class="form-control">
                                <option value="">Pilih Periode</option>
                            </select>
                        </div>                                                
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>    
    <script>

        const laravelApi = {
            periode_id: "",
            fetchPeriode: function(callback) {                
                $.ajax({
                    url: api('periodes'),
                    type: "GET",
                    success: function(res) {
                        callback(res)
                    },
                    error: function() {

                    }                    
                })
            }
        }

        const render = {
            renderPeriode: (data) => {
                $("#selector_periode").html(`<option value=''>Pilih Periode</option>`)
                data.map((value, index) => {
                    $("#selector_periode").append(
                        `<option value='${value.id}'>${value.periode}</option>`
                    )
                })
            }
        }

        $(document).ready(function() {
            laravelApi.fetchPeriode((data) => {
                render.renderPeriode(data)
            })
        })

    </script>
@endsection