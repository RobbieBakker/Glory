<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>@yield('title') - CJK Glory</title>
        <link rel="shortcut icon" href="images/logo.ico" />

        <!-- Bootstrap Core CSS -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{asset('css/modern-business.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }
            body {
                width: 100%;
            }

            .content {
                text-align: center;
                display: inline-block;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
                color: #B0BEC5;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
        </style>

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">CJK Glory</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li {{{ (Request::is('/') ? 'class=active' : '') }}}>
                            <a href="/">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Informatie<span class="caret"></span></a>
                            <ul class="dropdown-menu" style="background-color:#222; color:#9d9d9d !important">
                                <li {{{ (Request::is('info') ? 'style=background-color:#080808;' : '') }}}{{{ (Request::is('info') ? 'color:white;' : '') }}}><a href="/info" style="color:inherit">Koor</a></li>
                                <li {{{ (Request::is('bestuur') ? 'style=background-color:#080808;' : '') }}}{{{ (Request::is('bestuur') ? 'color:white;' : '') }}}><a href="/bestuur" style="color:inherit">Bestuur</a></li>
                                <li {{{ (Request::is('dirigent') ? 'style=background-color:#080808;' : '') }}}{{{ (Request::is('dirigent') ? 'color:white;' : '') }}}><a href="/dirigent" style="color:inherit">Dirigent</a></li>
                            </ul>
                        </li>
                        <li {{{ (Request::is('agenda') ? 'class=active' : '') }}}>
                            <a href="/agenda">Agenda</a>
                        </li>
                        <li {{{ (Request::is('repetitieschema') ? 'class=active' : '') }}}>
                            <a href="/repetitieschema">Repetitie schema</a>
                        </li>
                        <li {{{ (Request::is('contact') ? 'class=active' : '') }}}>
                            <a href="/contact">Contact</a>
                        </li>
                        @if( !Auth::check() )
                            <li>
                                <a href="/login">Inloggen</a>
                            </li>
                        @endif
                        @if( Auth::check() )
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->firstName }}&nbsp{{ Auth::user()->lastName }}<span class="caret"></span></a>
                                <ul class="dropdown-menu" style="background-color:#222; color:#9d9d9d !important">
                                    <li {{{ (Request::is('profiel') ? 'style=background-color:#080808;' : '') }}}{{{ (Request::is('profiel') ? 'color:white;' : '') }}}><a href="/profiel" style="color:inherit">Profiel</a></li>
                                    <li {{{ (Request::is('downloads') ? 'style=background-color:#080808;' : '') }}}{{{ (Request::is('downloads') ? 'color:white;' : '') }}}><a href="/downloads" style="color:inherit">Downloads</a></li>
                                    <li>
                                        <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"  style="color:inherit">
                                            Uitloggen
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>

                        @endif
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <div class="container">

            @section('body')
            @show

            <hr>

            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; CJK Glory <?php echo date("Y"); ?></p>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="{{asset('js/jquery.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>

    </body>

</html>