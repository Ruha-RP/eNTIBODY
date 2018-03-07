@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">USER Dashboard</div>

                <div class="card-body">
                    <h1> DIAGNOSIS NEXT STEPS </h1>
                    
                    <div>
                        <button>Contact the Doctor</button>
                        <button>Request Injection</button>
                        <button onclick="location.href='/home';">Completed Procedure</button>
                    </div>
                    <hr>

                    <h2>All Test Results</h2>
                    <table class = "table">
                        <tr>
                            <th>Patient ID</th>
                            <th>posC</th>
                            <th>negC</th>
                            <th>d1</th>
                            <th>d2</th>

                        </tr>
                      
                            @foreach ($tests as $test)
                            <tr>
                            <td> {{ $test -> patient_id }}</td>
                            <td> {{ $test -> posC }}</td>
                            <td> {{ $test -> negC }}</td>
                            <td> {{ $test -> d1 }}</td>
                            <td> {{ $test -> d2 }}</td>
                            </tr>
                            @endforeach

                    </table>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection