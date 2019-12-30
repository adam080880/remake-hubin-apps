@extends('template')

@section('title', 'Perusahaan')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left mt-2 mb-2">
                <h4><b>Manage Perusahaan</b></h4>                
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tabel Perusahaan</h2>
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
                            <div class="loading-page" id="loading_">
                                <div class="loading ml-auto mr-auto mt-5 mb-5">
                                    <div class="bar"></div>
                                </div>
                            </div>

                            <div class="card-box table-responsive d-none" id="content_">
                                <table class="table table-striped table-bordered dataTable" id="table" style="width:100%">
                                    <thead class="thead">
                                        <tr>
                                            <th>No</th>
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

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <form id="form" method="post">
                <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><b>Tambah Perusahaan</b></h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                </div>
                <div class="modal-body w-50 m-auto">                    
                    <div class="form-group">
                        <label for="nama" class="label-control">Nama</label>
                        <input type="text" name="name" id="name" placeholder="Nama Perusahaan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="penerima" class="label-control">Penerima</label>
                        <input type="text" name="penerima" id="penerima" placeholder="Penerima" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="kecamatan" class="label-control">Kecamatan</label>
                        <input type="text" name="kecamatan" id="kecamatan" placeholder="Kecamatan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="kab_or_kota" class="label-control">Kota / Kabupaten</label>
                        <input type="text" name="kab_or_kota" id="kab_or_kota" placeholder="Kota / Kabupaten" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="provinsi" class="label-control">Provinsi</label>
                        <input type="text" name="provinsi" id="provinsi" placeholder="Provinsi" class="form-control"/>
                    </div>                    
                    <div class="form-group">
                        <label for="location" class="label-control">Lokasi</label>
                        <input type="text" name="location" id="location" placeholder="Lokasi" class="form-control"/>
                    </div>      
                    <div class="form-group">
                        <label for="alamat" class="label-control">Alamat Lengkap</label>
                        <textarea name="alamat" id="alamat" placeholder="Alamat Lengkap" class="form-control"></textarea>
                    </div>               
                    <div class="form-group">
                        <label for="phone" class="label-control">Phone</label>
                        <input type="text" name="phone" id="phone" placeholder="phone" class="form-control"/>
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

    <div class="modal fade bs-example-modal-edit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <form id="form_edit" method="post">
                <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><b>Edit Perusahaan</b></h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                </div>
                <div class="modal-body w-50 m-auto">                    
                    <div class="form-group">
                        <label for="name_edit" class="label-control">Nama</label>
                        <input type="text" name="name" id="name_edit" placeholder="Nama Perusahaan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="penerima_edit" class="label-control">Penerima</label>
                        <input type="text" name="penerima" id="penerima_edit" placeholder="Penerima" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="kecamatan_edit" class="label-control">Kecamatan</label>
                        <input type="text" name="kecamatan" id="kecamatan_edit" placeholder="Kecamatan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="kab_or_kota_edit" class="label-control">Kota / Kabupaten</label>
                        <input type="text" name="kab_or_kota" id="kab_or_kota_edit" placeholder="Kota / Kabupaten" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="provinsi_edit" class="label-control">Provinsi</label>
                        <input type="text" name="provinsi" id="provinsi_edit" placeholder="Provinsi" class="form-control"/>
                    </div>                    
                    <div class="form-group">
                        <label for="location_edit" class="label-control">Lokasi</label>
                        <input type="text" name="location" id="location_edit" placeholder="Lokasi" class="form-control"/>
                    </div>      
                    <div class="form-group">
                        <label for="alamat_edit" class="label-control">Alamat Lengkap</label>
                        <textarea name="alamat" id="alamat_edit" placeholder="Alamat Lengkap" class="form-control"></textarea>
                    </div>               
                    <div class="form-group">
                        <label for="phone_edit" class="label-control">Phone</label>
                        <input type="text" name="phone" id="phone_edit" placeholder="phone" class="form-control"/>
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
            perusahaan_id: "",
            perusahaan: [],
            fetchCompany: function(callback) {
                $("#content_").addClass('d-none')
                $("#content_").removeClass('d-block')

                $('#loading_').addClass('d-block')
                $('#loading_').removeClass('d-none')

                $.ajax({
                    url: api('companies'),
                    method: "GET",
                    success: function(res) {
                        this.perusahaan = res
                        callback(this.perusahaan)
                    },
                    error: function(XMLHttpRequest, status, error) {
                        console.log(error)
                    },
                    complete: function() {
                        $("#content_").addClass('d-block')
                        $("#content_").removeClass('d-none')

                        $('#loading_').addClass('d-none')
                        $('#loading_').removeClass('d-block')
                    }
                })
            },
            post: function(callback) {
                $("#content_").addClass('d-none')
                $("#content_").removeClass('d-block')

                $('#loading_').addClass('d-block')
                $('#loading_').removeClass('d-none')

                $.ajax({
                    url: api('company'),
                    method: "POST",
                    data: {
                        name: $("#name").val(),
                        address: $("#alamat").val(),
                        receiver: $("#penerima").val(),
                        kecamatan: $("#kecamatan").val(),
                        kab_or_kota: $("#kab_or_kota").val(),
                        provinsi: $("#provinsi").val(),
                        location: $("#location").val(),
                        phone: $("#phone").val()
                    },
                    success: function(res) {
                        callback()
                    },
                    error: function() {

                    },
                    complete: function() {

                    }
                })
            },
            delete: function(id) {

                if(!confirm('Yakin ingin dihapus?')) {
                    return
                }

                $("#content_").addClass('d-none')
                $("#content_").removeClass('d-block')

                $('#loading_').addClass('d-block')
                $('#loading_').removeClass('d-none')

                $.ajax({
                    url: api('company'),
                    method: "DELETE",
                    data: {
                        id: id
                    },
                    success: function(res) {
                        laravelApi.fetchCompany((data) => {
                            render.perusahaan(data)
                        })
                    }
                })
            },
            find: function(id, callback) {
                $.ajax({
                    url: api(`company/${id}`),
                    method: "GET",                                        
                    success: function(res) {
                        callback(res)
                    }
                })
            },
            put: function(callback) {
                $("#content_").addClass('d-none')
                $("#content_").removeClass('d-block')

                $('#loading_').addClass('d-block')
                $('#loading_').removeClass('d-none')

                $.ajax({
                    url: api(`company`),
                    method: "PUT",
                    data: {
                        id: laravelApi.perusahaan_id,
                        name: $("#name_edit").val(),
                        address: $("#alamat_edit").val(),
                        receiver: $("#penerima_edit").val(),
                        kecamatan: $("#kecamatan_edit").val(),
                        kab_or_kota: $("#kab_or_kota_edit").val(),
                        provinsi: $("#provinsi_edit").val(),
                        location: $("#location_edit").val(),
                        phone: $("#phone_edit").val()
                    },
                    success: function(res) {
                        callback()
                    }
                })
            }
        }

        const render = {
            perusahaan: function(data) {
                window.tableData.clear()
                data.map((value, index) => {
                    window.tableData.row.add([
                        `${index+1}`,
                        value.name,
                        value.address,
                        value.location,
                        value.receiver,
                        value.phone,
                        `<button class='fa fa-trash btn btn-danger' onclick='laravelApi.delete(${value.id})'></button>` + 
                        `<button class='fa fa-edit text-white btn btn-warning' onclick='render.edit(${value.id})'></button>` +
                        `<a href='siswa/${value.id}' class='fa fa-info-circle btn btn-info'></a>` 
                    ])
                })

                window.tableData.draw()
            },
            edit: function(id) {
                laravelApi.find(id, function(res) {
                    $('.bs-example-modal-edit').modal('show')
                    $("#name_edit").val(res.name)
                    $("#alamat_edit").val(res.address)
                    $("#penerima_edit").val(res.receiver)
                    $("#kecamatan_edit").val(res.kecamatan)
                    $("#kab_or_kota_edit").val(res.kab_or_kota)
                    $("#provinsi_edit").val(res.provinsi)
                    $("#location_edit").val(res.location)
                    $("#phone_edit").val(res.phone)
                    laravelApi.perusahaan_id = res.id
                })
            }
        }

        $(document).ready(function() {

            laravelApi.fetchCompany((data) => {
                render.perusahaan(data)
            })

            $("#form").submit(function(e) {
                e.preventDefault()

                laravelApi.post(() => {
                    laravelApi.fetchCompany((data) => {
                        render.perusahaan(data)
                    })
                })

                $(this).trigger('reset')   
                $(".bs-example-modal-lg").modal('hide')
            })

            $("#form_edit").submit(function(e) {
                e.preventDefault()

                laravelApi.put(() => {
                    laravelApi.fetchCompany((data) => {
                        render.perusahaan(data)
                    })
                })
                laravelApi.perusahaan_id = ""
                $(this).trigger('reset')
                $(".bs-example-modal-edit").modal('hide')
            })

        })
    </script>
@endsection