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
<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
      @include('menu')
      </div>
    </nav>

<div class="container sxr">
  <table id="userss" class="table table-hover table-condensed" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>name</th>
            <th>email</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>lastname</th>


        </tr>
    </thead>
  </table>
</div>

<script type="text/javascript">
$(document).ready(function() {
    oTable = $('#userss').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('usersverwaltung.getUsersv') }}",
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'created_at', name: 'created_at'},
            {data: 'updated_at', name: 'updated_at'},
            {data: 'lastname', name: 'lastname'}



        ]
    });
});
</script>

<style type="text/css">


    body > .container {
    padding: 120px 15px 0;
}

.dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
    color: rgb(255, 255, 255) !important;
    border: 1px solid rgb(151, 151, 151);
    background-color: rgb(14, 97, 169);
    background: rgb(14, 97, 169);
    background: rgb(14, 97, 169);
    background: rgb(14, 97, 169);
    background: rgb(14, 97, 169);
    background: rgb(14, 97, 169);
    background: rgb(14, 97, 169);
}
thead{
 background: rgb(153, 153, 153);

}
thead tr{
     height: 49px !important;
}

.sorting,.sorting_asc{
    color: rgb(255, 255, 255) !important;
    padding-bottom: 13px !important;
}
td{
    border-left: 1px solid rgb(242, 242, 242);
    border-right: 1px solid rgb(242, 242, 242);
    border-top: 1px solid rgb(242, 242, 242);
    border-bottom: 1px solid rgb(242, 242, 242);
}
.table-condensed>tbody>tr>td, .table-condensed>tbody>tr>th, .table-condensed>tfoot>tr>td, .table-condensed>tfoot>tr>th, .table-condensed>thead>tr>td, .table-condensed>thead>tr>th {
    padding: 5px;
    padding-top: 13px;
    padding-bottom: 13px;
}

.sorting_1,.sorting_asc{
    text-align: center;
}

</style>
 <script src="/bootstrap/dist/js/bootstrap.min.js"></script>

 <footer class="footer">
      <div class="container">
       @include('footer')
      </div>
    </footer>
</body>
</html>
