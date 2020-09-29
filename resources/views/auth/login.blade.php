<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pre-Concreto de Veracruz</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body class="hold-transition login-page" style="">
    <b>Pre Concreto de Veracruz </b>
    <div class="login-box">
        <div class="login-logo">
            <!--<b>Pre</b>Concreto de Veracruz-->
            <img class="image" src="{{ asset('images/logopcv.png') }}" alt="">
        </div>

        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-3 ">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Correo">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password" placeholder="Contraseña">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="">Olvide mi Contraseña</a>
                        </div>
                    </div>
                    <div class="row">

                        <!-- /.col -->
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!-- /.social-auth-links -->
                <p class="mb-1">

                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
