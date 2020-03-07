<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <!-- Icons font CSS-->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" media="all">
   <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" media="all">
    
   <link href="/public/css/category_add.css" rel="stylesheet" media="all">

    <!-- Title Page-->
    <title>Index|Category</title>

   
</head>

<body>
    @include('layouts\_nav')
    <div class="container mt-5">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
        <div class="p-t-20 mb-5">
            <a href="{{route('category.create')}}"><button class="btn btn--radius btn--green" >Add Category</button></a>
        </div>
    
    </div>
    
</body>


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>


<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</html>
<!-- end document-->