@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">USER Dashboard</div>

                <div class="card-body">

                    <h1> DIAGNOSIS </h1>
                    <div id="result">Diagnosis</div>

<h1>Details for {{$test->patient_id}}</h1>
<hr>
<ul class="list-group">
    <li class="list-group-item">
        <b>posC</b>:{{$test->posC}}
    </li>
    <li class="list-group-item">
        <b>negC</b>:{{$test->negC}}
    </li>
    <li class="list-group-item">
        <b>D1</b>:{{$test->d1}}
    </li>
  <li class="list-group-item">
    <b>D2</b>:{{$test->d2}}
  </li>
</ul>
<hr>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection