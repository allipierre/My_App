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

    


<div class="full" style="background-image:url('https://apex.oracle.com/pls/apex/fw_consulting/r/1373/files/static/v21/slider-2.jpg');">
  <div class="container">
    <div class="row clearfix">
      <div style="padding: 0 0 750px 0;">
        <div class="col-xs-5 line">
          <hr>
        </div>
        <div class="col-xs-2 logo text-center">Logo</div>
        <div class="col-xs-5 line">
          <hr>
        </div>
      </div>
    </div>
  </div>
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
