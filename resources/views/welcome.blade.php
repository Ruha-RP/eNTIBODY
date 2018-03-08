<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" id="token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'eNTIBODY') }}</title>

    <!-- STYLES -->
    <!-- Bulma CSS Framework -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css";>
    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js";></script>
    <!-- In-built Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card border-warning mb-3">
                <div class="card-header">
                    <span class="is-size-3" style="color:#26547C, ;">
                        eNTIBODY
                    </span>
                </div>

                <div class="card-body">
                    <p class="is-size-5" style="color:#26547C;"> <strong style="color:#EF476F;">Laboratory Result Interpretation and Information Management System</strong></p>
                    <ul class="is-size-5" style="color:#26547C;">
                          
                          <li><i class="fas fa-clock" style="color:#EF476F;"></i>  Efficient</li>
                          <li><i class="fab fa-wpforms" style="color:#EF476F;"></i>  Accurate Record Keeping</li>
                          <li><i class="fas fa-lock" style="color:#EF476F;"></i>  Secure</li>
                          <li><i class="fas fa-check" style="color:#EF476F;"></i>  Smart</li>
                          
                      </ul>
                </div>

                <div class="card-body">
                    
                        
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<!-- SCRIPTS -->
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- External Javascript File -->
    <script src="/js/interpret.js"></script>

</body>
</html>


                        