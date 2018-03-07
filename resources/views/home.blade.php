@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                <h3 class="title .is-turquoise">USER Dashboard</h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @component('components.who')
                    @endcomponent
                </div>

                <div class="card-body">
                    <div class="links">
                       <!--  Shows Test Info  -->
                        <button class="button" onclick="location.href='/users/info';">Test Info</button>
                        <!-- Shows all patients -->
                        <button class="button" onclick="location.href='/users/patients';">View All Patients</button>
                        <!-- Sends to Test Screen -->
                        <button class="button" onclick="location.href='/users/test';">Test Now</button>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
