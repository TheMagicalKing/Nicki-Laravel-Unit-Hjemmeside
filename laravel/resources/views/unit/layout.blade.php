layout file, like css.style, but stangely enough not needed
<!DOCTYPE html>
<html>
<head>
    <title>14th AAG</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    
</head>
<style>
body{
background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/MultiCam.svg/1280px-MultiCam.svg.png')
}
</style>
<body>
<div class="container">
    @yield('content')
</div>
   
</body>
</html>