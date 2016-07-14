@extends('layouts.app')

@section('content')


    <div class="container m-t-xxl">


        <div class="panel b box-shadow wrapper-lg">
            <div class="row">
                <div class="col-md-3">

                    <!-- nav -->
                    <nav class="navi clearfix  wrapper-sm">
                        <ul class="nav">

                            <li class="hidden-folded text-danger padder m-t m-b-sm text-xs">
                                <span class="text-info">CSS</span>
                            </li>
                            <li>
                                <a href="/ui/type">
                                    <i class="fa fa-desktop icon"></i>
                                    <span>Typography</span>
                                </a>
                            </li>

                            <li>
                                <a href="/ui/table">
                                    <i class="fa fa-tag icon"></i>
                                    <span>Tables</span>
                                </a>
                            </li>


                            <li>
                                <a href="/ui/buttons">
                                    <i class="fa fa-history icon"></i>
                                    <span>Buttons</span>
                                </a>
                            </li>


                            <li>
                                <a href="/ui/images">
                                    <i class="icon-wallet icon"></i>
                                    <span>Images</span>
                                </a>
                            </li>

                            <li>
                                <a href="/ui/grid">
                                    <i class="icon-wallet icon"></i>
                                    <span>Grid system</span>
                                </a>
                            </li>

                            <li>
                                <a href="/ui/helps">
                                    <i class="icon-wallet icon"></i>
                                    <span>Helper classes</span>
                                </a>
                            </li>


                        </ul>

                    </nav>
                    <!-- nav -->

                </div>

                <div class="col-md-9  b-l b-light">
                    <div class="wrapper-md">


                        <form class="form-horizontal" action="{{route('account.update')}}" method="POST">


                            <a href="" class="thumb-lg pull-left m-r-md">
                                <img src="http://flatfull.com/themes/angulr/html/img/a0.jpg" class="img-circle">
                            </a>
                            <div class="clear m-b">
                                <div class="m-b m-t-sm">
                                    <span class="h3 text-black">John.Smith</span>
                                    <small class="m-l">London, UK</small>
                                </div>
                                <p class="m-b">
                                    <a href="" class="btn btn-sm btn-bg btn-rounded btn-default btn-icon"><i
                                                class="fa fa-twitter"></i></a>
                                    <a href="" class="btn btn-sm btn-bg btn-rounded btn-default btn-icon"><i
                                                class="fa fa-facebook"></i></a>
                                    <a href="" class="btn btn-sm btn-bg btn-rounded btn-default btn-icon"><i
                                                class="fa fa-google-plus"></i></a>
                                </p>
                            </div>


                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif


                            <div class="form-group">
                                <label class="col-sm-3 control-label">Old Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="old_password" class="form-control" placeholder="***">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label">New Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" class="form-control" placeholder="******">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Repeat Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password_confirmation" class="form-control"
                                           placeholder="******">
                                </div>
                            </div>


                            {!! csrf_field() !!}
                            <input name="_method" value="PUT" type="hidden">
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-default">Change Password</button>
                                </div>
                            </div>
                        </form>


                    </div>


                </div>
            </div>
        </div>
    </div>









    {{--

            <div class="row">


                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">Settings</div>

                        <div class="panel-body">



                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif




                            <form class="form-horizontal" action="{{route('account.update')}}" method="POST">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" value="{{$user->name}}" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control" value="{{$user->email}}" placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('nickname') ? ' has-error' : '' }}">
                                    <label class="col-sm-2 control-label">NickName</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nickname" class="form-control" value="{{$user->nickname}}" placeholder="NickName">
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                                    <label class="col-sm-2 control-label">WebSite</label>
                                    <div class="col-sm-10">
                                        <input type="url" name="website" class="form-control" value="{{$user->website}}" placeholder="Web Site">
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <label class="col-sm-2 control-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="tel" name="phone" class="form-control" value="{{$user->phone}}" placeholder="Phone">
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('about') ? ' has-error' : '' }}">
                                    <label class="col-sm-2 control-label">About</label>
                                    <div class="col-sm-10">
                                      <textarea class="form-control" name="about" placeholder="About">{{$user->about}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="sex" value="1" @if($user->sex) checked @endif> Man
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="sex" value="0" @if(!$user->sex) checked @endif> Woman
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('notification') ? ' has-error' : '' }}">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="notification" value="1" @if($user->notification) checked @endif> Subscrible
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="notification" value="0" @if(!$user->notification) checked @endif> Non subscrible
                                            </label>
                                        </div>
                                    </div>
                                </div>






                                {!! csrf_field() !!}
                                <input name="_method" value="PUT" type="hidden">
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Sign in</button>
                                    </div>
                                </div>
                            </form>



                        </div>
                    </div>
                </div>
            </div>

            --}}
    </div>
@endsection
