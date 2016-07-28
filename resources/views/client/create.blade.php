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



        <form class="form-horizontal" method="post" action="{{route('client.store')}}">
            <div class="form-group">
                <label  class="col-sm-2 control-label">Название</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" placeholder="Название" required maxlength="100">
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Контакты</label>
                <div class="col-sm-10">
                    <input type="text" name="contact" class="form-control" placeholder="Контакты" required maxlength="100">
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{Auth::user()->email}}" required  maxlength="255">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Телефон</label>
                <div class="col-sm-10">
                    <input type="text" name="phone_number" class="form-control" placeholder="Телефон" required data-mask="+7 999-999-99-99">
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Организация</label>
                <div class="col-sm-10">
                    <select name="organization_id">
                        <option value="1">Первая</option>
                    </select>
                </div>
            </div>

            {!! csrf_field() !!}

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Сохранить клиента</button>
                </div>
            </div>
        </form>

    </div>

@endsection