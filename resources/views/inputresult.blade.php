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
                    <p class="is-size-5" style="color:#26547C;"><strong style="color:#EF476F;">Input your Observations based on the reactions on the microplate</strong></p>

            </div>

            <div class="card-body">

              <!-- The Form -->

                <!-- Opening the form -->
                {!! Form::open(['action' => 'TestController@store', 'class' => 'ajax', 'method' => 'POST']) !!}

                  {!! Form::hidden('ip', Request::getClientIp(), ['name' => 'ip']) !!}

                  {!! Form::hidden('patient_id', Request::segment(2)) !!}


                    
                    <!-- The Positive Control Well -->
                    <div class="form-group required">
                    <i class="fas fa-plus is-size-5 " style="color:#EF476F;"></i>
                    {!! Form::label('posC', 'Positive Control') !!}
                    {{ Form::select('posC', [
                    'Agglutination' => 'Agglutination', 
                    'No Reaction' => 'No Reaction']) }}
                    </div>


                    <!-- The Negative Control Well -->
                    <div class="form-group required">
                    <i class="fas fa-minus is-size-5 " style="color:#EF476F;"></i>
                    {!! Form::label('negC', 'Negative Control') !!}
                    {{ Form::select('negC', [
                    'Agglutination' => 'Agglutination', 
                    'No Reaction' => 'No Reaction']) }}
                    </div>

                    <!-- The d1 Reagent Well -->
                    <div class="form-group required">
                    <i class="fas fa-tint is-size-5 " style="color:#EF476F;"></i>
                    {!! Form::label('d1', 'Reagent D1') !!}
                    {{ Form::select('d1', [
                    'Agglutination' => 'Agglutination', 
                    'No Reaction' => 'No Reaction']) }}
                    </div>

                    <!-- The d2 Reagent Well -->
                    <div class="form-group required">
                    <i class="fas fa-tint is-size-5 " style="color:#EF476F;"></i>
                    {!! Form::label('d2', 'Reagent D2') !!}
                    {{ Form::select('d2', [
                    'Agglutination' => 'Agglutination', 
                    'No Reaction' => 'No Reaction']) }}
                    </div>

                    <!-- The Submit button -->
                    <div class="form-group">
                    <i class="fas fa-stethoscope is-size-5 " style="color:#26547C;"></i>
                    {!! Form::button('View result', ['class' => 'button',
                    'data-toggle' => 'modal' ,
                    'data-target'=> '#interpretResultModal',
                    'id' => 'interpret',
                    'class'=>'button is-primary is-outlined',
                    'style'=>'color:#26547C'
                    ]) !!}
                    </div>

                    <!-- The Submit button -->
                    <div class="form-group">
                    <i class="fas fa-clipboard-list is-size-5 " style="color:#26547C;"></i>
                    {!! Form::submit('Submit Diagnosis', [
                    'class'=>'button is-primary is-outlined',
                    'style'=>'color:#26547C'
                    ]) !!}
                    </div>

              

            </div>

                



                    
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
        id="interpretResultModalLabel"></h4>
      </div>
      <div class="modal-body">
        <p class="is-size-5" style="color:#26547C;">
        Result:
        </p>
        <div class="alert alert-success">
          <div id="diagnosis" class="is-size-5" style="color:#26547C;">Please Enter your Observations</div><br>
          <div>Enter Submit if results are correct.</div>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" 
           class="button" 
           data-dismiss="modal">OK</button>
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
