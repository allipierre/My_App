<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="icon" href="https://apex.oracle.com/pls/apex/fw_consulting/r/1373/files/static/v21/favicon.ico">

   <title>Home</title>

   <!-- Bootstrap core CSS -->
   <link href="/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="/css/style.css" rel="stylesheet">
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">





   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
 </head>

  <body>



    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
      @include('menu')
      </div>
    </nav>



<div class="container">
    <div class="row">
        <h3>Developer Question</h3>
        <p>Can anyone tell me why this snippet flashes after the tooltip is removed from the DOM? It is driving me crazy!</p>
        <hr/>

    </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit New Item</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('itemCRUD.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($item, ['method' => 'PATCH','route' => ['itemCRUD.update', $item->id]]) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>beschreibung:</strong>
                {!! Form::textarea('beschreibung', null, array('placeholder' => 'beschreibung','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Typ:</strong>
                {!! Form::text('Typ', null, array('placeholder' => 'Typ','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Preis:</strong>
                {!! Form::text('Preis', null, array('placeholder' => 'Preis','class' => 'form-control')) !!}
            </div>
        </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Categorie:</strong>
                        {!! Form::text('categorie', null, array('placeholder' => 'categorie','class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Lieferant:</strong>
                        {!! Form::text('Lieferant', null, array('placeholder' => 'Lieferant','class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Minimalwert:</strong>
                        {!! Form::text('Minimalwert', null, array('placeholder' => 'Minimalwert','class' => 'form-control')) !!}
                    </div>
                </div>


                


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
  </div>
    </div>
    {!! Form::close() !!}
