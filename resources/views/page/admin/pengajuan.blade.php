@extends('template')

@section('style')
    <!-- Datatables -->    
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <style>
        tbody tr:hover {
            cursor: pointer;
        }
    </style>
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

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Surat Pengajuan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a class="link" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus"></i></a>
                        </li>
                        <li>
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">   
                        <div class="col-sm-12">
                            <div id="before" class="text-center">
                                <p>Pilih periode terlebih dahulu</p>
                            </div>
                            <div class="loading-page d-none" id="loading_">
                                <div class="loading ml-auto mr-auto mt-5 mb-5">
                                    <div class="bar"></div>
                                </div>
                            </div>

                            <div class="card-box table-responsive d-none" id="content_">
                                <table class="table table-striped table-bordered dataTable" id="table" style="width:100%">
                                    <thead class="thead">
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Surat</th>
                                            <th>Perusahaan</th>
                                            <th>Alamat</th>
                                            <th>Lokasi</th>
                                            <th>Penerima</th>
                                            <th>No Telp</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableData">

                                    </tbody>
                                </table>
                            </div>
                        </div>                     
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- Pengajuan Add --}}

    <div class="modal fade bs-example-modal-lg row p-3" role="dialog" aria-hidden="true">
        <div class="offset-lg-1 col-lg-6 col-md-12 col-sm-12">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <form id="formPengajuan" method="post">
                        <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel"><b>Tambah Surat Pengajuan</b></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                        </div>
                        <div class="modal-body m-auto">                    
                            <div class="row">                        
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="label-control">Data Surat</label>
                                        <input type="text" name="nomor_surat" class="form-control" id="nomor_surat" placeholder="Nomor Surat">
                                    </div>
                                    <div class="form-group">
                                        <input type="date" name="tgl_surat" id="tgl_surat" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="label-control">Ke Perusahaan</label>
                                        <select name="perusahaan" id="perusahaan" class="form-control"></select>
                                    </div>                                    
                                </div>                    
                            </div>

                            
                            <label for="" class="label-control mb-0 mt-3">Siswa</label>
                            <hr class="mt-1">
                            <div id="inputSiswa">
                                
                            </div>                                                                    
                        </div>
                        <div class="modal-footer">     
                            <div class="d-block">                                
                                <button type="submit" class="btn btn-primary" style="background-color: #1abb9c"><span class="fa fa-save"></span> Save</button>
                            </div>         
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="col-lg-5 col-sm-12 col-md-12">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel"><b>Cari Siswa</b></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="search" name="search_s" id="search_s" class="form-control" placeholder="Cari siswa">
                            <small class="text-secondary">
                                *klik pada baris, untuk menambahkan siswa ke surat pengajuan
                            </small>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Nisn</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>                                    
                                </tr>
                            </thead>
                            <tbody id="tableSiswa">

                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">                        
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- /Pengajuan Add --}}

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

        const tableData = $("#table").DataTable({
                initComplete: function() {
                    $(".dataTables_filter").addClass('text-right')
                }
            })        
            window.tableData = tableData

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
            },
            fetchPengajuan: function(periode_id, callback) {
                $("#before").addClass('d-none')
                $("#before").removeClass('d-block')

                $("#loading_").addClass('d-block')
                $("#loading_").removeClass('d-none')

                $("#content_").addClass('d-none')
                $("#content_").removeClass('d-block')

                $.ajax({
                    url: api(`applicationletters/${periode_id}`),
                    type: "GET",
                    success: function(res) {
                        callback(res)
                    },
                    error: function() {

                    },
                    complete: function() {                        
                        $("#loading_").addClass('d-none')
                        $("#loading_").removeClass('d-block')

                        $("#content_").addClass('d-block')
                        $("#content_").removeClass('d-none')
                    }               
                })
            },
            fetchPerusahaan: function(callback) {
                $.ajax({
                    url: api('companies'),
                    type: "GET",
                    success: function(res) {
                        callback(res)
                    }
                })
            },
            searchSiswa: function(query, callback) {
                if(query == "") {
                    return
                }

                $.ajax({
                    url: api(`students/search`),
                    data: {
                        search: query
                    },
                    type: "GET",
                    success: (res) => {
                        callback(res)
                    }
                })
            },
            postPengajuan: function(callback) {
                let perusahaanId = $("#perusahaan").val()
                let nomorSurat = $("#nomor_surat").val()
                let tanggalSurat = $("#tgl_surat").val()

                let nisn = ""

                $("#inputSiswa").children().map((index, value) => {
                    nisn = $(value).children()[0].children[0].value

                    $.ajax({
                        url: api('applicationletter'),
                        type: "POST",
                        data: {
                            number: nomorSurat,
                            date: tanggalSurat,
                            company_id: perusahaanId,
                            nisn: nisn
                        },
                        success: (res) => {
                            callback()                            
                        }
                    })
                })
            }
        }

        const render = {
            periode: (data) => {
                $("#selector_periode").html(`<option value=''>Pilih Periode</option>`)
                data.map((value, index) => {
                    $("#selector_periode").append(
                        `<option value='${value.id}'>${value.periode}</option>`
                    )
                })
            },
            pengajuan: (data) => {
                window.tableData.clear()
                
                data.map((value, index) => {                    
                    window.tableData.row.add([
                        `${index+1}`,
                        value.number,
                        value.name,
                        value.address,
                        value.location,
                        value.receiver,
                        value.phone,
                        `<button class='fa fa-trash btn btn-danger'></button> <a class='fa fa-info-circle btn btn-info' href='./${value.number}'></a>`
                    ])
                })

                window.tableData.draw()
            },
            perusahaan: (data) => {
                $("#perusahaan").html("")
                data.map((value, index) => {
                    $("#perusahaan").append(`
                        <option value='${value.id}'>${value.name}</option>
                    `)
                })
            },
            tableSiswa: (data) => {
                $("#tableSiswa").html("")
                data.map((value, index) => {                    
                    $("#tableSiswa").append(`
                        <tr class='tambahSiswa' onclick="render.addSiswa('${value.nisn}','${value.name}','${value.telp}')">
                            <td class='nisn'>${value.nisn}</td>    
                            <td class='name'>${value.name}</td>    
                            <td class='generation'>${value.classroom.generation.generation} - ${value.classroom.classroom}</td>                            
                        </tr>
                    `)
                })
            },            
            addSiswa: (nisn, name, phone) => {
                $("#inputSiswa").append(`
                    <div class='row mt-3 mb-3'>
                        <div class='col-3'>
                            <input type='text' name='nisn' id='nisn' value='${nisn}' class='form-control'/>
                        </div>                            
                        <div class='col-4'>
                            <input type='text' name='name' id='name' value='${name}' class='form-control'/>
                        </div>                            
                        <div class='col-3'>
                            <input type='text' name='phone' id='phone' value='${phone}' class='form-control'/>
                        </div>      
                        <div class='col-2'>
                            <button type='button' class='fa fa-trash btn btn-danger form-control' onclick='render.deleteSiswa(this)'></button>    
                        </div>

                    </div>
                `)
            },
            deleteSiswa: (this_) => {                
                $(this_).parent().parent().remove()
            }
        }

        $(document).ready(function() {
            laravelApi.fetchPeriode((data) => {
                render.periode(data)
            })

            laravelApi.fetchPerusahaan((data) => {
                render.perusahaan(data)
            })            

            $("#perusahaan").select2({
                theme: "bootstrap",
                width: "100%"
            })

            $("#formPengajuan").submit((e) => {
                e.preventDefault()
                laravelApi.postPengajuan(() => {
                    laravelApi.fetchPengajuan(laravelApi.periode_id, (data) => {
                        render.pengajuan(data)
                    })
                })

                $("#inputSiswa").html("")
                $("#formPengajuan").trigger('reset')
                $(".bs-example-modal-lg").modal('hide')
            })

            $("#selector_periode").on('change', function() {
                laravelApi.periode_id = $(this).val()
                laravelApi.fetchPengajuan($(this).val(), (data) => {
                    render.pengajuan(data)
                })                    
            })

            $("#search_s").on('keyup', function(e) {
                laravelApi.searchSiswa( $(this).val(), (data) => {
                    render.tableSiswa(data)
                })
            })                    
        })

    </script>
@endsection