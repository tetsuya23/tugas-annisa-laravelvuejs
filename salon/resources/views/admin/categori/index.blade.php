@extends('layouts.admin')

@section('header', 'Categori')
@section('content')

<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <a href="{{ url('categoris/create') }}" class="btn btn-sm btn-warning pull-right">Create New Categori</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Created At</th>
                        <th class="text-center">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($categoris as $key => $categori)
                    <tr>
                        <td class="text-center">{{ $key+1 }}</td>
                        <td class="text-center">{{ $categori->name }}</td>
                        <td class="text-center">{{ date('m.d.y', strtotime($categori->created_at ))}}</td>
                        <td class="text-center">
                            <a href="{{ url('categoris/'.$categori->id.'/edit') }}" class="btn btn-info btn-sm">Edit</a>

                            <form action="{{ url('categoris', ['id' => $categori->id]) }}" method="post">
                                <input class="btn btn-secondary btn-sm" type="submit" value="Delete" onclick="return confirm('Are you sure?')">
                                @method('delete')
                                @csrf
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <!-- <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </div> -->
    </div>


    @endsection
