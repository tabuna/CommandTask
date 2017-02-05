<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Контрагент</title>
    <link href="/dist/css/app.css" rel="stylesheet" type="text/css">
</head>
<body id="app-layout">


<header id="header" class="navbar bg-white-only padder-v  box-shadow-lg">
    <div class="container">
        <div class="navbar-header m-t-sm">
            <button class="btn visible-xs pull-right m-r" type="button" data-toggle="collapse"
                    data-target=".navbar-collapse">
                <i class="icon-menu"></i>
            </button>
            <a href="{{ url('/') }}" class="navbar-brand v-center m-t-xs"><i class="icon-wallet text-lg m-r-md"></i>
                <span class="h4">Контрагент</span></a>
        </div>
        <div class="collapse navbar-collapse">


            @if (!Auth::guest())
                <form class="navbar-form navbar-form-sm navbar-left" role="search">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control input-sm bg-light no-border rounded padder"
                                   placeholder="Поиск предложений...">
                            <span class="input-group-btn">
                <button type="submit" class="btn btn-sm bg-light rounded"><i class="icon-magnifier"></i></button>
              </span>
                        </div>
                    </div>
                </form>
        @endif


        <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li>
                        <div class="m-t-sm text-center">
                            <a href="{{ url('/login') }}" class="btn btn-link btn-sm">Войти</a> или
                            <a href="{{ url('/register') }}" class="btn btn-sm btn-info btn-rounded m-l"><strong>Зарегистрироваться</strong></a>
                        </div>
                    </li>
                @else
                    <li><a href="{{route('task.list')}}" title="Спрос и предложения">
                            <span class="v-center">
                                 <i class="icon-compass text-lg"></i> <span class="m-l-xs">Поиск</span>
                            </span>
                        </a>
                    </li>


                    <li><a href="/organizations" title="Организация">
                            <span class="v-center">
                                 <i class="icon-organization text-lg"></i> <span class="m-l-xs">Организация</span>
                            </span>
                        </a>
                    </li>

                    <li><a href="{{route('account.edit')}}" title="Профиль">
                            <span class="v-center">
                                 <i class="icon-user text-lg"></i> <span class="m-l-xs">Профиль</span>
                            </span>
                        </a>
                    </li>

                    <li><a href="/chat" title="Сообщения">
                            <span class="v-center">
                                 <i class="icon-envelope text-lg"></i>
                                  <span class="badge badge-sm up bg-danger pull-right-xs">2</span>
                                <span class="m-l-xs">Сообщения</span>
                            </span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</header>


@yield('content')


<footer id="footer" class="">
    <div class="container">
        <div class="row padder-v m-t">
            <div class="col-xs-8">
                <ul class="list-inline">
                    <li class="m-r-sm"><a href="#">Об оплате</a></li>
                    <li class="m-r-sm"><a href="#">Договор оферты</a></li>
                    <li class="m-r-sm"><a href="#">Помощь</a></li>
                </ul>
            </div>
            <div class="col-xs-4 text-right">
                Контрагент © 2017
            </div>
        </div>
    </div>
</footer>


<script src="/dist/js/app.js"></script>
</body>
</html>
