@extends('layouts.admin')
@section('header', 'Member')
@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-10">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">MEMBER</h3>
                <h3 class="card-title">Create member</h3>
            </div>
        
            <form action="{{ url('members') }}" method="post">
                @csrf
                <div class="card-body">
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
                                <option value="female">P</option>
                                <option value="male">L</option></select>
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
