<!DOCTYPE html>
<html>
<head>
    <title>Laravel 6 - Implementing datatables tutorial using yajra package</title>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <link rel="icon" href="https://apex.oracle.com/pls/apex/fw_consulting/r/1373/files/static/v21/favicon.ico">


  

    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    
</head>
<body>
<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
      @include('menu')
      </div>
    </nav>

<div class="container sxr">
  <table id="users" class="table table-hover table-condensed" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Post Title</th>
            <th>Category</th>
            <th>Tag</th>
        </tr>
    </thead>
  </table>
</div>

<table id="userse" class="table no-margin text-center">
           <thead>
        <tr class="success">
            <th class="success">Id</th>
            <th>Post Title</th>
            <th>Category</th>
            <th>Tag</th>
        </tr>
    </thead>
        </table>    




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

<script type="text/javascript">
$(document).ready(function() {
    oTable = $('#users').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('datatable.getstudent') }}",
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'fname', name: 'fname'},
            {data: 'lname', name: 'lname'},
            {data: 'lname', name: 'lname'}
        ]
    });





     oTables = $('#userse').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('datatable.getstudent') }}",
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'fname', name: 'fname'},
            {data: 'lname', name: 'lname'},
            {data: 'lname', name: 'lname'}
        ]
    });



     oTablee = $('#table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('datatable.getstudent') }}",
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'fname', name: 'fname'},
            {data: 'lname', name: 'lname'},
            {data: 'lname', name: 'lname'}
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


 <footer class="footer">
      <div class="container">
       @include('footer')
      </div>
    </footer>


    
    <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
    
    
</body>
</html>