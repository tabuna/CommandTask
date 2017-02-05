@extends('layouts.task')

@section('content')



    <div id="content" class="container" role="main">
        <div class="panel b box-shadow m-t-xxl">


            <div class="hbox hbox-auto-xs hbox-auto-sm">
                <div class="col w-md b-r">

                    <div class="wrapper hidden-sm hidden-xs" id="email-menu">

                        <div class="wrapper small"><i class="icon-tag  m-r-xs"></i> Метки</div>
                        <ul class="nav nav-pills nav-stacked nav-sm">
                            <li>
                                <a><i class="icon-folder-alt text-muted m-r-xs"></i>Кипич</a>
                            </li>
                            <li>
                                <a><i class="icon-folder-alt text-muted m-r-xs"></i>Пилорама</a>
                            </li>
                            <li>
                                <a><i class="icon-folder-alt text-muted m-r-xs"></i>Ключи</a>
                            </li>
                            <li>
                                <a><i class="icon-folder-alt text-muted m-r-xs"></i>Ещё что то</a>
                            </li>
                        </ul>
                        <div class="wrapper">
                            <form name="label">
                                <div class="input-group">
                                    <input type="text" class="form-control input-sm" placeholder="Новая метка">
                                    <span class="input-group-btn">
	              <button class="btn btn-sm btn-default" type="button">Добавить</button>
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
                                <button type="button" class="btn btn-sm btn-bg btn-default"><i
                                            class="icon-arrow-left"></i></button>
                                <button type="button" class="btn btn-sm btn-bg btn-default"><i
                                            class="icon-arrow-right"></i></button>
                            </div>
                            <div class="btn-toolbar">
                                <div class="btn-group dropdown">
                                    <button class="btn btn-default btn-sm btn-bg dropdown-toggle"
                                            data-toggle="dropdown">
                                        <span class="dropdown-label">Фильтр</span>
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu text-left text-sm">
                                        <li><a href="#">Спрос</a></li>
                                        <li><a href="#">Предложения</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-bg btn-default" data-toggle="tooltip"
                                            data-placement="bottom" data-title="Refresh" data-original-title=""
                                            title=""><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- / header -->

                        <!-- list -->
                        <ul class="list-group list-group-lg no-radius m-b-none m-t-n-xxs">
                            <li class="list-group-item clearfix">
                                <a class="avatar thumb pull-left m-r" href="#">
                                    <img src="/compony-1.jpg">
                                </a>
                                <div class="pull-right text-sm text-muted">
                                    <span class="hidden-xs ">5 минут назад</span>
                                </div>
                                <div class="clear">
                                    <div><a class="text-md" href="#">ООО Рога и копыта</a><span
                                                class="label bg-light m-l-sm ">Тег который подошёл</span></div>
                                    <div class="text-ellipsis m-t-xs ">
                                        Товарищи! постоянный количественный рост и сфера нашей активности способствует подготовки и реализации позиций, занимаемых участниками в отношении поставленных задач.
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a class="avatar thumb pull-left m-r" href="#">
                                    <img src="/compony-1.jpg">
                                </a>
                                <div class="pull-right text-sm text-muted">
                                    <span class="hidden-xs ">5 минут назад</span>
                                </div>
                                <div class="clear">
                                    <div><a class="text-md" href="#">ООО Рога и копыта</a><span
                                                class="label bg-light m-l-sm ">Тег который подошёл</span></div>
                                    <div class="text-ellipsis m-t-xs ">
                                        Товарищи! постоянный количественный рост и сфера нашей активности способствует подготовки и реализации позиций, занимаемых участниками в отношении поставленных задач.
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a class="avatar thumb pull-left m-r" href="#">
                                    <img src="/compony-1.jpg">
                                </a>
                                <div class="pull-right text-sm text-muted">
                                    <span class="hidden-xs ">5 минут назад</span>
                                </div>
                                <div class="clear">
                                    <div><a class="text-md" href="#">ООО Рога и копыта</a><span
                                                class="label bg-light m-l-sm ">Тег который подошёл</span></div>
                                    <div class="text-ellipsis m-t-xs ">
                                        Товарищи! постоянный количественный рост и сфера нашей активности способствует подготовки и реализации позиций, занимаемых участниками в отношении поставленных задач.
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a class="avatar thumb pull-left m-r" href="#">
                                    <img src="/compony-1.jpg">
                                </a>
                                <div class="pull-right text-sm text-muted">
                                    <span class="hidden-xs ">5 минут назад</span>
                                </div>
                                <div class="clear">
                                    <div><a class="text-md" href="#">ООО Рога и копыта</a><span
                                                class="label bg-light m-l-sm ">Тег который подошёл</span></div>
                                    <div class="text-ellipsis m-t-xs ">
                                        Товарищи! постоянный количественный рост и сфера нашей активности способствует подготовки и реализации позиций, занимаемых участниками в отношении поставленных задач.
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a class="avatar thumb pull-left m-r" href="#">
                                    <img src="/compony-1.jpg">
                                </a>
                                <div class="pull-right text-sm text-muted">
                                    <span class="hidden-xs ">5 минут назад</span>
                                </div>
                                <div class="clear">
                                    <div><a class="text-md" href="#">ООО Рога и копыта</a><span
                                                class="label bg-light m-l-sm ">Тег который подошёл</span></div>
                                    <div class="text-ellipsis m-t-xs ">
                                        Товарищи! постоянный количественный рост и сфера нашей активности способствует подготовки и реализации позиций, занимаемых участниками в отношении поставленных задач.
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a class="avatar thumb pull-left m-r" href="#">
                                    <img src="/compony-1.jpg">
                                </a>
                                <div class="pull-right text-sm text-muted">
                                    <span class="hidden-xs ">5 минут назад</span>
                                </div>
                                <div class="clear">
                                    <div><a class="text-md" href="#">ООО Рога и копыта</a><span
                                                class="label bg-light m-l-sm ">Тег который подошёл</span></div>
                                    <div class="text-ellipsis m-t-xs ">
                                        Товарищи! постоянный количественный рост и сфера нашей активности способствует подготовки и реализации позиций, занимаемых участниками в отношении поставленных задач.
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a class="avatar thumb pull-left m-r" href="#">
                                    <img src="/compony-1.jpg">
                                </a>
                                <div class="pull-right text-sm text-muted">
                                    <span class="hidden-xs ">5 минут назад</span>
                                </div>
                                <div class="clear">
                                    <div><a class="text-md" href="#">ООО Рога и копыта</a><span
                                                class="label bg-light m-l-sm ">Тег который подошёл</span></div>
                                    <div class="text-ellipsis m-t-xs ">
                                        Товарищи! постоянный количественный рост и сфера нашей активности способствует подготовки и реализации позиций, занимаемых участниками в отношении поставленных задач.
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a class="avatar thumb pull-left m-r" href="#">
                                    <img src="/compony-1.jpg">
                                </a>
                                <div class="pull-right text-sm text-muted">
                                    <span class="hidden-xs ">5 минут назад</span>
                                </div>
                                <div class="clear">
                                    <div><a class="text-md" href="#">ООО Рога и копыта</a><span
                                                class="label bg-light m-l-sm ">Тег который подошёл</span></div>
                                    <div class="text-ellipsis m-t-xs ">
                                        Товарищи! постоянный количественный рост и сфера нашей активности способствует подготовки и реализации позиций, занимаемых участниками в отношении поставленных задач.
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a class="avatar thumb pull-left m-r" href="#">
                                    <img src="/compony-1.jpg">
                                </a>
                                <div class="pull-right text-sm text-muted">
                                    <span class="hidden-xs ">5 минут назад</span>
                                </div>
                                <div class="clear">
                                    <div><a class="text-md" href="#">ООО Рога и копыта</a><span
                                                class="label bg-light m-l-sm ">Тег который подошёл</span></div>
                                    <div class="text-ellipsis m-t-xs ">
                                        Товарищи! постоянный количественный рост и сфера нашей активности способствует подготовки и реализации позиций, занимаемых участниками в отношении поставленных задач.
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a class="avatar thumb pull-left m-r" href="#">
                                    <img src="/compony-1.jpg">
                                </a>
                                <div class="pull-right text-sm text-muted">
                                    <span class="hidden-xs ">5 минут назад</span>
                                </div>
                                <div class="clear">
                                    <div><a class="text-md" href="#">ООО Рога и копыта</a><span
                                                class="label bg-light m-l-sm ">Тег который подошёл</span></div>
                                    <div class="text-ellipsis m-t-xs ">
                                        Товарищи! постоянный количественный рост и сфера нашей активности способствует подготовки и реализации позиций, занимаемых участниками в отношении поставленных задач.
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a class="avatar thumb pull-left m-r" href="#">
                                    <img src="/compony-1.jpg">
                                </a>
                                <div class="pull-right text-sm text-muted">
                                    <span class="hidden-xs ">5 минут назад</span>
                                </div>
                                <div class="clear">
                                    <div><a class="text-md" href="#">ООО Рога и копыта</a><span
                                                class="label bg-light m-l-sm ">Тег который подошёл</span></div>
                                    <div class="text-ellipsis m-t-xs ">
                                        Товарищи! постоянный количественный рост и сфера нашей активности способствует подготовки и реализации позиций, занимаемых участниками в отношении поставленных задач.
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- / list -->
                    </div>

                </div>
            </div>


        </div>
    </div>











@endsection
