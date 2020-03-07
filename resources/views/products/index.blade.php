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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Title Page-->
    <title>Index|Category</title>

   
</head>

<body>
    @include('layouts\_nav')
    <div class="container mt-5">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>index</th>
                    <th>Name</th>
                    <th>size</th>
                    <th>price</th>
                    <th>Category</th>
                    <th>Tags</th>
                    <th>Control</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $index => $product)
                <tr>
                    <td>{{$index++}}</td>
                    <td>{{$product['product']->name}}</td>
                    <td>{{$product['product']->size}}</td>
                    <td>{{$product['product']->price}}</td>
                    <td>
                        @foreach ($product['cats'] as $cat)
                            {{$cat->name}},
                        @endforeach
                    </td>
    
                    <td>
                        @foreach ($product['tags'] as $tag)
                            {{$tag->name}},
                        @endforeach
                    </td>
                    <td>
                        <a href="{{route('product.show',$product['product']->id)}}" class="btn btn-secondary btn-xs"><i class="fa fa-eye"></i></a>
                        <a href="{{route('product.edit',$product['product']->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                        <form class="mt-2" method="POST" action="{{route('product.destroy',$product['product']->id)}}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
        <div class="p-t-20 mb-5">
            <a href="{{route('product.create')}}"><button class="btn btn--radius btn--green" ><i class="fa fa-tag"></i> Add Product</button></a>
        </div>
    </div>
</body>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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