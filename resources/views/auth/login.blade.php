@extends('layouts.app')

                        <style type="text/css">
                            .tse{
                                text-align: center;;
                                font-size: 3rem;
                                color: rgb(230, 49, 49);

                            }



                            .panel-default>.panel-heading {
    color: rgb(255, 255, 255) !important;
    background-color: rgb(48, 151, 209) !important;
    border-color: rgb(221, 221, 221);
}

.panel-footer {
    padding: 10px 15px;
    background-color: rgb(48, 151, 209) !important;
    border-top: 1px solid rgb(221, 221, 221);
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}

.panel-default{
    box-shadow: 100px 100px 104px rgba(0,0,0,.1), 0px 10px 10px 10px rgba(0,0,0,.05);
    border-radius: 2px;
}

body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: rgb(51, 51, 51);
    background-color: rgb(222, 225, 227) !important;
    background-image: url(http://www.ivosan.com/images/Elements/gastronomie.jpg) !important;
    background-size: cover;
    height: 100%;
    width: 100%;
}

.navbar .sert{
  padding-top:90px !important;
}

.btn-primary {
    color: rgb(255, 255, 255);
    background-color: rgb(255, 0, 0) !important;
    border-color: rgb(255, 0, 0) !important;

    /* width: 100%; */
}
.navbar-default .navbar-brand {
    color: rgb(51, 51, 51) !important;
}

.navbar-default {
    background-color: rgb(255, 255, 255) !important;
    border-color: rgb(231, 231, 231);
}
.glyphicon{
  color:rgb(92, 184, 92);
}

.glyphicon-envelope{
  color:black !important;
}
                        </style>

@section('content')
<div class="container sert" style="padding-top:90px !important;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group tse">
                        <p>Lagerverwaltungssystem</p>
                    </div>



                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                             <div class="input-group">
                             <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input placeholder="Give your Email..." id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                </div>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                            <div class="input-group">
                             <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                                <input placeholder="Give your Email..." id="email" id="password" type="password" class="form-control" name="password" required>
                                </div>

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
                                  <span class="glyphicon glyphicon-envelope"></span> Login
                                </button>

                                <button type="submit" class="btn btn-success">
                                    <span class="glyphicon glyphicon-envelope"></span> Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                   Forgot Your Password?
                                </a>
                            </div>
                        </div>



                    </form>

                </div>
                <div class="panel-footer">
                <small>
                Weitere Informationen finden Sie auf den Webseiten der
                <a href="#" target="_blank">Campus IT</a>
                und der <a href="#" target="_blank&quot;">DFN-AAI</a>
                </small>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
