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


                    <table class = "table">
                        <tr>
                            <th>Hospital Number</th>
                            <th>Name</th>
                        </tr>
                      
                            @foreach ($patients as $patient)
                            <tr>
                            <td> {{ $patient -> hospital_number }}</td>
                            <td> {{ $patient -> name }}</td>
                            </tr>
                            @endforeach
                    </table>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection