@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">USER Dashboard</div>

                <div class="card-body">
                    <h1> INPUT TEST RESULT </h1>
                    <p>The following is observed</p>
                    <ol>Result 1:
                        <li>Well 1</li>
                        <li>Well 2</li>
                        <li>Well 3</li>
                    </ol>
                    <ol>Result 2:
                        <li>Well 1</li>
                        <li>Well 2</li>
                        <li>Well 3</li>
                    </ol>

                    <!-- To open Modal for Interpeting Results -->
                    <button 
                       id="patient-details-section" 
                       type="button" 
                       class="button" 
                       data-toggle="modal" 
                       data-target="#inputPatientModal">
                       Interpret Observations
                    </button>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
