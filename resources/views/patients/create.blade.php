@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">USER Dashboard</div>

                <div class="card-body">
                    <h1>Add New Patient</h1>
                    <hr>

                    <form action="/patients" method="post">

                        {{ csrf_field() }}

                        <div class="form-group">
                        <label for="title">Name</label>
                        <input type="text" class="form-control" id="name"  name="name">
                        </div>

                        <div class="form-group">
                        <label for="hospital_number">Hospital Number</label>
                        <input type="number" class="form-control" id="hospital_number" name="hospital_number">
                        </div>

                        <div class="form-group">
                        <label for="dob">DOB</label>
                        <input type="date" class="form-control" id="dob" name="dob">
                        </div>

                        @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                        </div>
                        @endif
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>             
            </div>

        </div>
    </div>
</div>
 @endsection




