@extends('layouts.admin')

@section('header', 'Categori')
@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-10">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Categori</h3>
            </div>
        
            <form action="{{ url('categoris/'.$categori->id) }}" method="post">
                @csrf
                {{ method_field('PUT') }}
                
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter name" required="" value="{{ $categori->name }}">
                    </div>                                      
                   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
@endsection