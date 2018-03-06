@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">USER Dashboard</div>

                <div class="card-body">
                    <h1> TEST SCREEN </h1>
                    <p>Perform Test here</p>
                    <p> Active Button: adds patient details</p>
                    <p> Inactive Button: Start Now, leads to another SOP after activation, happens after patient details input</p>   
                    <hr>

                    <!-- To open Modal for Patient Details Input -->
                    <button 
                       id="patient-details-section" 
                       type="button" 
                       class="button" 
                      onclick="location.href='/patients/create';">
                       Input Patient Details
                    </button>

                    
        
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal to Input Patient Details -->
<div class="modal fade" id="inputPatientModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="inputPatientModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" 
          aria-label="Close" >
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" 
        id="inputPatientModalLabel">Input Patient Details</h4>
      </div>
      <div class="modal-body">
        <p>
        Please confirm you would like to add 
        <!-- Need to dynamically replace new patient -->
        <b><span id="fav-title">New Patient</span></b> 
        to your patients list.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" 
           class="button" 
           data-dismiss="modal">Close</button>
        <span class="pull-right">
          <button type="button" class="button">
            Add Patient
          </button>
        </span>
      </div>
    </div>
  </div>
</div>




@endsection