@extends('template')

@section('style')
    <!-- Datatables -->    
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
@endsection

@section('title', 'Siswa')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left mt-2 mb-2">
                <h4><b>Manage Siswa</b></h4>                
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
                        <div class="col-sm-12 col-lg-6">                            
                            <select name="" id="selector_angkatan" class="form-control">
                                <option value="">Pilih Angkatan</option>
                            </select>
                        </div>                        
                        <div class="col-sm-12 col-lg-6">
                            <select name="" id="selector_kelas" class="form-control">
                                <option value="">Pilih Kelas</option>
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
                    <h2>Tabel Siswa</h2>
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
                                <p>Pilih kelas terlebih dahulu</p>
                            </div>
                            <div class="loading-page d-none" id="loading_">
                                <div class="loading ml-auto mr-auto mt-5 mb-5">
                                    <div class="bar"></div>
                                </div>
                            </div>
                            <div class="card-box table-responsive d-none" id="content_">
                                <p>
                                    Kelas:<b id="kelas"></b> <br/>
                                    Jurusan:<span id="jurusan"></span> <br/>
                                    Wali Kelas:<span id="walas"></span>
                                </p>
                                <table class="table table-striped table-bordered dataTable" id="table" style="width:100%">
                                    <thead class="thead">
                                        <tr>
                                            <th>No</th>
                                            <th>Nisn</th>
                                            <th>Nis</th>
                                            <th>Nama</th>
                                            <th>Telp</th>
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

    <div class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <form id="form" method="post">
                <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><b>Tambah Siswa</b></h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                </div>
                <div class="modal-body w-50 m-auto">                    
                    <div class="form-group">
                        <label for="nama" class="label-control">Nama</label>
                        <input type="text" name="nama" id="nama" placeholder="Nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nisn" class="label-control">Nisn</label>
                        <input type="text" name="nisn" id="nisn" placeholder="Nisn" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nis" class="label-control">Nis</label>
                        <input type="text" name="nis" id="nis" placeholder="Nis" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="telp" class="label-control">No Telp</label>
                        <input type="text" name="telp" id="telp" placeholder="No Telp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="kelas_select" class="label-control">Kelas</label>
                        <select name="kelas" class="form-control" id="kelas_select"></select>
                    </div>                    
                    <div class="form-group">
                        <label for="" class="label-control">Action</label>
                        <div class="d-block">
                            <button type="submit" class="btn btn-primary" style="background-color: #1abb9c"><span class="fa fa-save"></span> Save</button>
                            <button type="reset" class="btn btn-danger"><span class="fa fa-times-circle"></span> Reset</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">              
                </div>
            </form>

          </div>
        </div>
    </div>

    <div class="modal fade bs-example-modal-edit" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <form id="form_edit" method="post">
                <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><b>Edit Siswa</b></h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                </div>
                <div class="modal-body w-50 m-auto">                    
                    <div class="form-group">
                        <label for="nama_edit" class="label-control">Nama</label>
                        <input type="text" name="nama" id="nama_edit" placeholder="Nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nisn_edit" class="label-control">Nisn</label>
                        <input type="text" name="nisn" id="nisn_edit" placeholder="Nisn" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nis_edit" class="label-control">Nis</label>
                        <input type="text" name="nis" id="nis_edit" placeholder="Nis" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="telp_edit" class="label-control">No Telp</label>
                        <input type="text" name="telp" id="telp_edit" placeholder="No Telp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="kelas_edit_select" class="label-control">Kelas</label>
                        <select name="kelas" class="form-control" id="kelas_edit_select"></select>
                    </div>    
                    <div class="form-group">
                        <label for="" class="label-control">Action</label>
                        <div class="d-block">
                            <button type="submit" class="btn btn-primary" style="background-color: #1abb9c"><span class="fa fa-save"></span> Save</button>
                            <button type="reset" class="btn btn-danger"><span class="fa fa-times-circle"></span> Reset</button>
                        </div>
                    </div>                
                </div>
                <div class="modal-footer">                              
                </div>
            </form>

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

        const tableData = $("#table").DataTable({
                initComplete: function() {
                    $(".dataTables_filter").addClass('text-right')
                }
            })        
            window.tableData = tableData

        const laravelApi = {
            student_id: "",
            angkatan_id: "",
            kelas_id: "",
            kelas_idAdd: "",
            angkatan: [],
            kelas: [],
            siswa: [],
            kelas_selected: {},
            fetchAngkatan: function(callback) {                
                $.ajax({
                    url: api('generations'),
                    method: "GET",
                    success: function(res) {
                        this.angkatan = res
                        callback(this.angkatan)
                    },
                    error: function(XMLHttpRequest, status, error) {
                        console.log(error)
                    }
                })
            },
            fetchKelas: function(callback) {  
                $('#before').removeClass('d-none')
                $('#before').addClass('d-block')

                $("#content_").addClass('d-none')
                $("#content_").removeClass('d-block')

                $('#loading_').addClass('d-none')
                $('#loading_').removeClass('d-block')
                
                $.ajax({
                    url: api(`generation/${this.angkatan_id}`),
                    method: "GET",
                    success: function(res) {
                        this.kelas = res.classrooms
                        callback(this.kelas)                                              
                    },
                    error: function(XMLHttpRequest, status, error) {
                        console.log(error)
                    }
                })
            },
            fetchSiswa: function(callback) {                
                $('#before').removeClass('d-block')
                $('#before').addClass('d-none')

                $("#content_").addClass('d-none')
                $("#content_").removeClass('d-block')

                $('#loading_').addClass('d-block')
                $('#loading_').removeClass('d-none')

                $.ajax({
                    url: api(`classroom/${this.kelas_id}`),
                    method: "GET",
                    success: function(res) {
                        if(res.students) {
                            this.siswa = res.students
                        } else {
                            this.siswa = []
                        }
                        $("#loading_").removeClass('d-block')
                        $("#loading_").addClass('d-none')
                        
                        $("#content_").removeClass('d-none')
                        $("#content_").addClass('d-block')

                        callback(this.siswa)
                        
                    }
                })
            },
            deleteSiswa: function(id) {                
                if(!confirm('Yakin ingin dihapus?')) {                    
                    return
                }

                $("#content_").addClass('d-none')
                $("#content_").removeClass('d-block')

                $('#loading_').addClass('d-block')
                $('#loading_').removeClass('d-none')

                let this_ = this

                $.ajax({
                    url: api(`student`),
                    method: 'DELETE',
                    data: {
                        id: id
                    },
                    success: function(res) {                                              
                        this_.fetchSiswa((data) => {
                            render.table(data)
                        })                                                
                    }
                })
            },
            fetchAllKelas: function(callback) {
                $.ajax({
                    url: api(`classrooms`),
                    type: "GET",
                    success: function(res) {
                        callback(res)                        
                    }
                })
            },
            post: function(callback) {

                $('#before').removeClass('d-block')
                $('#before').addClass('d-none')  

                $("#content_").addClass('d-none')
                $("#content_").removeClass('d-block')

                $('#loading_').addClass('d-block')
                $('#loading_').removeClass('d-none')

                $.ajax({
                    url:  api(`student`),
                    type: "POST",
                    data: {
                        name: $("#nama").val(),
                        nisn: $("#nisn").val(),
                        nis: $("#nis").val(),
                        telp: $("#telp").val(),
                        classroom_id: $("#kelas_select").val()
                    },
                    success: function(res) {
                        callback(res)
                    },
                    error: function() {
                        $('#before').removeClass('d-block')
                        $('#before').addClass('d-none')                          
                        $('#loading_').removeClass('d-block')
                        $('#loading_').addClass('d-none')

                        if(laravelApi.kelas_id) {                            
                            $("#content_").removeClass('d-none')
                            $("#content_").addClass('d-block')
                        } else {                              
                            $('#before').addClass('d-block')
                            $('#before').removeClass('d-none')                

                            $("#content_").addClass('d-none')
                            $("#content_").removeClass('d-block')
                        }
                    },                    
                })
            },
            find: function(id, callback) {
                $.ajax({
                    url: api(`student/${id}`),
                    type: "GET",
                    success: (data) => {
                        laravelApi.student_id = id
                        callback(data)
                    }
                })
            },
            put: function(callback) {

                $('#before').removeClass('d-block')
                $('#before').addClass('d-none')  

                $("#content_").addClass('d-none')
                $("#content_").removeClass('d-block')

                $('#loading_').addClass('d-block')
                $('#loading_').removeClass('d-none')

                $.ajax({
                    url: api(`student`),
                    type: "PUT",
                    data: {
                        id: laravelApi.student_id,
                        name: $("#nama_edit").val(),
                        nisn: $("#nisn_edit").val(),
                        nis: $("#nis_edit").val(),
                        telp: $("#telp_edit").val(),
                        classroom_id: $("#kelas_edit_select").val()
                    },
                    success:  (data) => {
                        callback(data)
                    },
                    error: () => {
                        $('#before').removeClass('d-block')
                        $('#before').addClass('d-none')                          
                        $('#loading_').removeClass('d-block')
                        $('#loading_').addClass('d-none')

                        if(laravelApi.kelas_id) {                            
                            $("#content_").removeClass('d-none')
                            $("#content_").addClass('d-block')
                        } else {                              
                            $('#before').addClass('d-block')
                            $('#before').removeClass('d-none')                

                            $("#content_").addClass('d-none')
                            $("#content_").removeClass('d-block')
                        }
                    }
                })
            }
        }

        const render = {
            info: (data) => {
                $("#kelas").html(data.kelas)
                $("#walas").html(data.walas)
                $("#jurusan").html(data.jurusan)
            },
            table: (data) => {  
                window.tableData.clear()
                data.map(function(value, index) {
                    window.tableData.row.add([
                        `${index+1}`,
                        value.nisn,
                        value.nis,
                        value.name,
                        value.telp,
                        `<button class='fa fa-trash btn btn-danger' onclick='laravelApi.deleteSiswa(${value.id})'></button>`
                        + `<button class='fa fa-edit text-white btn btn-warning' onclick='render.editSiswa(${value.id})'></button>`
                        + `<a href='siswa/${value.id}' class='fa fa-info-circle btn btn-info'></a>` 
                    ])
                })                
                window.tableData.draw()
            },
            angkatan: (data) => {
                $('#selector_angkatan').html(`<option value=''>Pilih Angkatan</option>`)
                data.map((value, index) => {
                    $('#selector_angkatan').append(`<option value='${value.id}'>${value.generation}</option>`)
                })
            },
            kelas: (data) => {
                $('#selector_kelas').html(`<option value=''>Pilih Kelas</option>`)
                data.map((value, index) => {                        
                    $("#selector_kelas").append(`<option value='${value.id}' data-walas='${value.homeroom_teacher}' data-jurusan='${value.major.major}' data-kelas='${value.classroom}'>${value.classroom}</option>`)
                })
            },
            kelasAutoComplete: (data) => {
                $('#kelas_select').html("")
                $('#kelas_edit_select').html("")
                data.map((value,index) => {
                    $('#kelas_select').append(`<option value='${value.id}'>${value.generation.generation} - ${value.classroom}</option>`)
                    $('#kelas_edit_select').append(`<option value='${value.id}'>${value.generation.generation} - ${value.classroom}</option>`)
                })

                $('#kelas_select').select2({
                    theme:"bootstrap",
                    width:"100%"
                })
                $('#kelas_edit_select').select2({
                    theme:"bootstrap",
                    width:"100%"
                })                
                
            },
            editSiswa: (id) => {
                laravelApi.find(id, function(res) {
                    $('.bs-example-modal-edit').modal('show')
                    $("#nama_edit").val(res.name)
                    $("#nisn_edit").val(res.nisn)
                    $("#nis_edit").val(res.nis)
                    $("#telp_edit").val(res.telp) 
                    $("#kelas_edit").val(res.classroom_id)
                    laravelApi.kelas_idAdd = res.classroom_id
                })
            }            
        }

        $(document).ready(function() {

            
            laravelApi.fetchAllKelas((data) => {
                render.kelasAutoComplete(data)
            })
            
            laravelApi.fetchAngkatan((data) => {
                render.angkatan(data)
            })

            $("#form").submit(function(e) {
                e.preventDefault()
                laravelApi.post((data) => {
                    laravelApi.fetchSiswa((data) => {
                        render.table(data)
                    })
                })        
                laravelApi.kelas_idAdd = ""
                $(this).trigger('reset')   
                $(".bs-example-modal-lg").modal('hide')
            })

            $("#form_edit").submit(function(e) {
                e.preventDefault()

                laravelApi.put((data) => {
                    laravelApi.fetchSiswa((data) => {
                        render.table(data)
                    })
                })
                laravelApi.kelas_idAdd = ""
                laravelApi.student_id = ""
                $(this).trigger('reset')
                $(".bs-example-modal-edit").modal('hide')
            })

            $("#selector_angkatan").change(function() {
                laravelApi.angkatan_id = $(this).val()
                laravelApi.fetchKelas((data) => {
                    render.kelas(data)
                })
            })

            $("#selector_kelas").change(function() {
                laravelApi.kelas_id = $(this).val()                
                laravelApi.kelas_selected = {
                    walas: $(this).children('option:selected').data('walas'),
                    kelas: $(this).children('option:selected').data('kelas'),
                    jurusan: $(this).children('option:selected').data('jurusan')
                }
                render.info(laravelApi.kelas_selected)
                laravelApi.fetchSiswa((data) => {
                    render.table(data)
                })
                
            })            
        })
    </script>

@endsection