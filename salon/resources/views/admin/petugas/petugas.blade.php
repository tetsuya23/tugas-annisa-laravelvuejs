@extends('layouts.admin')
@section('header', 'Petugas')

@section('css')
@endsection
@push('css')
<style type="text/css">
</style>
@endpush
@section('content')
<div class="card">
    <div class="card-header">
        <h2 class="card-title">DATA PETUGAS</h2><br>
        <!-- <a href="{{ url('petugas/create') }}" class="btn btn-sm btn-warning pull-right">Create New Petugas</a> -->
        <a href="#" data-target="#modal-default" data-toggle="modal" class="btn btn-sm btn-warning pull-right">Create New Petugas</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Gender</th>
                    <th class="text-center">Phone Number</th>
                    <th class="text-center">Address</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($petugas as $key => $petugas)
                <tr>
                    <td class="text-center">{{ $key+1 }}</td>
                    <td class="text-center">{{ $petugas->name }}</td>
                    <td class="text-center">{{ $petugas->gender }}</td>
                    <td class="text-center">{{ $petugas->phone_number }}</td>
                    <td class="text-center">{{ $petugas->address}}</td>
                    <td class="text-center">{{ $petugas->email}}</td>
                    <td class="text-center">
                        <a href="{{ url('petugas/'.$petugas->id.'/edit') }}" class="btn btn-info btn-sm">Edit</a>
                        <!-- <a href="petugas/delete/{{ $petugas->id }}" class="btn btn-info btn-sm">Delete</a>     -->

                        <form action="{{ url('petugas', ['id' => $petugas->id]) }}" method="post">
                            <input class="btn btn-secondary btn-sm" type="submit" value="Delete"
                                onclick="return confirm('Are you sure?')">
                            @method('delete')
                            @csrf
                </tr>
                </td>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<div class="modal fade" id="modal-secondary" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content bg-secondary">
            <div class="modal-header">
                <h4 class="modal-title">Secondary Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>One fine body…</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-light">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@section('js')
@endsection


<!-- @extends('layouts.admin')

@section('header', 'Petugas')

@section('css')
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h2 class="card-title">DATA PETUGAS</h2><br>
        <!-- <a href="{{ url('petugas/petugas') }}" class="btn btn-sm btn-warning pull-right">Create New Petugas</a> -->
        <a href="#" data-target="#modal-secondary" data-toggle="modal" class="btn btn-sm btn-warning pull-right">Create New Petugas</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>                    
                    <th class="text-center">Name</th>
                    <th class="text-center">Gender</th>
                    <th class="text-center">Phone Number</th>
                    <th class="text-center">Address</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($petugas as $key => $petugas)
                <tr>
                    <td class="text-center">{{ $key+1 }}</td>                    
                    <td class="text-center">{{ $petugas->name }}</td>
                    <td class="text-center">{{ $petugas->gender }}</td>
                    <td class="text-center">{{ $petugas->phone_number }}</td>
                    <td class="text-center">{{ $petugas->address}}</td>
                    <td class="text-center">{{ $petugas->email}}</td>
                    <td class="text-center">
                            <a href="{{ url('petugas/'.$petugas->id.'/edit') }}" class="btn btn-info btn-sm">Edit</a>
                            <!-- <a href="petugas/delete/{{ $petugas->id }}" class="btn btn-info btn-sm">Delete</a>     -->

                            <form action="{{ url('petugas', ['id' => $petugas->id]) }}" method="post">
                                <input class="btn btn-secondary btn-sm" type="submit" value="Delete" onclick="return confirm('Are you sure?')">
                                @method('delete')
                                @csrf
                </tr></td>
                @endforeach
            </tbody>           
        </table>
    </div>
    <!-- /.card-body -->
</div>
<div class="modal fade" id="modal-secondary">
    <div class="modal-dialog">
        <div class="modal-content bg-secondary">
            <form method="post" action="{{ url('petugas')}}" autocomplete="off">
            <div class="modal-header">
                <h4 class="modal-title">Petugas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf
                <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter name" required="">                            
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter email" required="">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" name="phone_number" class="form-control" placeholder="Enter phone_number" required="">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Enter adress" required="">
                        <br>
                        <label for="gender">Gender</label>
                                <select name="gender">                                
                                <option value="P">P</option>
                                <option value="L">L</option></select>                
                </div>
            </div>
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-outline-light">Save changes</button>
        </div>
</form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@endsection
@section('js')
@endsection -->

