<!DOCTYPE html>
<html lang="en">
 @include('head')

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
      @include('menu')
      </div>
    </nav>
    <div class="formsa">

   <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Text</label>
  <div class="col-10">
    <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Search</label>
  <div class="col-10">
    <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Email</label>
  <div class="col-10">
    <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-url-input" class="col-2 col-form-label">URL</label>
  <div class="col-10">
    <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
  <div class="col-10">
    <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-password-input" class="col-2 col-form-label">Password</label>
  <div class="col-10">
    <input class="form-control" type="password" value="hunter2" id="example-password-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-number-input" class="col-2 col-form-label">Number</label>
  <div class="col-10">
    <input class="form-control" type="number" value="42" id="example-number-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
  <div class="col-10">
    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-date-input" class="col-2 col-form-label">Date</label>
  <div class="col-10">
    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-month-input" class="col-2 col-form-label">Month</label>
  <div class="col-10">
    <input class="form-control" type="month" value="2011-08" id="example-month-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-week-input" class="col-2 col-form-label">Week</label>
  <div class="col-10">
    <input class="form-control" type="week" value="2011-W33" id="example-week-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-time-input" class="col-2 col-form-label">Time</label>
  <div class="col-10">
    <input class="form-control" type="time" value="13:45:00" id="example-time-input">
  </div>
</div>

</div>


<div class="container">
    <div class="col-md-12">
        <div class="page-header">
            <h1>
                How to use bootstrap tables to  Display data from MySQL using PHP
            </h1>
        </div>


        <div class="panel panel-success">
            <div class="panel-heading "> 
            <span class=""> This Source Code Provided By<br>
            <a href="https://www.sourcecodesite.com">SourceCodeSite.com</a> </span> 
                
             </div>
                         
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                     
                        <table  id="table"
                                data-show-columns="true"
                                data-height="460">
                        </table>
        </div>
    </div>
</div>              
</div>
</div>
</div>
<?php 
    $results = DB::select('select * from user where id = ?', [1]);

   
?>   




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
