@extends('layouts.app')

@section('content')



    <div class="container m-t-xxl">


        <div class="panel b box-shadow wrapper-lg">

            <div class="row">
                <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

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
                            <label for="password" class="col-md-4 control-label">Password</label>

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
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

                <div class="col-md-4">
                    <div class="well well-primary">
                        <p class="lead">Sign Up now for Free
                        </p>
                        <ul class="list-unstyled" style="line-height: 2">
                            <li><span class="fa fa-check text-success"></span> Create orders</li>
                            <li><span class="fa fa-check text-success"></span> Pay for services</li>
                            <li><span class="fa fa-check text-success"></span> Check order status</li>
                            <li><span class="fa fa-check text-success"></span> Send questions</li>
                            <li><span class="fa fa-check text-success"></span> Leave reviews</li>
                        </ul>
                        <p class="text-center"><a href="/auth/register/" class="btn btn-info">Sign Up</a></p>

                        <p class="text-center"><a target="_blank"
                                                  href=" /page/public-offer-on-provision-of-translation-and-other-services ">Terms
                                of use</a>
                        </p>
                    </div>
                </div>


            </div>
</div>

    </div>
    </div>
@endsection
