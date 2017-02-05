@extends('layouts.app')

@section('content')








    <div class="container m-t-xxl">


        <div class="panel b box-shadow-lg wrapper-lg">
            <div class="row">
                <div class="col-md-3">

                    <!-- nav -->
                    <nav class="navi clearfix  wrapper-sm">
                        <ul class="nav">

                            <li class="hidden-folded text-danger padder m-t m-b-sm text-xs">
                                <span class="text-info">Общие настройки</span>
                            </li>
                            <li>
                                <a href="{{route('account.edit')}}">
                                    <i class="icon-wrench"></i>
                                    <span>Настройка</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{route('account.password')}}">
                                    <i class="icon-lock-open"></i>
                                    <span>Смена пароля</span>
                                </a>
                            </li>


                        </ul>


                        <ul class="nav">

                            <li class="hidden-folded text-danger padder m-t m-b-sm text-xs">
                                <span class="text-info">Организация</span>
                            </li>
                            <li>
                                <a href="{{route('organization.index')}}">
                                    <i class="icon-list"></i>
                                    <span>Список</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{route('organization.create')}}">
                                    <i class="icon-pencil"></i>
                                    <span>Создать</span>
                                </a>
                            </li>


                        </ul>


                        <ul class="nav">

                            <li class="hidden-folded text-danger padder m-t m-b-sm text-xs">
                                <span class="text-info">Управление</span>
                            </li>


                            <li>
                                <a href="#">
                                    <i class="icon-info"></i>
                                    <span>Помощь</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{url('/logout')}}">
                                    <i class="icon-logout"></i>
                                    <span>Выйти</span>
                                </a>
                            </li>


                        </ul>


                    </nav>
                    <!-- nav -->

                </div>

                <div class="col-md-9  b-l b-light">

                    @yield('accounts')


                </div>
            </div>
        </div>
    </div>




@endsection
