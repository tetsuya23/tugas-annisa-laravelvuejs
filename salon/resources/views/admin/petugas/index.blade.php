@extends('layouts.admin')

@section('header', 'Petugas')
@section('css')
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h2 class="card-title">DATA PETUGAS</h2><br>
        <a href="{{ url('petugas') }}" class="btn btn-sm btn-warning pull-right">Create New Petugas</a>
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

@endsection
