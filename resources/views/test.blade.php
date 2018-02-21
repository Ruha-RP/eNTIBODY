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
                       data-toggle="modal" 
                       data-target="#inputPatientModal">
                       Input Patient Details
                    </button>

                    <!-- To open Modal for Starting Test -->
                    <button 
                       id="start-test-section" 
                       type="button" 
                       class="button" 
                       data-toggle="modal" 
                       data-target="#startNowModal">
                       Start Now
                    </button>
        
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal to Input Patient Details -->
<div class="modal fade" id="favoritesModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="favoritesModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" 
          aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" 
        id="favoritesModalLabel">The Sun Also Rises</h4>
      </div>
      <div class="modal-body">
        <p>
        Please confirm you would like to add 
        <b><span id="fav-title">The Sun Also Rises</span></b> 
        to your favorites list.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" 
           class="btn btn-default" 
           data-dismiss="modal">Close</button>
        <span class="pull-right">
          <button type="button" class="btn btn-primary">
            Add to Favorites
          </button>
        </span>
      </div>
    </div>
  </div>
</div>
@endsection