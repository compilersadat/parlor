<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parlour</title>
    <link rel="stylesheet" type="text/css" href="{{ url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link href="{{ url('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ url('css/mdb.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css')}}" />
    <!--gallery-->
    <script src="{{ url('https://code.jquery.com/jquery-2.2.0.min.js')}}" type="text/javascript"></script>

    <!-- Material Design Bootstrap -->
</head>
<body>
<!-- <section class="black">
  <i class="fa fa-facebook"></i>
</section> -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg">
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">
            <div class="row">

                <div class="col-md-8 mt-2 p-0">
                    <h4 class="h4 h6-responsive logo-header font-weight-bold" style="color: #f97d09;"></h4>
                </div>
            </div>
        </a>
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
            <!-- Links -->
            <ul class="navbar-nav ml-auto  pt-2">
                <li class="nav-item ">
                    <a class="nav-link " href="{{ url('/') }}">Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('parlor_service')}}">Our Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="gallery.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="gallery.html">My Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Contact Us</a>
                </li>
            </ul>
        </div>
        <!-- Collapsible content -->
    </div>
</nav>
@yield('content')
<!-- Footer -->
<footer class="page-footer font-small bg pt-4">
    <!-- Footer Links -->
    <div class="container py-3 text-center text-md-left">
        <!-- Grid row -->
        <div class="row">
            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">
                <!-- Content -->
                <h5 class="text-uppercase">Footer Content</h5>
                <p>Here you can use rows and columns to organize your footer content.</p>
            </div>
            <!-- Grid column -->
            <hr class="clearfix w-100 d-md-none pb-3">
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
                <!-- Links -->
                <h5 class="text-uppercase">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Links</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
    </div>
    <!-- Footer Links -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
</body>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ url('js/bootstrap.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{ url('js/mdb.min.js')}}"></script>
<script src="{{ url('js/demo.js')}}"></script>
</body>
</html>
