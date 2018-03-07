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
                    <p class="is-size-5" style="color:#26547C;">Welcome <strong style="color:#EF476F;">{{ Auth::user()->name }},</strong></p>
                    <p class="is-size-5" style="color:#26547C;">Please select one of the actions below to proceed with Rhesus D Antigen Typing</p>
                </div>

                <div class="card-body">
                    <div class="links">
                       <!--  Shows Test Info  -->
                        
                        <button class="button is-primary is-outlined" style="color:#26547C;" onclick="location.href='/users/info';"><i class="fas fa-info is-size-4" style="color:#26547C;"></i></button><span class="is-size-5" style="color:#26547C;"> Test Information</span>
                        <br><br>
                        
                        <!-- Shows all patients -->
                        <button class="button is-primary is-outlined" style="color:#26547C;" onclick="location.href='/users/patients';"><i class="fas fa-users is-size-4" style="color:#26547C;"></i></button><span class="is-size-5" style="color:#26547C;"> View All Patients</span>
                        <br><br>
                        
                        <!-- Sends to Test Screen -->
                        <button class="button is-primary is-outlined" style="color:#26547C;" onclick="location.href='/users/test';"><i class="fas fa-flask is-size-4" style="color:#26547C;"></i></button><span class="is-size-5" style="color:#26547C;"> Test Now</span>
                        <br><br>
                        
                        
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection


                        