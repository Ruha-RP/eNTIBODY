@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">USER Dashboard</div>

                <div class="card-body">
                    <h1> ALL PATIENTS </h1>
                    <!-- p>Click on a patient for more Details</p>
 -->
                    <!-- <form class="navbar-form navbar-right" role="search">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by PID or Name">
                      </div>
                      <button type="submit" class="button">Submit</button>
                    </form>
                    <br> -->


                    <table class = "table">
                        <tr>
                            <th>Hospital Number</th>
                            <th>Full Name</th>
                            <th>DOB</th>

                        </tr>
                      
                            @foreach ($patients as $patient)
                            <tr>
                            <td> {{ $patient -> hospital_number }}</td>
                            <td> {{ $patient -> name }}</td>
                            <td> {{ $patient -> dob }}</td>
                            </tr>
                            @endforeach

                    </table>

                    <hr>
                <p>Return to home</p>
                <i class="fas fa-home is-size-5" style="color:#26547C;" onclick="location.href='/home';"></i>
                </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection