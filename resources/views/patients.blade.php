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
                    <ol>List:
                        <li>Patient 1</li>
                        <li>Patient 2</li>
                        <li>Patient 3</li>
                        <li>Patient 4</li>
                    </ol>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection