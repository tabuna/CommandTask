@extends('layouts.accounts')

@section('accounts')


    <div class="wrapper-md">

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



        <form class="form-horizontal" method="post" action="{{route('organization.update',$organization->id)}}">
            <div class="form-group">
                <label  class="col-sm-2 control-label">Название</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" placeholder="Название" value="{{$organization->name}}" required maxlength="100">
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Контакты</label>
                <div class="col-sm-10">
                    <input type="text" name="contact" class="form-control" placeholder="Контакты" value="{{$organization->contact}}" required maxlength="100">
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" placeholder="Email"  value="{{$organization->email}}" required  maxlength="255">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Телефон</label>
                <div class="col-sm-10">
                    <input type="text" name="phone_number" class="form-control" placeholder="Телефон" value="{{$organization->phone_number}}" required data-mask="+7 999-999-99-99">
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Описание</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control no-resize" rows="5" required  maxlength="2000" placeholder="Описание">{{$organization->description}}</textarea>
                </div>
            </div>

            {!! csrf_field() !!}
            {!! method_field('put') !!}

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Изменить организацию</button>
                </div>
            </div>
        </form>

    </div>


@endsection
