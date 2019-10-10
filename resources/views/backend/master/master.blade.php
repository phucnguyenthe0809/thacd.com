<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản trị - Store</title>
    <base href="{{ asset('backend') }}/">
   @section('css')
        <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <!--Icons-->
    <link rel="stylesheet" href="Awesome/css/all.css">
   @show
  
    
</head>

<body>
    @include('backend.master.header')



    @include('backend.master.sidebar')


    @yield('content')
  

    @section('script')
    <!-- javascript -->
    <script src="js/lumino.glyphs.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    @show
</body>

</html>
