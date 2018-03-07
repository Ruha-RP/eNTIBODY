@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card border-warning mb-3">
                <div class="card-header">
                    <span class="is-size-3" style="color:#26547C;">
                        Blood Sciences Department
                    </span>
             </div>

                <div class="card-body">
                    <p class="is-size-5" style="color:#26547C;"><strong style="color:#EF476F;">Enter Patient Details</strong></p>

                    <form action="/patients" method="post">

                        {{ csrf_field() }}

                        <div class="form-group">
                        <label for="title" style="color:#26547C;">Name</label>
                        <input type="text" class="form-control" id="name"  name="name">
                        </div>

                        <div class="form-group">
                        <label for="hospital_number" style="color:#26547C;">Hospital Number</label>
                        <input type="number" class="form-control" id="hospital_number" name="hospital_number">
                        </div>

                        <div class="form-group">
                        <label for="dob" style="color:#26547C;">Date of Birth</label>
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
                        <button type="submit" class="button is-primary is-outlined" style="color:#26547C;">Submit</button>
                        </form>             
            </div>

        </div>
    </div>
</div>
 @endsection




