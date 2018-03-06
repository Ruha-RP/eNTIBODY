@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">USER Dashboard</div>

                


                <!-- The Form -->

                <!-- Opening the form -->
                {!! Form::open(['action' => 'TestController@store', 'class' => 'ajax', 'method' => 'POST']) !!}

                  {!! Form::hidden('ip', Request::getClientIp(), ['name' => 'ip']) !!}

                  {!! Form::hidden('patient_id', Request::segment(2)) !!}


                    
                    <!-- The Positive Control Well -->
                    <div class="form-group required">
                    {!! Form::label('posC', 'Positive Control') !!}
                    {{ Form::select('posC', [
                    'Agglutination' => 'Agglutination', 
                    'No Reaction' => 'No Reaction']) }}
                    </div>


                    <!-- The Negative Control Well -->
                    <div class="form-group required">
                    {!! Form::label('negC', 'Negative Control') !!}
                    {{ Form::select('negC', [
                    'Agglutination' => 'Agglutination', 
                    'No Reaction' => 'No Reaction']) }}
                    </div>

                    <!-- The d1 Reagent Well -->
                    <div class="form-group required">
                    {!! Form::label('d1', 'Reagent D1') !!}
                    {{ Form::select('d1', [
                    'Agglutination' => 'Agglutination', 
                    'No Reaction' => 'No Reaction']) }}
                    </div>

                    <!-- The d2 Reagent Well -->
                    <div class="form-group required">
                    {!! Form::label('d2', 'Reagent D2') !!}
                    {{ Form::select('d2', [
                    'Agglutination' => 'Agglutination', 
                    'No Reaction' => 'No Reaction']) }}
                    </div>

                    <!-- The Submit button -->
                    <div class="form-group">
                    {!! Form::button('View result', ['class' => 'button',
                    'data-toggle' => 'modal' ,
                    'data-target'=> '#interpretResultModal',
                    'id' => 'interpret'
                    ]) !!}
                    </div>

                    <!-- The Submit button -->
                    <div class="form-group">
                    {!! Form::submit('Submit Diagnosis', ['class' => 'button',
                    'onclick =>"location.href='/patients/Request::segment(2)';"   
                    ]) !!}
                    </div>

           


     <!-- To open Modal for Interpeting Results -->
                    <button 
                       id="result-section" 
                       type="button" 
                       class="button" 
                       data-toggle="modal" 
                       data-target="#interpretResultModal">
                       Interpret Observations
                    </button>

                    
                </div>
            </div>
        </div>
    </div>
</div>



<!-- MODAL -->
<!-- Modal to show Interpreted Result -->
<div class="modal fade" id="interpretResultModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="interpretResultModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close"
          data-dismiss="modal" 
          aria-label="Close" >
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" 
        id="interpretResultModalLabel">Input Patient Details</h4>
      </div>
      <div class="modal-body">
        <p>
        The Result is ... 
        </p>
        <div class="alert alert-success">

          <div id="diagnosis">Diagnosis</div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" 
           class="button" 
           data-dismiss="modal">Close</button>
        <span class="pull-right">
          <!--  Need to provide user feedback at this point  -->
          <button class="button" onclick="location.href='/patients/{{Request::segment(2)}}';"> Re-Do
          </button>
        </span>
      </div>
    </div>
  </div>
</div>
 <!-- Closing the form -->
 {!! Form::close() !!}

@endsection
