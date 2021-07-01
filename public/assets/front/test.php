<!DOCTYPE html>
<html>
<head>
<!-- Using the jquery CDN -->
<script src="https://www.webcodegeeks.com/wp-content/litespeed/localres/ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Using the jquery dataTables CSS CDN -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
<!-- Using the jquery dataTables API CDN -->
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
</head>
<body>
     
    <!-- Target table to instantiate the DataTable API -->
    <table id="wgc_table" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>
    <!-- JQuery code to initializate the DataTables API -->
    <script>
      $(document).ready( function () {
           $('#wgc_table').DataTable();//Basic DataTable API instance 
        });
    </script>
 
</body> 
</html>