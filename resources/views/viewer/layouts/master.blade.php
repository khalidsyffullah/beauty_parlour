<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="{{ URL::asset('viewer/css/main.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('/css/global.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('auth/css/authstyle.css')}}">

    <!-- font awasome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootsrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- bootstrap icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>@yield('title')</title>
</head>

<body>
    @include('viewer.layouts.header')

    <!-- Page Content -->
    <div class="container">


        @yield('content')
        <!-- Page Features -->
        <!-- /.row -->

    </div>
    <!-- /.container -->
    {{-- footer start --}}
    @include('viewer.layouts.footer')
</body>

<script src="{{ URL::asset('viewer/js/main.js') }}"></script>

</html>
