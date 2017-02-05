@extends('layouts.app')

@section('content')


    <div class="container m-t-xxl">

        <div class="panel b box-shadow-lg wrapper-lg">


    <div class="hbox hbox-auto-xs hbox-auto-sm">



        <!-- left col -->
        <div class="col w-md bg-white-only b-r bg-auto no-border-xs">

            <div class="tab-content">
                    <div class="wrapper-md">
                        <div class="m-b-sm text-md">Последние диалоги</div>
                        <ul class="list-group no-bg no-borders pull-in">
                            <li class="list-group-item">
                                <a herf="" class="pull-left thumb-sm avatar m-r">
                                    <img src="/compony-1.jpg" alt="..." class="img-circle">
                                    <i class="on b-white bottom"></i>
                                </a>
                                <div class="clear">
                                    <div><a href="">ООО ДЭЛ</a></div>
                                    <small class="text-muted">ПК и перефирия</small>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <a herf="" class="pull-left thumb-sm avatar m-r">
                                    <img src="/compony-2.jpg" alt="..." class="img-circle">
                                    <i class="on b-white bottom"></i>
                                </a>
                                <div class="clear">
                                    <div><a href="">Шелл</a></div>
                                    <small class="text-muted">Нефте переработка</small>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <a herf="" class="pull-left thumb-sm avatar m-r">
                                    <img src="/compony-3.png" alt="..." class="img-circle">
                                    <i class="busy b-white bottom"></i>
                                </a>
                                <div class="clear">
                                    <div><a href="">Старбакс</a></div>
                                    <small class="text-muted">Кофе</small>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <a herf="" class="pull-left thumb-sm avatar m-r">
                                    <img src="/compony-4.jpg" alt="..." class="img-circle">
                                    <i class="away b-white bottom"></i>
                                </a>
                                <div class="clear">
                                    <div><a href="">Мастер-карт</a></div>
                                    <small class="text-muted">Перевод платежей</small>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <a herf="" class="pull-left thumb-sm avatar m-r">
                                    <img src="/dist/img/a8.jpg" alt="..." class="img-circle">
                                    <i class="away b-white bottom"></i>
                                </a>
                                <div class="clear">
                                    <div><a href="">ИП Меркулов</a></div>
                                    <small class="text-muted">Производство кирпича</small>
                                </div>
                            </li>
                        </ul>
                    </div>
            </div>

        </div>
        <!-- / left col -->


        <!-- main -->
        <div class="col">
            <!-- main header -->

            <div class="wrapper-lg">

                    <div class="m-b">
                        <a href="" class="pull-left thumb-sm avatar"><img src="/1.jpg" alt="..."></a>
                        <div class="m-l-sm inline">
                            <div class="pos-rlt wrapper b b-light r r-2x">
                                <span class="arrow left pull-up"></span>
                                <p class="m-b-none">Привет, нужно веб-приложение</p>
                            </div>
                            <small class="text-muted"><i class="fa fa-ok text-success"></i> 1 час назад</small>
                        </div>
                    </div>
                    <div class="m-b text-right">
                        <a href="" class="pull-right thumb-sm avatar"><img src="/2.jpg" class="img-circle" alt="..."></a>
                        <div class="m-r-sm inline text-left">
                            <div class="pos-rlt wrapper bg-primary r r-2x">
                                <span class="arrow right pull-up arrow-primary"></span>
                                <p class="m-b-none">Привет, не проблема звони</p>
                            </div>
                            <small class="text-muted">31 минуту назад</small>
                        </div>
                    </div>
                    <div class="m-b">
                        <a href="" class="pull-left thumb-sm avatar"><img src="/1.jpg" alt="..."></a>
                        <div class="m-l-sm inline">
                            <div class="pos-rlt wrapper b b-light r r-2x">
                                <span class="arrow left pull-up"></span>
                                <p class="m-b-none">Работали над ТЗ в течение многих часов...</p>
                            </div>
                            <small class="text-muted"><i class="fa fa-ok text-success"></i> 2 минуты назад</small>
                        </div>
                    </div>
                    <div class="m-b text-right">
                        <a href="" class="pull-right thumb-sm avatar"><img src="/2.jpg" class="img-circle" alt="..."></a>
                        <div class="m-r-sm inline text-left">
                            <div class="pos-rlt wrapper bg-primary r r-2x">
                                <span class="arrow right pull-up arrow-primary"></span>
                                <p class="m-b-none">Не могу дождаться, чтобы увидеть его:)</p>
                            </div>
                            <small class="text-muted">1 минуту назад</small>
                        </div>
                    </div>
                </div>
            <!-- / main header -->
        </div>
        <!-- / main -->

</div>

        </div>
    </div>
    @endsection