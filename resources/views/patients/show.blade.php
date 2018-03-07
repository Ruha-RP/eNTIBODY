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
                  <p class="is-size-5" style="color:#26547C;"><strong style="color:#EF476F;">Details for {{$patient->name}}</strong></p>
                
                <hr>
                <ul class="list-group">
                  <li class="is-size-5" style="color:#26547C;">
                    <b>Name</b>: {{$patient->name}}
                  </li>
                  <li class="is-size-5" style="color:#26547C;">
                    <b>Hospital Number</b>: {{$patient->hospital_number}}
                  </li>
                  
                  <li class="is-size-5" style="color:#26547C;">
                    <b>Date of Birth</b>: {{$patient->dob}}
                  </li>
                </ul>
                <br>

                <!-- To open Modal for Starting Test -->
                  <button 
                     id="start-test-section" 
                     type="button" 
                     class="button is-primary is-outlined" 
                     data-toggle="modal" 
                     data-target="#startNowModal"
                     style="color:#26547C;"><i class="fas fa-dna is-size-4">
                     </i></button><span class="is-size-5" style="color:#26547C;"> Start Now</span>
                     
                  </button>
                </div>
        </div>
        </div>
    </div>
</div>


    





 <!-- Modal to Start Test -->
<div class="modal fade" id="startNowModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="startNowModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" 
          aria-label="Close" >
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" 
        id="startNowModalLabel"></h4>
      </div>
      <div class="modal-body">
        <!-- This part outlines the SOP -->
        <p class="is-size-5" style="color:#26547C;"><strong style="color:#EF476F;">Standard Operating Procedure for RhD Typing</strong></p>
        <div class="container">
        <p><b>Steps:</b><p>
        <ol> 
            <li>first step</li>
            <li>second step</li>
            <li>third step</li>
            <li>fourth step</li>
        </ol>
      </div>
        <!-- This part gives functionality of a timer -->
        <!-- <a href="#">Start Timer</a> -->
      </div>
      <div class="modal-footer">

        <button type="button " 
           class="button is-primary is-outlined" 
           data-dismiss="modal" style="color:#26547C;">Close</button>
        <span class="pull-right">
          <!-- This button will route to result input page -->  
          <button type="button" class="button is-primary is-outlined" onclick="location.href='{{$patient->id}}/test/inputresult';" style="color:#26547C;">
            Test Completed
 		     </button>
          
        </span>
      </div>
    </div>
  </div>
</div>


@stop
