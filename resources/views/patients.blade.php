@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">USER Dashboard</div>

                <div class="card-body">
                    <h1> ALL PATIENTS </h1>
                    <p>Click on a patient for more Details</p>
                    <p>Search by PID or Name</p>

                    @foreach ($patients as $patient)
                        <li> {{ $patient -> name }} </li>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection