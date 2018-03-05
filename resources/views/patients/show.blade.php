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
<button type="button" class="button" onclick="location.href='{{$patient->id}}/test/inputresult';">
            Test Completed
 </button>
@stop
