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

                  {!! Form::hidden('patient_id', '1' ) !!}


                    
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
                    {!! Form::submit('Submit result', ['class' => 'btn btn-primary btn-lg',
                    'id' => 'interpret'
                    ]) !!}
                    </div>

                <!-- Closing the form -->
                {!! Form::close() !!}



            <!-- <label id="posC">
            1. Positive Control Well
                <br>         
                <input type="radio" name="posC" value="true" id="noOne1" class="choice">Agglutination<br>
              <input type="radio" name="posC" value="false" id="yesOne" class="choice">No Reaction<br>
            </label> 
            <br>
            <br>

            <label id="negC">
            2. Negative Control Well
                <br>         
                <input type="radio" name="negC" value="true" id="yesTwo" class="choice">Agglutination<br>
              <input type="radio" name="negC" value="false" id="noTwo1" class="choice">No Reaction<br>
            </label>
            <br>
            <br>

            <label id="d1">
            3. Reagent D1 Well
                <br>         
                <input type="radio" name="d1" value="true" id="noThree1" class="choice">Agglutination<br>
              <input type="radio" name="d1" value="false" id="noThree2" class="choice">No Reaction<br>
            </label> 
            <br>
            <br>

            <label id="d2">
            4. Reagent D2 Well
                <br>         
                <input type="radio" name="d2" value="true" id="noFour1" class="choice">Agglutination<br>
              <input type="radio" name="d2" value="false" id="yesFour" class="choice">No Reaction<br>
            </label>
            <br>
            <br>

        </form>
        </div> --><!-- Closing quiz content div-->

        <!-- <button type="submit" id="interpret" >Submit</button> -->


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
          <strong>No Problem!</strong> Indicates a successful or positive action.
        </div>

        <div class="alert alert-info">
          <strong>Info!</strong> Indicates a neutral informative change or action.
        </div>

        <div class="alert alert-warning">
          <strong>Warning!</strong> Indicates a warning that might need attention.
        </div>

        <div class="alert alert-danger">
          <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" 
           class="button" 
           data-dismiss="modal">Close</button>
        <span class="pull-right">
          <!--  Need to provide user feedback at this point  -->
          <button type="button" class="button">
            Confirm and Save
          </button>
        </span>
      </div>
    </div>
  </div>
</div>

@endsection
