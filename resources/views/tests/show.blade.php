@extends('layouts.app')

@section('content')
<h1>Details for {{$test->patient_id}}</h1>
<hr>
<ul class="list-group">
	<li class="list-group-item">
		<b>posC</b>:{{$->name}}
	</li>
	<li class="list-group-item">
		<b>negC</b>:{{$patient->hospital_number}}
	</li>
	<li class="list-group-item">
		<b>D1</b>:{{$patient->dob}}
	</li>
  <li class="list-group-item">
    <b>D</b>:{{$patient->dob}}
  </li>
</ul>
<hr>

@stop
