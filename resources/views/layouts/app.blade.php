<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="/dist/css/app.css" rel="stylesheet" type="text/css">
</head>
<body id="app-layout">



<header id="header" class="navbar bg-white-only padder-v b-b box-shadow">
    <div class="container">
        <div class="navbar-header">
            <button class="btn btn-link visible-xs pull-right m-r" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a href="{{ url('/') }}" class="navbar-brand v-center m-t-xs"><i class="icon-notebook fa-2x m-r-md"></i>
                <span class="h4">Team Work</span></a>
        </div>
        <div class="collapse navbar-collapse">





            <form class="navbar-form navbar-form-sm navbar-left" role="search">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control input-sm bg-light no-border rounded padder" placeholder="Search projects...">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-sm bg-light rounded"><i class="fa fa-search"></i></button>
              </span>
                    </div>
                </div>
            </form>



            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li>
                        <div class="m-t-sm">
                            <a href="{{ url('/login') }}" class="btn btn-link btn-sm">Sign in</a> or
                            <a href="{{ url('/register') }}" class="btn btn-sm btn-primary btn-rounded m-l"><strong>Sign up</strong></a>
                        </div>
                    </li>
                @else
                    <li><a href="{{route('task.list')}}"><i class="icon-compass text-lg"></i></a></li>


                    <li><a href="#"><i class="icon-grid text-lg"></i></a></li>
                    <li><a href="#"><i class="icon-organization text-lg"></i></a></li>

                    <li><a href="{{route('account.edit')}}"><i class="icon-user text-lg"></i></a></li>


                    <li>
                        <a href="#">
                            <i class="icon-bell text-lg"></i>
                            <span class="badge badge-sm up bg-danger pull-right-xs">2</span>
                        </a>
                    </li>



                {{--

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                    --}}
                @endif
            </ul>
        </div>
    </div>
</header>





    @yield('content')





<footer id="footer" class="m-t-xxl">
        <div class="container">
            <div class="row padder-v m-t">
                <div class="col-xs-8">
                    <ul class="list-inline">
                        <li><a href="#">Sales</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">API</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Job</a></li>
                    </ul>
                </div>
                <div class="col-xs-4 text-right">
                    Instagram © 2016
                </div>
            </div>
    </div>
</footer>


    <script src="/dist/js/app.js"></script>
</body>
</html>
