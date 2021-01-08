<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('head')
    <link href="{{asset('mdb')}}/css/all.min.css" rel="stylesheet"/>
    <link href="{{asset('mdb')}}/css/fonts-google.css" rel="stylesheet"/>
    <link href="{{asset('mdb')}}/css/mdb.min.css" rel="stylesheet"/>
    <link href="{{asset('my-assets')}}/css/my.css" rel="stylesheet"/>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="{{asset('my-assets')}}/img/logo.png" height="60" alt="brand" loading="lazy"/>
          </a>
        </div>
    </nav>
    @yield('body')
    
    <footer class="bg-dark text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3 text-white" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2020 Copyright:
            <a class="text-light" href="https://ecotechclub.herokuapp.com" target="_blanc">ecotech @ club</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script type="text/javascript" src="{{asset('mdb')}}/js/mdb.min.js"></script>
</body>
</html>