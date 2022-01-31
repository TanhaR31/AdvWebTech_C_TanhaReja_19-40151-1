<!--
    <a class="btn btn-primary" href="{{route('home')}}">Home</a>
    <a class="btn btn-primary" href="{{route('pservice')}}">Product</a>
    <a class="btn btn-primary" href="{{route('ourteams')}}">Our Teams</a>
    <a class="btn btn-primary" href="{{route('aboutus')}}">About Us</a>
    <a class="btn btn-primary" href="{{route('contactus')}}">Contact Us</a>
-->

<html>
    <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>

    <body>
    <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{('home')}}">APWT TASK-1</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">
                    <i class="fa fa-home"></i>
                    Home
                    <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{route('pservice')}}">
                    <i class="fa fa-home"></i>
                    Products
                    <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{route('ourteams')}}">
                    <i class="fa fa-home"></i>
                    Our Team
                    <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{route('aboutus')}}">
                    <i class="fa fa-home"></i>
                    About Us
                    <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{route('contactus')}}">
                    <i class="fa fa-home"></i>
                    Contact Us
                    <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    </body>
</html>