@extends('layouts.organizations')

@section('organization')


    <div class="wrapper-md">


        <form class="form-horizontal" action="{{route('account.update')}}" method="POST" enctype="multipart/form-data">


            <div class="col-md-12 m-b">
            <div class="fileinput fileinput-exists thumb-lg pull-left m-r-md" data-provides="fileinput">

                <div class="btn-file">
                    <div class="fileinput-preview  thumb-lg pull-left m-r-md">
                        <img src="{{$user->avatar or '/company-logo.jpg' }}" alt="..."
                             class="img-circle">
                    </div>

                    <input type="file" name="avatar">
                </div>

            </div>


            <div class="clear m-b">
                <div class="m-b m-t-sm">
                    <span class="h3 text-black">ООО Рога и Копыта</span>
                    <small class="m-l block">Винтики и шпунтики</small>
                </div>
            </div>
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


            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Название организации</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="" placeholder="ООО Рога и Копыта">
                </div>
            </div>

            <div class="line line-dashed b-b line-lg"></div>

            <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Физический адрес</label>
                <div class="col-sm-10">
                    <input type="text" name="website" class="form-control" value=""
                           placeholder="г. Липецк Ул. Зои Космеденьянской д 11">
                </div>
            </div>

            <div class="line line-dashed b-b line-lg"></div>

            <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Юридический адрес</label>
                <div class="col-sm-10">
                    <input type="text" name="website" class="form-control" value=""
                           placeholder="г. Липецк Ул. Зои Космеденьянской д 11">
                </div>
            </div>

            <div class="line line-dashed b-b line-lg"></div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Электронная почта</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" value="" placeholder="Email">
                </div>
            </div>

            <div class="line line-dashed b-b line-lg"></div>

            <div class="form-group{{ $errors->has('nickname') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">ИНН</label>
                <div class="col-sm-10">
                    <input type="text" name="nickname" class="form-control" value=""
                           placeholder="5476587686787">
                </div>
            </div>

            <div class="line line-dashed b-b line-lg"></div>

            <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Веб-сайт</label>
                <div class="col-sm-10">
                    <input type="url" name="website" class="form-control" value=""
                           placeholder="http://google.com">
                </div>
            </div>

            <div class="line line-dashed b-b line-lg"></div>

            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Телефон</label>
                <div class="col-sm-10">
                    <input type="tel" name="phone" class="form-control" value="" placeholder="+7 (4742) 55-25-52">
                </div>
            </div>

            <div class="line line-dashed b-b line-lg"></div>

            <div class="form-group{{ $errors->has('about') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Информация компании</label>
                <div class="col-sm-10">
                    <textarea class="form-control no-resize" rows="6" name="about"
                              placeholder="About"></textarea>
                </div>
            </div>


            <div class="line line-dashed b-b line-lg"></div>




            {!! csrf_field() !!}
            <input name="_method" value="PUT" type="hidden">
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10 text-right">
                    <button type="submit" class="btn btn-info">Сохранить</button>
                </div>
            </div>
        </form>


    </div>








@endsection
