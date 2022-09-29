<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootsrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- bootstrap icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ URL::asset('admin/css/main.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('/css/global.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('admin/css/sidebarcss.css') }}" /> 
 
       <title>@yield('title')</title>
</head>

<body>
    @include('admin.layouts.header')

    <!-- Page Content -->
    <div class="admin-navbar">
            @include('admin.layouts.sidebar')
</div>
<div class="admin-dashboard-container">
    <div class="admin-page-container">@yield('content')</div>
</div>



        
        <!-- Page Features -->
        <!-- /.row -->

    <!-- /.container -->
    {{-- footer start --}}
    @include('admin.layouts.footer')
</body>

<script src="{{ URL::asset('admin/js/main.js') }}"></script>
<script src="{{ URL::asset('admin/js/sidebarjs.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>


</html>
