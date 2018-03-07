@extends('layouts.app')

@section('content')
@foreach ($tests as $test)
<h1>Details for {{$test->test_id}}</h1>
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
    <b>D</b>:{{$test->d2}}
  </li>
</ul>
<hr>
@endforeach

@stop
