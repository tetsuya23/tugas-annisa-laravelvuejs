@extends('layouts.admin')

@section('header', 'Petugas')
@section('content')
<div class="card">
    <div class="card-header">
        <h2 class="card-title">DATA PETUGAS</h2><br>
        <a href="{{ url('petugas/create') }}" class="btn btn-sm btn-warning pull-right">Create New Petugas</a>
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
                </tr>
            </thead>
            <tbody>
                @foreach($petugas as $petugas)
                <tr>
                    
                    <td class="text-center">{{ $petugas->name }}</td>
                    <td class="text-center">{{ $petugas->gender }}</td>
                    <td class="text-center">{{ $petugas->phone_number }}</td>
                    <td class="text-center">{{ $petugas->address}}</td>
                    <td class="text-center">{{ $petugas->email}}</td>
                    <td class="text-center"></td>
                </tr>
                @endforeach
            </tbody>
           
        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection
