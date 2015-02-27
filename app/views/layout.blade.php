<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Space Station 14</title>
        <link href="{{ asset('bower/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('bower/bootstrap/dist/css/bootstrap-theme.min.css') }}" rel="stylesheet" />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{asset('bower/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://www.spacestation14.com">Space Station 14</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li {{ (Request::is('/') ? ' class="active"' : '') }}>
                            <a href="{{{ URL::to('') }}}">Home</a>
                        </li>
                        <li><a href="http://www.spacestation14.com/wiki/Main_Page">Wiki</a></li>
                        <li><a href="http://forum.spacestation14.com/">Forum</a></li>
                        <li><a href="http://phab.nexisonline.net/">Phabricator</a></li>
                    </ul>
                </div>
                <?/*
                     <div id="navbar" class="navbar-collapse collapse">
                     <form class="navbar-form navbar-right">
                     <div class="form-group">
                     <input type="text" placeholder="Email" class="form-control">
                     </div>
                     <div class="form-group">
                     <input type="password" placeholder="Password" class="form-control">
                     </div>
                     <button type="submit" class="btn btn-success">Sign in</button>
                     </form>
                     </div><!--/.navbar-collapse -->
                     */
                ?>
            </div>
        </nav>

        <div id='wrap'>
            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div class="jumbotron">
                <div class="container">
                    @yield('jumbotron')
                </div>
            </div>

            <div class="container">
                @include('notifications')

                @yield('content')
            </div>
            <div id="push"></div>
        </div>
        <div id="footer">
            <div class="container">
                <p class="muted credit">
                    Copyright &copy;2015 Space Wizards Federation.
                </p>
            </div>
        </div>
    </body>
</html>
