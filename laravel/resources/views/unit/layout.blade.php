layout file, like css.style, but stangely enough not needed
<!DOCTYPE html>
<html>
<head>
    <title>14th AAG</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ URL::asset('/unit.css') }}"> 




    
</head>

<body>
<div class="navbar">
    <ul class="horizontal">
        <li><a href="/unit">Home</a></li>
        <li><a href="{{ route('unit.leadership')}}">leadership</a></li>
        <li><a href="/unitlist">Unitlist</a></li>
        <li><a href="/roster">Contact</a></li>
    </ul>
</div>

    @yield('content')

   
</body>
</html>