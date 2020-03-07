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

    <!-- Title Page-->
    <title>Create|Category</title>

   <!-- Icons font CSS-->
   <link href="/public/vendor-form/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
   <link href="/public/vendor-form/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
   <!-- Font special for pages-->
   <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <!-- Vendor CSS-->
   <link href="/public/vendor-form/select2/select2.min.css" rel="stylesheet" media="all">
   <link href="/public/vendor-form/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/public/css/category_add.css" rel="stylesheet" media="all">
</head>

<body>
    @include('layouts\_nav')
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Category</h2>
                    <form method="POST" action="{{route('category.store')}}">
                        @csrf
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Name" name="name" required> 
                        </div>
                        
                        <div class="p-t-30">
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
    <script src="/public/css/category_add.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->