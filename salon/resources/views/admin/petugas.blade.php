@extends('layouts.admin')
@section('header', 'Petugas')
@section('css')
@endsection

@section('content')
<div id="controller">
    <div class="row">
        <div class="col-md-10">            
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">DATA PETUGAS</h2><br>
                    <a href="#" @click="addData({{$petugas}})" class="btn btn-sm btn-warning pull-right">Create New Petugas</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
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
                                <td class="text-right">
                                    <a href="#" @click="editData({{$petugas}})" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#" @click="deleteData({{ $petugas->id}})" class="btn btn-secondary btn-sm">Delete</a>
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
</div>

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
                            <input type="text" class="form-control" name="name" :value="data.name" required="">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" :value="data.email" required="">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" class="form-control" name="phone_number" :value="data.phone_number" required="">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" :value="data.address" required="">
                            <br>
                            <label for="gender">Gender</label>
                            <select name="gender">
                                <option value="P">P</option>
                                <option value="L">L</option>
                            </select>
                        </div>
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




@endsection
@section('js')
<script type="text/javascript">
    var controller = new Vue({
        el: '#controller',
        data: {
            data: {},
            actionUrl : '{{ url('petugas') }}',
            editStatus : false
        },
        mounted: function () {

        },
        methods:{
            addData() {
                this.data = {};                
                this.actionUrl = '{{ url('petugas') }}';
                this.editStatus = false;
                $('#modal-overlay').modal();
            },
            editData(data) {                
                this.data = data;
                this.actionUrl = '{{ url('petugas')}}'+'/'+this.data.id;
                this.editStatus = true;
                $('#modal-overlay').modal();
            },
            deletedData(id) {
                
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
