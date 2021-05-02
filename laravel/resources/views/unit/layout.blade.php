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

    <link rel="stylesheet" href="mystyle.css">


    
</head>
<style>
body{
background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/MultiCam.svg/1280px-MultiCam.svg.png');
background-repeat: no-repeat;
background-size: cover;
}
</style>
<body>
<div class="container">
    @yield('content')
</div>
   
</body>
</html>