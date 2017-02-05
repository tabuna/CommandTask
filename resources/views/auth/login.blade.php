@extends('layouts.app')

@section('content')




    <div class="container m-t-xxl ">
        <div class="panel b box-shadow-lg wrapper-lg">

            <div class="row">
                <div class="col-md-8">
            <div class="panel b box-shadow">
                <div class="panel-heading">Войти</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Пароль</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label class="i-checks">
                                        <input type="checkbox" name="remember" checked=""><i></i> Запомнить меня
                                    </label>

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Войти
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Забыли пароль?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

                <div class="col-md-4">
                    <div class="well well-primary">
                        <p class="lead">Зарегистрируйся бесплатно
                        </p>
                        <ul class="list-unstyled" style="line-height: 2">
                            <li><span class="icon-check text-success"></span> Предложение для участников</li>
                            <li><span class="icon-check text-success"></span> Поиск контрагентов</li>
                            <li><span class="icon-check text-success"></span> Реклама компании</li>
                            <li><span class="icon-check text-success"></span>  Живое общение</li>
                        </ul>
                        <p class="text-center"><a href="/register/" class="btn btn-info">Зарегистрироваться</a></p>

                        <p class="text-center"><a target="_blank"
                                                  href=" /page/public-offer-on-provision-of-translation-and-other-services ">Публичная офферта</a>
                        </p>
                    </div>
                </div>


            </div>
</div>

    </div>

@endsection
