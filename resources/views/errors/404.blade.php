@extends('layouts.app')

@section('content')






    <section class="container-fluid">

        <div class="row b-b box-shadow bg-white">

            <div class="container">

                <div class="row">

                    <div class="col-md-6 col-md-12">

                        <div class="page-header">
                            <h1>404
                                <small>Страница не найдена</small>
                            </h1>
                        </div>


                        <div>
                            <p class="h4 padder-v">
                                Не переживайте это всего лишь ошибка сайта
                            </p>
                            <p class="small">
                                стандартный код ответа HTTP о том, что клиент был в состоянии общаться с сервером, но
                                сервер не может найти данные согласно запросу. Ошибку 404 не следует путать с ошибкой
                                «Сервер не найден» или иными ошибками, указывающими на ограничение доступа к серверу.
                                Ошибка 404 означает, что запрашиваемый ресурс может быть доступен в будущем, что однако
                                не гарантирует наличие прежнего содержания.
                            </p>

                        </div>


                    </div>

                    <div class="col-md-6 hidden-xs">

                        <div class="pageOption pull-right">
                            <div class="option">
                                <img src="/main.jpg">
                            </div>
                        </div>
                    </div>



                </div>
            </div>




        </div>

    </section>








@endsection
