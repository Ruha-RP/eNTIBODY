<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('patients') }}">patient Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('patients') }}">View All patients</a></li>
        <li><a href="{{ URL::to('patients/create') }}">Create a patient</a>
    </ul>
</nav>

<h1>Create a patient</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'patients')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('hospital_number', 'hospital_number') }}
        {{ Form::hospital_number('hospital_number', Input::old('hospital_number'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('dob', 'dob') }}
        {{ Form::select('dob', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), Input::old('dob'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create the patient!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}