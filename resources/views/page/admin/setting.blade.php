@extends('template')

@section('style')
    <!-- Datatables -->    
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    
    <style>
        .x_content {
            height:200px !important;
            position:relative;
            overflow-y:hidden;
            display:block;
        }

        .x_content:hover {
            overflow-y: scroll;
        }
    </style>
@endsection

@section('title', 'Pengaturan')

@section('content')
    
    <div class="">
        <div class="page-title">
            <div class="title_left mt-2 mb-2">
                <h4><b>Pengaturan</b></h4>                
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="x_panel">                
                <div class="x_title">
                    <h2>Angkatan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a class="link" data-toggle="modal" data-target=".bs-example-modal-angkatan"><i class="fa fa-plus"></i></a>
                        </li>
                        <li>
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a ><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content"> 
                    <table class="table table-hover table-bordered">
                        <thead class="thead">
                            <tr>
                                <th width="10%">No</th>
                                <th width="50%">Angkatan</th>
                                <th width="40%">Action</th>
                            </tr>
                        </thead>

                        <tbody id="table_angkatan">
                            
                        </tbody>
                    </table>                   
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="x_panel">                
                <div class="x_title">
                    <h2>Periode</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a class="link" data-toggle="modal" data-target=".bs-example-modal-periode"><i class="fa fa-plus"></i></a>
                        </li>
                        <li>
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a ><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table table-hover table-bordered">
                        <thead class="thead">
                            <tr>
                                <th width="10%">No</th>
                                <th width="50%">Periode</th>
                                <th width="40%">Action</th>
                            </tr>
                        </thead>

                        <tbody id="table_periode">
                            
                        </tbody>
                    </table>           
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="x_panel">                
                <div class="x_title">
                    <h2>Jurusan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a class="link" data-toggle="modal" data-target=".bs-example-modal-jurusan"><i class="fa fa-plus"></i></a>
                        </li>
                        <li>
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a ><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table table-hover table-bordered">
                        <thead class="thead">
                            <tr>
                                <th width="10%">No</th>
                                <th width="50%">Jurusan</th>
                                <th width="40%">Action</th>
                            </tr>
                        </thead>

                        <tbody id="table_jurusan">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>        
    </div>    
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="x_panel">                
                    <div class="x_title">
                        <h2>Kelas</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
                                <a class="link" data-toggle="modal" data-target=".bs-example-modal-kelas"><i class="fa fa-plus"></i></a>
                            </li>
                            <li>
                                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a ><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table table-hover table-bordered">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>
                                    <th>Kelas</th>
                                    <th>Wali Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Angkatan</th>
                                    <th>Periode</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
    
                            <tbody id="table_kelas">
                                
                            </tbody>
                        </table>           
                    </div>
                </div>
            </div>
        </div>

    {{-- Jurusan Add --}}

        <div class="modal fade bs-example-modal-jurusan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <form id="formJurusan" method="post">
                    <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"><b>Tambah Jurusan</b></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <div class="modal-body w-50 m-auto">                    
                        <div class="form-group">
                            <label for="" class="label-control">Jurusan</label>
                            <input type="text" name="jurusan" id="jurusan" class="form-control"/>
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

        {{-- Edit --}}

        <div class="modal fade bs-example-modal-jurusan_edit" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <form id="formJurusan_edit" method="post">
                    <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"><b>Tambah Jurusan</b></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <div class="modal-body w-50 m-auto">                    
                        <div class="form-group">
                            <label for="" class="label-control">Jurusan</label>
                            <input type="text" name="jurusan" id="jurusan_edit" class="form-control"/>
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

    {{-- /Jurusan Add --}}

    {{-- Kelas Add --}}

        <div class="modal fade bs-example-modal-kelas" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <form id="formKelas" method="post">
                    <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"><b>Tambah Kelas</b></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <div class="modal-body w-50 m-auto">                    
                        <div class="form-group">
                            <label for="" class="label-control">Kelas</label>
                            <input type="text" name="kelas" id="kelas" class="form-control"/>
                            <div class="form-group">
                                <label for="" class="label-control">Wali Kelas</label>
                                <input type="text" name="walas" id="walas" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="" class="label-control">Angkatan</label>
                                <select type="text" name="angkatan" id="angkatan_kelas" class="form-control"/></select>
                            </div>
                            <div class="form-group">
                                <label for="" class="label-control">Periode</label>
                                <select type="text" name="periode" id="periode_kelas" class="form-control"/></select>
                            </div>
                            <div class="form-group">
                                <label for="" class="label-control">Jurusan</label>
                                <select type="text" name="jurusan" id="jurusan_kelas" class="form-control"/></select>
                            </div>
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

        {{-- Edit --}}

        <div class="modal fade bs-example-modal-kelas_edit" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <form id="formKelas_edit" method="post">
                    <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"><b>Edit Kelas</b></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <div class="modal-body w-50 m-auto">                    
                        <div class="form-group">
                            <label for="" class="label-control">Kelas</label>
                            <input type="text" name="kelas" id="kelas_edit" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="" class="label-control">Wali Kelas</label>
                            <input type="text" name="walas" id="walas_edit" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="" class="label-control">Angkatan</label>
                            <select type="text" name="angkatan" id="angkatan_edit_kelas" class="form-control"/></select>
                        </div>
                        <div class="form-group">
                            <label for="" class="label-control">Periode</label>
                            <select type="text" name="periode" id="periode_edit_kelas" class="form-control"/></select>
                        </div>
                        <div class="form-group">
                            <label for="" class="label-control">Jurusan</label>
                            <select type="text" name="jurusan" id="jurusan_edit_kelas" class="form-control"/></select>
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

    {{-- /Kelas Add --}}

    {{-- Periode Add --}}

        <div class="modal fade bs-example-modal-periode" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <form id="formPeriode" method="post">
                    <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"><b>Tambah Periode</b></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <div class="modal-body w-50 m-auto">                    
                        <div class="form-group">
                            <label for="" class="label-control">Periode</label>
                            <input type="text" name="periode" id="periode" class="form-control"/>
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

        {{-- Edit --}}

        <div class="modal fade bs-example-modal-periode_edit" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <form id="formPeriode_edit" method="post">
                    <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"><b>Tambah Periode</b></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <div class="modal-body w-50 m-auto">                    
                        <div class="form-group">
                            <label for="" class="label-control">Periode</label>
                            <input type="text" name="periode" id="periode_edit" class="form-control"/>
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

    {{-- /Periode Add --}}

    {{-- Angkatan Add --}}

        <div class="modal fade bs-example-modal-angkatan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <form id="formAngkatan" method="post">
                    <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"><b>Tambah Angkatan</b></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <div class="modal-body w-50 m-auto">                                            
                        <div class="form-group">
                            <label for="" class="label-control">From</label>
                            <input type="text" name="from" id="from" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="" class="label-control">To</label>
                            <input type="text" name="to" id="to" class="form-control"/>
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

        {{-- Edit --}}

        <div class="modal fade bs-example-modal-angkatan_edit" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <form id="formAngkatan_edit" method="post">
                    <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"><b>Edit Angkatan</b></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <div class="modal-body w-50 m-auto">                                            
                        <div class="form-group">
                            <label for="" class="label-control">From</label>
                            <input type="text" name="from_edit" id="from_edit" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="" class="label-control">To</label>
                            <input type="text" name="to_edit" id="to_edit" class="form-control"/>
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

    {{-- /Angkatan Add --}}
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
    {{-- <script src="../vendors/select2_improve/select2.min.js"></script> --}}
    <script>

        const laravelApiFetchAll = {
            generation: (callback) => {
                $.ajax({
                    url: api('generations'),
                    type: "GET",
                    success:(data) => {
                        callback(data)
                    }
                })
            },
            major: (callback) => {
                $.ajax({
                    url: api('majors'),
                    type: "GET",
                    success: (data) => {
                        callback(data)
                    }
                })
            },
            periode: (callback) => {
                $.ajax({
                    url: api('periodes'),
                    type: "GET",
                    success: (data) => {
                        callback(data)
                    }
                })
            }
        }

        const laravelApiAngkatan = {
            angkatan_id: "",
            fetch: function(callback) {
                $.ajax({
                    url: api('generations'),
                    type: "GET",
                    success: (data) => {
                        callback(data)
                    }
                })
            },
            post: function(callback) {

                let angkatan = $("#formAngkatan #from").val() + "/" + $("#formAngkatan #to").val()

                $.ajax({
                    url: api('generation'),
                    type: "POST",
                    data: {
                        from: $("#formAngkatan #from").val(),
                        to: $("#formAngkatan #to").val(),
                        generation: angkatan
                    },
                    success: function() {
                        callback()
                    }
                })
            },
            put: function(callback) {

                let angkatan = $("#formAngkatan_edit #from_edit").val() + "/" + $("#formAngkatan_edit #to_edit").val()

                let this_ = this

                $.ajax({
                    url: api('generation'),
                    type: "PUT",
                    data: {
                        id: this_.angkatan_id,
                        from: $("#formAngkatan_edit #from_edit").val(),
                        to: $("#formAngkatan_edit #to_edit").val(),
                        generation: angkatan
                    },
                    success: function() {
                        this_.angkatan_id = ""
                        callback()
                    }
                })
            },
            delete: function(id) {

                if(!confirm("Yakin item ini akan dihapus?")) {
                    return ;
                }

                let this_ = this

                $.ajax({
                    url: api('generation'),
                    type: "DELETE",
                    data: {
                        id: id
                    },
                    success: function() {
                        this_.fetch((data) => {
                            renderAngkatan.table(data)
                        })
                    }
                })
            },
            find: (id, callback) => {
                $.ajax({
                    url: api(`generation/${id}`),
                    type: "GET",
                    success: (data) => {
                        callback(data)
                    }
                })
            }
        }

        const laravelApiJurusan = {
            jurusan_id: "",
            fetch: function(callback) {
                $.ajax({
                    url: api('majors'),
                    type: "GET",
                    success: (data) => {
                        callback(data)
                    }
                })
            },
            post: function(callback) {            
                $.ajax({
                    url: api('major'),
                    type: "POST",
                    data: {
                        major: $("#jurusan").val()
                    },
                    success: function() {
                        callback()
                    }
                })
            },
            put: function(callback) {
                let this_ = this
                $.ajax({
                    url: api('major'),
                    type: "PUT",
                    data: {
                        id: this_.jurusan_id,
                        major: $("#jurusan_edit").val()
                    },
                    success: function() {
                        this_.jurusan_id = ""
                        callback()
                    }
                })
            },
            delete: function(id) {

                if(!confirm("Yakin item ini akan dihapus?")) {
                    return ;
                }

                let this_ = this

                $.ajax({
                    url: api('major'),
                    type: "DELETE",
                    data: {
                        id: id
                    },
                    success: function() {
                        this_.fetch((data) => {
                            renderJurusan.table(data)
                        })
                    }
                })
            },
            find: (id, callback) => {
                $.ajax({
                    url: api(`major/${id}`),
                    type: "GET",
                    success: (data) => {
                        callback(data)
                    }
                })
            }
        }

        const laravelApiPeriode = {
            periode_id: "",
            fetch: function(callback) {
                $.ajax({
                    url: api('periodes'),
                    type: "GET",
                    success: (data) => {
                        callback(data)
                    }
                })
            },
            post: function(callback) {            
                $.ajax({
                    url: api('periode'),
                    type: "POST",
                    data: {
                        periode: $("#periode").val()
                    },
                    success: function() {
                        callback()
                    }
                })
            },
            put: function(callback) {
                let this_ = this
                $.ajax({
                    url: api('periode'),
                    type: "PUT",
                    data: {
                        id: this_.periode_id,
                        periode: $("#periode_edit").val()
                    },
                    success: function() {
                        this_.periode_id = ""
                        callback()
                    }
                })
            },
            delete: function(id) {

                if(!confirm("Yakin item ini akan dihapus?")) {
                    return ;
                }

                let this_ = this

                $.ajax({
                    url: api('periode'),
                    type: "DELETE",
                    data: {
                        id: id
                    },
                    success: function() {
                        this_.fetch((data) => {
                            renderPeriode.table(data)
                        })
                    }
                })
            },
            find: (id, callback) => {
                $.ajax({
                    url: api(`periode/${id}`),
                    type: "GET",
                    success: (data) => {
                        callback(data)
                    }
                })
            }
        }

        const laravelApiKelas = {
            classroom_id: "",
            fetch: function(callback) {
                $.ajax({
                    url: api('classrooms'),
                    type: "GET",
                    success: (data) => {
                        callback(data)
                    }
                })
            },
            post: function(callback) {            
                $.ajax({
                    url: api('classroom'),
                    type: "POST",
                    data: {
                        classroom: $("#kelas").val(),
                        homeroom_teacher: $("#walas").val(),
                        generation_id: $("#angkatan_kelas").val(),
                        periode_id: $("#periode_kelas").val(),
                        major_id: $("#jurusan_kelas").val(),
                    },
                    success: function() {
                        callback()
                    }
                })
            },
            put: function(callback) {
                let this_ = this
                $.ajax({
                    url: api('classroom'),
                    type: "PUT",
                    data: {
                        id: this_.classroom_id,                        
                        classroom: $("#kelas_edit").val(),
                        homeroom_teacher: $("#walas_edit").val(),
                        generation_id: $("#angkatan_edit_kelas").val(),
                        periode_id: $("#periode_edit_kelas").val(),
                        major_id: $("#jurusan_edit_kelas").val(),                    
                    },
                    success: function() {
                        this_.classroom_id = ""
                        callback()
                    }
                })
            },
            delete: function(id) {

                if(!confirm("Yakin item ini akan dihapus?")) {
                    return ;
                }

                let this_ = this

                $.ajax({
                    url: api('classroom'),
                    type: "DELETE",
                    data: {
                        id: id
                    },
                    success: function() {
                        this_.fetch((data) => {
                            renderKelas.table(data)
                        })
                    }
                })
            },
            find: (id, callback) => {
                $.ajax({
                    url: api(`classroom/${id}`),
                    type: "GET",
                    success: (data) => {
                        callback(data)
                    }
                })
            }
        }

        const renderAngkatan = {
            table: (data) => {
                $("#table_angkatan").html("")
                data.map((value, index) => {
                    $("#table_angkatan").append(`
                        <tr>
                            <td>${index+1}</td>
                            <td>${value.generation}</td>
                            <td>
                                <button class='fa fa-trash btn btn-danger' onclick='laravelApiAngkatan.delete(${value.id})'></button>
                                <button class='fa fa-edit btn text-white btn-warning' onclick='renderAngkatan.find(${value.id})'></button>
                            </td>
                        </tr>
                    `)
                })
            },
            find: (id) => {
                laravelApiAngkatan.find(id, (data) => {
                    $("#from_edit").val(data.from)
                    $("#to_edit").val(data.to)
                    $(".bs-example-modal-angkatan_edit").modal('show')
                    laravelApiAngkatan.angkatan_id = data.id
                })
            }
        }

        const renderJurusan = {
            table: (data) => {
                $("#table_jurusan").html("")
                data.map((value, index) => {
                    $("#table_jurusan").append(`
                        <tr>
                            <td>${index+1}</td>
                            <td>${value.major}</td>
                            <td>
                                <button class='fa fa-trash btn btn-danger' onclick='laravelApiJurusan.delete(${value.id})'></button>
                                <button class='fa fa-edit btn text-white btn-warning' onclick='renderJurusan.find(${value.id})'></button>
                            </td>
                        </tr>
                    `)
                })
            },
            find: (id) => {
                laravelApiJurusan.find(id, (data) => {
                    $("#jurusan_edit").val(data.major)
                    $(".bs-example-modal-jurusan_edit").modal('show')
                    laravelApiJurusan.jurusan_id = data.id
                })
            }
        }

        const renderKelas = {
            table: (data) => {
                $("#table_kelas").html("")
                data.map((value, index) => {                    
                    $("#table_kelas").append(`
                        <tr>
                            <td>${index+1}</td>
                            <td>${value.classroom}</td>
                            <td>${value.homeroom_teacher}</td>                            
                            <td>${value.major.major}</td>
                            <td>${value.generation.generation}</td>
                            <td>${value.periode.periode}</td>
                            <td>
                                <button class='fa fa-trash btn btn-danger' onclick='laravelApiKelas.delete(${value.id})'></button>
                                <button class='fa fa-edit btn text-white btn-warning' onclick='renderKelas.find(${value.id})'></button>
                            </td>
                        </tr>
                    `)
                })
            },
            find: (id) => {
                laravelApiKelas.find(id, (data) => {
                    $("#kelas_edit").val(data.classroom)
                    $("#walas_edit").val(data.homeroom_teacher)
                    $("#angkatan_edit_kelas").val(data.generation_id)
                    $("#jurusan_edit_kelas").val(data.major_id)
                    $("#periode_edit_kelas").val(data.periode_id)
                    $(".bs-example-modal-kelas_edit").modal('show')
                    laravelApiKelas.classroom_id = data.id
                })
            }
        }

        const renderPeriode = {
            table: (data) => {
                $("#table_periode").html("")
                data.map((value, index) => {
                    $("#table_periode").append(`
                        <tr>
                            <td>${index+1}</td>
                            <td>${value.periode}</td>
                            <td>
                                <button class='fa fa-trash btn btn-danger' onclick='laravelApiPeriode.delete(${value.id})'></button>
                                <button class='fa fa-edit btn text-white btn-warning' onclick='renderPeriode.find(${value.id})'></button>
                            </td>
                        </tr>
                    `)
                })
            },
            find: (id) => {
                laravelApiPeriode.find(id, (data) => {
                    $("#periode_edit").val(data.periode)
                    $(".bs-example-modal-periode_edit").modal('show')
                    laravelApiPeriode.periode_id = data.id
                })
            }
        }

        const renderAll = {
            generation: (data) => {
                data.map((value, index) => {
                    $("#angkatan_kelas").append(`<option value='${value.id}'>${value.generation}</option>`)
                    $("#angkatan_edit_kelas").append(`<option value='${value.id}'>${value.generation}</option>`)                    
                })
                $('#angkatan_kelas').select2({
                    theme:"bootstrap",
                    width:"100%"
                })
                $('#angkatan_edit_kelas').select2({
                    theme:"bootstrap",
                    width:"100%"
                }) 
            },
            periode: (data) => {
                data.map((value, index) => {
                    $("#periode_kelas").append(`<option value='${value.id}'>${value.periode}</option>`)
                    $("#periode_edit_kelas").append(`<option value='${value.id}'>${value.periode}</option>`)
                })
                $('#periode_kelas').select2({
                    theme:"bootstrap",
                    width:"100%"
                })
                $('#periode_edit_kelas').select2({
                    theme:"bootstrap",
                    width:"100%"
                }) 
            },
            major: (data) => {
                data.map((value, index) => {
                    $("#jurusan_kelas").append(`<option value='${value.id}'>${value.major}</option>`)
                    $("#jurusan_edit_kelas").append(`<option value='${value.id}'>${value.major}</option>`)
                })            
                $('#jurusan_kelas').select2({
                    theme:"bootstrap",
                    width:"100%"
                })
                $('#jurusan_edit_kelas').select2({
                    theme:"bootstrap",
                    width:"100%"
                }) 
            }
        }

        $(document).ready(() => {

            laravelApiFetchAll.generation((data) => {
                renderAll.generation(data)
            })

            laravelApiFetchAll.major((data) => {
                renderAll.major(data)
            })

            laravelApiFetchAll.periode((data) => {
                renderAll.periode(data)
            })

            laravelApiAngkatan.fetch((data) => {
                renderAngkatan.table(data)
            })

            laravelApiJurusan.fetch((data) => {
                renderJurusan.table(data)
            })

            laravelApiPeriode.fetch((data) => {
                renderPeriode.table(data)
            })

            laravelApiKelas.fetch((data) => {
                renderKelas.table(data)
            })

            $("#formAngkatan").submit((e) => {
                e.preventDefault()
                
                laravelApiAngkatan.post(() => {
                    laravelApiAngkatan.fetch((data) => {
                        renderAngkatan.table(data)
                    })
                })
                $(".bs-example-modal-angkatan").modal('hide')
                $("#formAngkatan").trigger('reset')
            })

            $("#formAngkatan_edit").submit((e) => {
                e.preventDefault()

                laravelApiAngkatan.put(() => {
                    laravelApiAngkatan.fetch((data) => {
                        renderAngkatan.table(data)
                    })
                })

                $(".bs-example-modal-angkatan_edit").modal('hide')
                $("#formAngkatan_edit").trigger('reset')
            })

            $("#formJurusan").submit((e) => {
                e.preventDefault()
                
                laravelApiJurusan.post(() => {
                    laravelApiJurusan.fetch((data) => {
                        renderJurusan.table(data)
                    })
                })
                $(".bs-example-modal-jurusan").modal('hide')
                $("#formJurusan").trigger('reset')
            })

            $("#formJurusan_edit").submit((e) => {
                e.preventDefault()

                laravelApiJurusan.put(() => {
                    laravelApiJurusan.fetch((data) => {
                        renderJurusan.table(data)
                    })
                })

                $(".bs-example-modal-jurusan_edit").modal('hide')
                $("#formJurusan_edit").trigger('reset')
            })

            $("#formPeriode").submit((e) => {
                e.preventDefault()
                
                laravelApiPeriode.post(() => {
                    laravelApiPeriode.fetch((data) => {
                        renderPeriode.table(data)
                    })
                })
                $(".bs-example-modal-periode").modal('hide')
                $("#formPeriode").trigger('reset')
            })

            $("#formPeriode_edit").submit((e) => {
                e.preventDefault()

                laravelApiPeriode.put(() => {
                    laravelApiPeriode.fetch((data) => {
                        renderPeriode.table(data)
                    })
                })

                $(".bs-example-modal-periode_edit").modal('hide')
                $("#formPeriode_edit").trigger('reset')
            })

            $("#formKelas").submit((e) => {
                e.preventDefault()
                
                laravelApiKelas.post(() => {
                    laravelApiKelas.fetch((data) => {
                        renderKelas.table(data)
                    })
                })
                $(".bs-example-modal-kelas").modal('hide')
                $("#formKelas").trigger('reset')
            })

            $("#formKelas_edit").submit((e) => {
                e.preventDefault()

                laravelApiKelas.put(() => {
                    laravelApiKelas.fetch((data) => {
                        renderKelas.table(data)
                    })
                })

                $(".bs-example-modal-kelas_edit").modal('hide')
                $("#formKelas_edit").trigger('reset')
            })

        })

    </script>
@endsection