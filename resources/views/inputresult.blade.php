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
