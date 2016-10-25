
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login In</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/login.css')}}">

  </head>
    
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('plugins/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
  
  <body class="hold-transition login-page">

    <div class="container">

        <div class="row" style="margin-top:120px">
            <div class="col-xs-12 col-sm-10 col-md-6 col-sm-offset-2 col-md-offset-3">
                <form action="{{url('/login')}}" method="post">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <h2>Iniciar sesión!</h2>
                    <hr class="colorgraph">

                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Correo Electrónico" tabindex="4" required autofocus>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5" required autofocus>
                    </div>
                    <hr class="colorgraph">
                        <div class="col-xs-12 col-md-6">
                            <button type="submit" class="btn btn-success btn-block btn-lg">Ingresar</button>
                        </div>
                </form>
                <div class="col-xs-12 col-md-6">
                    <a href="{{url('/register')}}" class="btn btn-primary btn-block btn-lg" tabindex="7">Registrarse</a>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>