<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>LINK - Agency Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="assets/js/modernizr.custom.js"></script>

</head>

<body>

<!-- Menu -->
<nav class="menu" id="theMenu">
    <div class="menu-wrap">
        <h1 class="logo"><a href="{{ url('/home') }}">CREATION</a></h1>
        <i class="fa fa-arrow-right menu-close"></i>
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/service') }}">Services</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/material') }}">Material</a>

        <a href="#contact">Contact</a>
    </div>

    <!-- Menu button -->
    <div id="menuToggle"><i class="fa fa-bars"></i></div>
</nav>

<!-- MAIN IMAGE SECTION -->
<div id="aboutwrap" style="background-image: url({{ url('assets/img/aaa.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">

            </div>
        </div><!-- row -->
    </div><!-- /container -->
</div><!-- /aboutwrap -->

<div class="col-lg-12 table-responsive">
    <h4><b>Tài Liệu Công Ty</b></h4>
    <table class="table room-table-news">
        <thead>
        <tr>
            <th style="width: 20%">STT</th>
            <th style="width: 30%">Tên Tài Liệu</th>
            <th style="width: 20%">Download</th>
            <th style="width: 30%"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($documents as $document)
            <tr>
                <td>{{ $document->id }}</td>
                <td>{{ $document->name }}</td>
                <td>
                    <a class="btn btn-default" href="{{ $document->type }}" download>Download</a>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/classie.js"></script>
</body>
</html>
