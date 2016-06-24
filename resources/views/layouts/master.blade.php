<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Andrew Bielecki')</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='icon' href='/images/favicon.ico'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/master.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    @yield('head')
</head>

<body>
<div class="container-fluid">
    @if(\Session::has('flash_message'))
        <div class="row flashmessage">
            <div class="col-sm-12">
                {{\Session::get('flash_message')}}
            </div>
        </div><br>
    @endif
</div>

<div class="jumbotron">
    <div class="container">
        <h1>Andrew Bielecki</h1>
        <p>Full Stack Web Developer with skills in HTML, CSS, JavaScript, MySQL, PHP, and the Laravel Framework</p>
    </div>
</div>

<footer>

    <div class="container footer">
        <div class="row">
            <div class="col-sm-4" id="footer">
                &copy; {{date('Y')}} Andrew Bielecki
            </div>
            <div class="col-sm-4 text-center">
                <a href="mailto:ambielecki@gmail.com">ambielecki@gmail.com</a>
            </div>
            <div class="col-sm-4 text-right">
                <a href="https://github.com/ambielecki">Vist me on Github <i class="fa fa-github"></i></a>
            </div>
        </div>
    </div>
</footer>

@yield('content')

{{-- Load jquery and bootstrap js --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
@yield('body')



</body>
</html>
