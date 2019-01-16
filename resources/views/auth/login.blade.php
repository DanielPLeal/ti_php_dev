<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ __('Login Usuário')}}</title>
        <!-- Bootstrap -->
        <link href="{{URL::to('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{URL::to('assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{URL::to('assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
        <!-- Animate.css -->
        <link href="{{URL::to('assets/vendors/animate.css/animate.min.css')}}" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="{{URL::to('assets/build/css/custom.min.css')}}" rel="stylesheet">
    </head>
    
    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>
            <div class="login_wrapper">
                <div class="animate form login_form">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li> -->
                    <section class="login_content">                                   
                        @if ($errors->has('email'))
                            <div class="row">
                                <div class="large-5 small-5 columns">&nbsp;</div>
                                <div class="large-5 small-5 columns">
                                    <div class="alert alert-warning alert-dismissible fade in" role="alert" style="color: #ffffff;">     
                                       <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                </div>
                                <div class="large-5 small-5 columns">&nbsp;</div>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <h1><i class="fa fa-users"></i> {{ __('Login Usuário') }} </h1>
                            <div>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-mail usuário" required autofocus>                                
                            </div>
                            <div>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Senha" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row">                               
                                <div class="col-xs-3"></div>
                                <div class="col-xs-3" style="text-align: center;">                          
                                    <div>
                                        <button type="submit" class="btn btn-default"><i class="fa fa-play"></i> {{ __('Conectar') }}</button>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="separator">
                                <div class="clearfix"></div>             
                                <div>                             
                                    <p>&copy {{ __('Validação do usuário...')}} </p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>            
            </div>
        </div>
    </body>
</html>