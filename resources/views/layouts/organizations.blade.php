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
                                <span class="text-info">Фильтры</span>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icon-heart"></i>
                                    <span>Изрбранное</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icon-graph"></i>
                                    <span>Спрос</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icon-briefcase"></i>
                                    <span>Предложения</span>
                                </a>
                            </li>


                        </ul>

                        <ul class="nav">

                            <li class="hidden-folded text-danger padder m-t m-b-sm text-xs">
                                <span class="text-info">Общие настройки</span>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icon-wallet"></i>
                                    <span>Платежи</span>
                                </a>
                            </li>

                            <li>
                                <a href="/organizations">
                                    <i class="icon-pie-chart"></i>
                                    <span>Статистика</span>
                                </a>
                            </li>
                            <li>
                                <a href="/organizations/edit">
                                    <i class="icon-wrench"></i>
                                    <span>Настройка</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icon-shield"></i>
                                    <span>Привелегии</span>
                                </a>
                            </li>


                            <li>
                                <a href="#">
                                    <i class="icon-people"></i>
                                    <span>Пользователи</span>
                                </a>
                            </li>


                        </ul>





                    </nav>
                    <!-- nav -->

                </div>

                <div class="col-md-9  b-l b-light">

                    @yield('organization')


                </div>
            </div>
        </div>
    </div>




@endsection
