@extends('layouts.app')

@section('content')



    <div id="content" class="container" role="main">
        <div class="panel b box-shadow m-t-xxl">


            <div class="hbox hbox-auto-xs hbox-auto-sm">
                <div class="col w-md b-r">
                    <div class="wrapper b-b bg">
                        <button class="btn btn-sm btn-default pull-right visible-sm visible-xs"><i class="fa fa-bars"></i></button>
                        <a class="btn btn-sm btn-danger w-xs font-bold">Compose</a>
                    </div>
                    <div class="wrapper hidden-sm hidden-xs" id="email-menu">
                        <ul class="nav nav-pills nav-stacked nav-sm">
                            <li class="active"><a>Inbox</a></li>
                            <li><a>Starred</a></li>
                            <li><a>Sent</a></li>
                            <li><a>Important</a></li>
                            <li><a>Draft</a></li>
                            <li><a>Trash</a></li>
                        </ul>
                        <div class="wrapper">Labels</div>
                        <ul class="nav nav-pills nav-stacked nav-sm">
                            <li>
                                <a><i class="fa fa-fw fa-circle text-info"></i>Angular</a>
                            </li>
                            <li>
                                <a><i class="fa fa-fw fa-circle text-primary"></i>Bootstrap</a>
                            </li>
                            <li>
                                <a><i class="fa fa-fw fa-circle text-success"></i>Work</a>
                            </li>
                            <li>
                                <a><i class="fa fa-fw fa-circle text-muted"></i>Client</a>
                            </li>
                        </ul>
                        <div class="wrapper">
                            <form name="label">
                                <div class="input-group">
                                    <input type="text" class="form-control input-sm" placeholder="New label">
	            <span class="input-group-btn">
	              <button class="btn btn-sm btn-default" type="button">Add</button>
	            </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">

                    <div>
                        <!-- header -->
                        <div class="wrapper  b-b">
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-sm btn-bg btn-default"><i class="fa fa-chevron-left"></i></button>
                                <button type="button" class="btn btn-sm btn-bg btn-default"><i class="fa fa-chevron-right"></i></button>
                            </div>
                            <div class="btn-toolbar">
                                <div class="btn-group dropdown">
                                    <button class="btn btn-default btn-sm btn-bg dropdown-toggle" data-toggle="dropdown">
                                        <span class="dropdown-label">Filter</span>
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu text-left text-sm">
                                        <li><a href="#">Unread</a></li>
                                        <li><a href="#">Starred</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-bg btn-default" data-toggle="tooltip" data-placement="bottom" data-title="Refresh" data-original-title="" title=""><i class="fa fa-refresh"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- / header -->

                        <!-- list -->
                        <ul class="list-group list-group-lg no-radius m-b-none m-t-n-xxs">
                            <li class="list-group-item clearfix">
                                <a class="avatar thumb pull-left m-r" href="#/app/page/profile">
                                    <img  src="img/a10.jpg">
                                </a>
                                <div class="pull-right text-sm text-muted">
                                    <span class="hidden-xs ">5 months ago</span>
                                    <i class="fa fa-paperclip m-l-sm"></i>
                                </div>
                                <div class="clear">
                                    <div><a class="text-md " href="#/app/mail/10">Angular is Awesome</a><span class="label bg-light m-l-sm ">angular</span></div>
                                    <div class="text-ellipsis m-t-xs ">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper Neque quam. Aliquam sollicitudin venenati</div>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a class="avatar thumb pull-left m-r" href="#/app/page/profile">
                                    <img ng-src="img/a9.jpg" src="img/a9.jpg">
                                </a>
                                <div class="pull-right text-sm text-muted">
                                    <span class="hidden-xs ">5 months ago</span>
                                    <i class="fa fa-paperclip ng-hide m-l-sm" ng-show=""></i>
                                </div>
                                <div class="clear">
                                    <div><a class="text-md " href="#/app/mail/9">Bootstrap components written in pure AngularJS</a><span class="label bg-light m-l-sm ">bootstrap</span></div>
                                    <div class="text-ellipsis m-t-xs ">Retur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibu</div>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a class="avatar thumb pull-left m-r" href="#/app/page/profile">
                                    <img ng-src="img/a1.jpg" src="img/a1.jpg">
                                </a>
                                <div class="pull-right text-sm text-muted">
                                    <span class="hidden-xs ">5 months ago</span>
                                    <i class="fa fa-paperclip m-l-sm"></i>
                                </div>
                                <div class="clear">
                                    <div><a class="text-md " href="#/app/mail/8">Nesting view in Angular</a><span class="label bg-light m-l-sm ">angular</span></div>
                                    <div class="text-ellipsis m-t-xs ">Neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat.</div>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a class="avatar thumb pull-left m-r" href="#/app/page/profile">
                                    <img ng-src="img/a2.jpg" src="img/a2.jpg">
                                </a>
                                <div class="pull-right text-sm text-muted">
                                    <span class="hidden-xs ">5 months ago</span>
                                    <i class="fa fa-paperclip ng-hide m-l-sm" ng-show=""></i>
                                </div>
                                <div class="clear">
                                    <div><a class="text-md " href="#/app/mail/7">Lazy loading Angular controllers, directives and services</a><span class="label bg-light m-l-sm ">angular</span></div>
                                    <div class="text-ellipsis m-t-xs ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin v</div>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a class="avatar thumb pull-left m-r" href="#/app/page/profile">
                                    <img ng-src="img/a3.jpg" src="img/a3.jpg">
                                </a>
                                <div class="pull-right text-sm text-muted">
                                    <span class="hidden-xs ">5 months ago</span>
                                    <i class="fa fa-paperclip ng-hide m-l-sm" ng-show=""></i>
                                </div>
                                <div class="clear">
                                    <div><a class="text-md " href="#/app/mail/6">What a hot day</a><span class="label bg-light m-l-sm ">client</span></div>
                                    <div class="text-ellipsis m-t-xs ">Duis non malesuada est, quis congue nibh. Pellentesque habitant morbi tristique senectus et netus et</div>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a class="avatar thumb pull-left m-r" href="#/app/page/profile">
                                    <img ng-src="img/a4.jpg" src="img/a4.jpg">
                                </a>
                                <div class="pull-right text-sm text-muted">
                                    <span class="hidden-xs ">5 months ago</span>
                                    <i class="fa fa-paperclip ng-hide m-l-sm" ng-show=""></i>
                                </div>
                                <div class="clear">
                                    <div><a class="text-md " href="#/app/mail/5">Oho!</a><span class="label bg-light m-l-sm "></span></div>
                                    <div class="text-ellipsis m-t-xs ">Turpis egestas lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a class="avatar thumb pull-left m-r" href="#/app/page/profile">
                                    <img ng-src="img/a5.jpg" src="img/a5.jpg">
                                </a>
                                <div class="pull-right text-sm text-muted">
                                    <span class="hidden-xs ">5 months ago</span>
                                    <i class="fa fa-paperclip ng-hide m-l-sm" ng-show=""></i>
                                </div>
                                <div class="clear">
                                    <div><a class="text-md " href="#/app/mail/4">Meeting</a><span class="label bg-light m-l-sm ">work</span></div>
                                    <div class="text-ellipsis m-t-xs ">Fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque qua</div>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a class="avatar thumb pull-left m-r" href="#/app/page/profile">
                                    <img ng-src="img/a6.jpg" src="img/a6.jpg">
                                </a>
                                <div class="pull-right text-sm text-muted">
                                    <span class="hidden-xs ">5 months ago</span>
                                    <i class="fa fa-paperclip ng-hide m-l-sm" ng-show=""></i>
                                </div>
                                <div class="clear">
                                    <div><a class="text-md " href="#/app/mail/3">Product version released</a><span class="label bg-light m-l-sm "></span></div>
                                    <div class="text-ellipsis m-t-xs ">Consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. V</div>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a class="avatar thumb pull-left m-r" href="#/app/page/profile">
                                    <img ng-src="img/a7.jpg" src="img/a7.jpg">
                                </a>
                                <div class="pull-right text-sm text-muted">
                                    <span class="hidden-xs ">5 months ago</span>
                                    <i class="fa fa-paperclip ng-hide m-l-sm" ng-show=""></i>
                                </div>
                                <div class="clear">
                                    <div><a class="text-md " href="#/app/mail/2">Hi, What's up</a><span class="label bg-light m-l-sm "></span></div>
                                    <div class="text-ellipsis m-t-xs ">Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales</div>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a class="avatar thumb pull-left m-r" href="#/app/page/profile">
                                    <img ng-src="img/a8.jpg" src="img/a8.jpg">
                                </a>
                                <div class="pull-right text-sm text-muted">
                                    <span class="hidden-xs ">6 months ago</span>
                                    <i class="fa fa-paperclip ng-hide m-l-sm" ng-show=""></i>
                                </div>
                                <div class="clear">
                                    <div><a class="text-md " href="#/app/mail/1">Kick-off meeting at 5:00 pm</a><span class="label bg-light m-l-sm ">work</span></div>
                                    <div class="text-ellipsis m-t-xs ">Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales</div>
                                </div>
                            </li>
                        </ul>
                        <!-- / list -->
                    </div>

                </div>
            </div>


        </div>
    </div>














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
                                        <a href="" class="btn btn-sm btn-bg btn-rounded btn-default btn-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="" class="btn btn-sm btn-bg btn-rounded btn-default btn-icon"><i class="fa fa-facebook"></i></a>
                                        <a href="" class="btn btn-sm btn-bg btn-rounded btn-default btn-icon"><i class="fa fa-google-plus"></i></a>
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
