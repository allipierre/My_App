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
 <style>

 .table-bordered {
    border: 1px solid rgba(0,0,0,.15);

    background-clip: border-box;
    border-radius: 5px;
}

.bach{
  background: rgb(59, 119, 171);
    color: rgb(255, 255, 255);
    text-align: center;
}

.df {
    padding: 20px 15px 0 !important;

}

th ,tr{
    text-align: center;
}


 .hoverable:hover {
          background-color: rgba(241, 241, 241, 0.77);

    }
 </style>

  <body>

    <div class="container">
        <div class="row">
            <h3>Developer Question</h3>
            <p>Can anyone tell me why this snippet flashes after the tooltip is removed from the DOM? It is driving me crazy!</p>
            <hr/>

        </div>
        </div>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
      @include('menu')
      </div>
    </nav>


<div class="container df">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('itemCRUD.create') }}"> Create New Item</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr class="bach">
           <th>No</th>
            <th>Name</th>
            <th>Typ</th>
            <th>Preis</th>
            <th>Kategorie</th>
            <th>Lieferant</th>
            <th>Minimalwert</th>
            <th>Beschreibung</th>
            <th width="280px">Action</th>
            <th width="280px">Action</th>
            <th width="280px">Action</th>
        </tr>
   @foreach ($Products as $key => $item)
    <tr class="hoverable">
        <td>{{ ++$i }}</td>
        <td color="#FF0000 !important">{{ $item->name }}</td>
        <td>{{ $item->Typ }}</td>
        <td>{{ $item->Preis }}</td>
        <td>{{ $item->categorie }}</td>
        <td>{{ $item->Lieferant }}</td>
        <td>{{ $item->Minimalwert }}</td>
        <td>{{ $item->beschreibung }}</td>
          <td>
            <a class="btn btn-info" href="{{ route('itemCRUD.show',$item->id) }}"><span class="t-Icon fa fa-eye"></span> Show</a>
         </td>



                  <td>
                    <a class="btn btn-primary" href="{{ route('itemCRUD.edit',$item->id) }}"><span class="t-Icon fa fa-edit"></span> Edit</a>
                  </td>



                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['itemCRUD.destroy', $item->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
              </td>
    </tr>
    @endforeach
    </table>

    {!! $Products->render() !!}

  </div>



    <footer class="footer">
      <div class="container">
       @include('footer')
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
