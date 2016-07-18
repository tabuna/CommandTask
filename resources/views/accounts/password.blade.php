@extends('layouts.accounts')

@section('accounts')

    <div class="wrapper-md">


        <form class="form-horizontal" action="{{route('account.update.password')}}" method="POST">


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


            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif


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

@endsection
