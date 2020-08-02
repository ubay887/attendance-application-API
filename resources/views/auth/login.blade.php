<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body class="page-top">
{{ Auth::user() }}
<!--     <div class="row">
        @if(\Session::has('error'))
          <div class="alert alert-danger" style="margin-top: 250px; margin-bottom: 400px;">
              <center>{{\Session::get('error')}}</center>
          </div>

      @endif
    </div> -->
<div class="container">

    <div class="row justify-content-center">
        <div class="col-6">
            <img src="img/login.png" class="" style="margin-left:0px;width: 600px;height: 450px;margin-top: 80px;margin-right: -50px;">
            </div>   
        <div class="col-6 mt-5">            
                <!--<div class="card-header">{{ __('Login') }}</div>-->
                <h2 style="font-family: roboto;margin-left: 230px; margin-top: 120px;">LOGIN</h2>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary form-control">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                        
                        <a href="{{ route('register') }}" style="margin-left: 180px;padding-top: 30px;">Belum ada akun? register disini!</a>
                    </form>
                </div>
            </div>
    </div>
</div>
</body>
</html>
