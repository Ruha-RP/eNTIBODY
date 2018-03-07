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
                    <p class="is-size-5" style="color:#26547C;"><strong style="color:#EF476F;">Rh D Test Screen</strong></p>
                    <p class="is-size-5" style="color:#26547C;">Before beginning the test, Please Input the Correct Patient Details as indicated on the 
                      <ul class="is-size-5" style="color:#26547C;">
                          <li><i class="fab fa-wpforms"></i>  Sample Vial</li>
                          <li><i class="fas fa-tint"></i>  Request form</li>
                          
                      </ul>
                    </p>
            </div>

            <div class="card-body">
                    <div class="links">

                       <button class="button is-primary is-outlined" style="color:#26547C;" onclick="location.href='/patients/create';"><i class="fas fa-users is-size-4" style="color:#26547C;"></i></button><span class="is-size-5" style="color:#26547C;"> Input Patient Details</span>
                        <br><br>
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