<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script>
                window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
            </script>
    </head>
<body>
    <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
                    <div class="container">
                            <div class="navbar-header">

                                    <!-- Collapsed Hamburger -->
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                                            <span class="sr-only">Toggle Navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>

                                    <!-- Branding Image -->
                                    <a class="navbar-brand" href="#">
                                            云锐集团
                                        </a>
                                </div>

                            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                                    <!-- Left Side Of Navbar -->
                                    <ul class="nav navbar-nav">
                                            &nbsp;
                                        </ul>

                                    <!-- Right Side Of Navbar -->
                                    <ul class="nav navbar-nav navbar-right">
                                            <!-- Authentication Links -->
                                            @if (Auth::guest())

                                                @else
                                                    <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                                </a>

                                                            <ul class="dropdown-menu" role="menu">
                                                                    <li>
                                                                            <a href="{{ route('logout') }}"
                                                                                +                                            onclick="event.preventDefault();
+                                                     document.getElementById('logout-form').submit();">
                                                                                    Logout
                                                                                </a>

                                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                                    {{ csrf_field() }}
                                                                                </form>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                @endif
                                        </ul>
                                </div>
                        </div>
                </nav>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">登录</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">账号:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">密码:</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    登录
                                </button>

                                <a class="btn btn-link" href="#">
                                    忘记密码?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
+</html>




