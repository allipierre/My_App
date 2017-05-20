<!DOCTYPE html>
<html lang="en">
 @include('head')
  <body>
    <style>
    .formr{
      margin-bottom: 50px;
    }
    .form-group{
      margin-right: 50px;
    }
.dr{
  background: rgb(230, 229, 229);
}

.btn-primary {
    color: rgb(255, 255, 255);

    border-color: rgb(31, 130, 216);
    width: 100%;
    height: 50px;
}

select {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    width: 100%;
    height: 35px;
    background: rgb(255, 255, 255);
}

.btn-primary {
    color: rgb(255, 255, 255);

    border-color: rgb(31, 130, 216);
    width: 100%;
    height: 50px;
    font-size: 2rem;
}



    </style>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
      @include('menu')
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>Sticky footer with fixed navbare</h1>
      </div>
      <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body &gt; .container</code>.</p>
      <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>
  </div>

  <div class="container dr">
  <h2>Bootstrap Mixed Form <p class="lead">with horizontal and inline fields</p></h2>
  <form class="form-horizontal" role="form" method="POST" action="/insert">
    {{ csrf_field() }}
    <div class="form-group">
      <label class="col-sm-1" for="inputName">Name</label>
      <div class="col-sm-5"><input type="name" class="form-control"  name="name"  value="{{ old('name') }}" id="name" placeholder="Name"></div>
      <label class="col-sm-1" for="categorie">Categorie</label>
      <div class="col-sm-5">
        {{ Form::select('categorie', [
   '1' => 'Tomatoes',
   '2' => 'Potatoes',
   '3' => 'Orange',
   '4' => 'Paprika']
) }}
    </div>
    </div>


   <!--
   <div class="form-group">
      <label class="col-sm-1" for="categorie">Categorie</label>
      <div class="col-sm-5">
        {{ Form::select('categorie', [
   '1' => 'Tomatoes',
   '2' => 'Potatoes',
   '3' => 'Orange',
   '4' => 'Paprika']
   ) }}
    </div>
    </div>


 -->




    <div class="form-group">
      <label class="col-sm-1" for="Typ">Typ</label>
      <div class="col-sm-5"><input type="Typ" class="form-control" id="Typ" value="{{ old('Typ') }}" name="Typ" placeholder="Typ"></div>

      <label class="col-sm-1" for="Preis">Preis</label>
      <div class="col-sm-5"><input type="Preis" class="form-control" id="Preis" value="{{ old('Preis') }}" name="Preis" placeholder="Preis"></div>
    </div>
<!--
    <div class="form-group">
      <label class="col-sm-1" for="Preis">Preis</label>
      <div class="col-sm-5"><input type="Preis" class="form-control" id="Preis" value="{{ old('Preis') }}" name="Preis" placeholder="Preis"></div>
    </div>
    -->
    <div class="form-group">
      <label class="col-sm-12" for="TextArea">Beschreibung</label>
      <div class="col-sm-6"><textarea class="form-control" id="Beschreibung" name="beschreibung" value="{{ old('beschreibung') }}" placeholder="Beschreibung"></textarea></div>
    </div>
    <div class="form-group">
      <div class="col-sm-3"><label>Regal Nr</label><input type="text" class="form-control" value="{{ old('Kunde') }}"  name="Kunde"  placeholder="Preis"></div>
      <div class="col-sm-3"><label>Minimal Wert</label><input type="text" class="form-control" value="Minimalwert" name="Minimalwert" placeholder="MWert"></div>
    </div>

    <div class="form-group">
      <div class="col-sm-3"><label>Lieferant</label><input type="text" class="form-control" value="{{ old('Lieferant') }}" name="Lieferant" placeholder="Preis"></div>
      <div class="col-sm-3"><label>Minimal Wert</label><input type="text"value="{{ old('Minimalwert') }}"  name="Minimalwert" class="form-control" placeholder="Minimal wert"></div>
      <div class="col-sm-3"><label>Gewicht</label><input type="text" value="{{ old('gewicht') }}"  name="gewicht" class="form-control" placeholder="gewwicht"></div>
    </div>

    <div class="form-group">
      <label class="col-sm-1">Options</label>
      <div class="col-sm-2"><input type="text" class="form-control" placeholder="Option 1"></div>
      <div class="col-sm-3"><input type="text" class="form-control" placeholder="Option 2"></div>
    </div>
    <div class="form-group">
      <div class="col-sm-6">
        <button type="submit" class="btn btn-primary pull-right"><span class="t-Icon fa fa-edit"></span> Product eingeben</button>
      </div>

      <div class="col-sm-6">
        <button type="submit" class="btn btn-primary pull-right"><span class="t-Icon fa fa-eye"></span></span> alle Produckte sehen</button>
      </div>
    </div>
  </form>
  <hr>
</div>
<div class="container">
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
