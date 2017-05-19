<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5 - Implementing datatables tutorial using yajra package</title>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <link rel="icon" href="https://apex.oracle.com/pls/apex/fw_consulting/r/1373/files/static/v21/favicon.ico">

  

    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="sticky-footer-navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>

{{ Form::open(array('url' => 'login')) }}
<h1>Login</h1>

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
</p>

<p>
    {{ Form::label('email', 'Email Address') }}
    {{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
</p>

<p>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
</p>

<p>{{ Form::submit('Submit!') }}</p>
{{ Form::close() }}
   
</style>
 <script src="/bootstrap/dist/js/bootstrap.min.js"></script>

 <footer class="footer">
      <div class="container">
       @include('footer')
      </div>
    </footer>
</body>
</html>