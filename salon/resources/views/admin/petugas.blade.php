@extends('layouts.admin')
@section('header', 'Petugas')
@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css ') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')
<div id="controller">
<<<<<<< HEAD
    <div class="row">        
        <div class="col-md-12">           
=======
    <div class="row">
        <div class="col-md-12">
>>>>>>> 171465b3980da29332f690c4fe19467e166466b9
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">DATA PETUGAS</h2><br>
                    <a href="#" @click="addData()" class="btn btn-sm btn-warning pull-right">Create New Petugas</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($petugas as $key => $petugas)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $petugas->name }}</td>
                                <td>{{ $petugas->gender }}</td>
                                <td>{{ $petugas->phone_number }}</td>
                                <td>{{ $petugas->address}}</td>
                                <td>{{ $petugas->email}}</td>
<<<<<<< HEAD
                                <td class="text-right">                                    
                                    <a href="#" @click="editData({{ $petugas }})" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#" @click="deleteData({{ $petugas->id }})" class="btn btn-secondary btn-sm">Delete</a>                                    
=======
                                <td class="text-right">
                                    <a href="#" @click="editData({{ $petugas }})" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#" @click="deleteData({{ $petugas->id }})" class="btn btn-secondary btn-sm">Delete</a>
>>>>>>> 171465b3980da29332f690c4fe19467e166466b9
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
<<<<<<< HEAD


<div class="modal fade" id="modal-overlay">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" :action="actionUrl" autocomplete="off">                
                <div class="modal-header">
                    <h4 class="modal-title">CREATE PETUGAS</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="_method" value="PUT" v-if="editStatus">

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" :value="petugasData.name" required="">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" :value="petugasData.email" required="">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" class="form-control" name="phone_number" :value="petugasData.phone_number" required="">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" :value="petugasData.address" required="">
                            <br>
                            <label for="gender">Gender</label>
                            <select name="gender">
                                <option value="P">P</option>
                                <option value="L">L</option>
                            </select>
=======

    <div class="modal fade" id="modal-overlay">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" :action="actionUrl" autocomplete="off">
                    <div class="modal-header">
                        <h4 class="modal-title">PETUGAS</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="_method" value="PUT" v-if="editStatus">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" :value="petugasData.name" required="">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" :value="petugasData.email" required="">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" class="form-control" name="phone_number" :value="petugasData.phone_number" required="">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" :value="petugasData.address" required="">
                                <br>
                                <label for="gender">Gender</label>
                                <select name="gender">
                                    <option value="P">P</option>
                                    <option value="L">L</option>
                                </select>
                            </div>
>>>>>>> 171465b3980da29332f690c4fe19467e166466b9
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<<<<<<< HEAD
</div>




=======
>>>>>>> 171465b3980da29332f690c4fe19467e166466b9
@endsection

@section('js')
<!-- DataTables  & Plugins -->
<script src="{{ asset('assets//datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets//datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets//datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets//datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets//datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets//datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets//jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets//pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets//pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets//datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets//datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets//datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script type="text/javascript">
<<<<<<< HEAD
  $(function () {
    $("#datatable").DataTable();
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    //   "responsive": true,
    // });
  });
</script>
<!-- crud vuejs -->
<script type="text/javascript">
=======
>>>>>>> 171465b3980da29332f690c4fe19467e166466b9
    var actionUrl = '{{ url('petugas') }}';
    var apiUrl = '{{ url('api/petugas') }}';

    var app = new Vue ({
        el: '#controller',
        data: {
            petugas: [],
            petugasData: {},
            actionUrl,
            apiUrl,
            editStatus: false,
        },
        mounted: function () {
<<<<<<< HEAD

            this.get_petugas()

=======
            this.get_petugas()
>>>>>>> 171465b3980da29332f690c4fe19467e166466b9
        },
        methods:{
            get_petugas() {
                const _this = this;
                $.ajax({
                    url: apiUrl,
                    mehtod: 'GET',
                    success: function (data) {
                        _this.petugas = JSON.parse(data);
<<<<<<< HEAD
            },
            error: function (error) {
=======
                    },
                    error: function (error) {
>>>>>>> 171465b3980da29332f690c4fe19467e166466b9
                        console.log(error);
                    }
                });
            },
            addData() {
                this.petugasData = {};
                this.actionUrl = '{{ url('petugas') }}';
                this.editStatus = false;
                $('#modal-overlay').modal();
            },
            editData(petugasData) {
                this.petugasData = petugasData;
                this.actionUrl = '{{ url('petugas')}}'+'/'+this.petugasData.id;
                this.editStatus = true;
                $('#modal-overlay').modal();
            },
            deleteData(id) {
                this.actionUrl = '{{ url('petugas')}}'+'/'+this.data.id;
                if (confirm("Are you sure?"))
                axios.post(this.actionUrl, {_method: 'DELETE'}).then(response => {
                    location.reload();
                });
            }
        }
    });
    </script>
@endsection
