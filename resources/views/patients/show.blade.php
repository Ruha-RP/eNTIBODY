@extends('layouts.app')

@section('content')
<h1>Details for {{$patient->name}}</h1>
<hr>
<ul class="list-group">
	<li class="list-group-item">
		<b>Name</b>:{{$patient->name}}
	</li>
	<li class="list-group-item">
		<b>Hospital Number</b>:{{$patient->hospital_number}}
	</li>
	<li class="list-group-item">
		<b>DOB</b>:{{$patient->dob}}
	</li>
</ul>
<hr>
<!-- <button class="btn btn-info" onclick="location.href='{{$patient->id}}/inputresult';">Test them Now</button> -->

<!-- To open Modal for Starting Test -->
<button 
   id="start-test-section" 
   type="button" 
   class="button" 
   data-toggle="modal" 
   data-target="#startNowModal">
   Start Now
</button>


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
        id="startNowModalLabel">Start Now</h4>
      </div>
      <div class="modal-body">
        <!-- This part outlines the SOP -->
        <p>This is how you perform the test</p>
        <ol> Steps:
            <li>first step</li>
            <li>second step</li>
            <li>third step</li>
            <li>fourth step</li>
        </ol>
        <!-- This part gives functionality of a timer -->
        <a href="#">Start Timer</a>
      </div>
      <div class="modal-footer">
        <button type="button" 
           class="button" 
           data-dismiss="modal">Close</button>
        <span class="pull-right">
          <!-- This button will route to result input page -->  
          <button type="button" class="button" onclick="location.href='{{$patient->id}}/test/inputresult';">
            Test Completed
 		</button>
          
        </span>
      </div>
    </div>
  </div>
</div>


@stop
