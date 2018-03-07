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
                    <p class="is-size-5" style="color:#26547C;"><strong style="color:#EF476F;">Next Steps</strong></p>

                    <i class="fas fa-user-md is-size-3" style="color:#26547C;"></i>
                    <button class="button is-primary is-outlined" style="color:#26547C;">Contact the Doctor</button><br><br>

                    <i class="fas fa-syringe is-size-3" style="color:#26547C;"></i>
                    <button class="button is-primary is-outlined" style="color:#26547C;">Request Injection</button><br><br>

                    <i class="fas fa-check is-size-3" style="color:#26547C;"></i>
                    <button class="button is-primary is-outlined" style="color:#26547C;" onclick="location.href='/home';">Completed Procedure</button><br><br>
            </div>
                    
                    <hr>

                <div class="card-body">

                    <p class="is-size-5" style="color:#26547C;"><strong style="color:#EF476F;">All Test Results</strong></p>
                    <table class = "table">
                        <tr>
                            <th>Patient ID</th>
                            <th>Positive Control</th>
                            <th>Negative Control</th>
                            <th>Reagent D1</th>
                            <th>Reagent D2</th>

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
</div>
@endsection