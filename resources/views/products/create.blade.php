<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Create|Products</title>

    
    <!-- Icons font CSS-->
    <link href="/public/vendor-form/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="/public/vendor-form/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="/public/vendor-form/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/public/vendor-form/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="/public/css/add_form.css" rel="stylesheet" media="all">
  
</head>

<body>
    @include('layouts\_nav')
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Product</h2>
                    <form method="POST" action="{{route('product.store')}}" enctype='multipart/form-data'>
                        @csrf

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NAME" name="name">
                        </div>
                        
                        <div class="input-group">
                            <input class="input--style-1" min="0" type="number" placeholder="PRICE" name="price">
                        </div>
                            <!--
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="BIRTHDATE" name="birthday">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                             -->
                        <div class="input-group">
                            <input class="input--style-1" type="number" min="0" placeholder="SIZE" name="size">
                        </div>

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <label class="text-muted">CATEGORY</label>
                                <select name="category_id[]"  class="select2-multi" multiple="multiple">
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                            
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search ">
                                <label class="text-muted">TAGS</label>
                                <select name="tag_id[]" multiple width="20px">
                                    @foreach ($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                    @endforeach
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                       

                        <div class="input-group">
                            <input class="input--style-1" type="file" placeholder="Image" name="image">
                        </div>

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">ADD</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="/public/vendor-form/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="/public/vendor-form/select2/select2.min.js"></script>
    <script src="/public/vendor-form/datepicker/moment.min.js"></script>
    <script src="/public/vendor-form/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="/public/js/add_form.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
