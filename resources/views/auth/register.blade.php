@extends('layouts.app')

@section('content')


    <div class="container m-t-xxl">


        <div class="panel b box-shadow-lg wrapper-lg">


            <div class="row">
                <div class="col-md-8">
                    <div class="panel">
                        <div class="panel-heading">Регистрация</div>
                        <div class="panel-body">


                            <div class="stepwizard">
                                <div class="stepwizard-row setup-panel">
                                    <div class="stepwizard-step">
                                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                        <p>Пользователь</p>
                                    </div>
                                    <div class="stepwizard-step">
                                        <a href="#step-2" type="button" class="btn btn-default btn-circle"
                                           disabled="disabled">2</a>
                                        <p>Компания</p>
                                    </div>
                                </div>
                            </div>

                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                                <div class="row setup-content" id="step-1">

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="control-label">Ваше имя</label>


                                        <input id="name" type="text" class="form-control" required name="name" placeholder="Шелдон Купер"
                                               value="{{ old('name') }}">

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif

                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="control-label">E-Mail Address</label>


                                        <input id="email" type="email" class="form-control" required name="email" placeholder="sheldon@kuper.biz"
                                               value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="control-label">Пароль</label>


                                        <input id="password" type="password" class="form-control" required name="password" placeholder="Сложная кодовая фраза">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                        <label for="password-confirm" class="control-label">Повторите пароль
                                        </label>


                                            <input id="password-confirm" type="password" required class="form-control"
                                                   name="password_confirmation">

                                            @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                            @endif
                                    </div>

                                    <button class="btn btn-info nextBtn pull-right" type="button">Далее</button>
                                </div>
                                <div class="row setup-content" id="step-2">
                                    <div class="form-group">
                                        <label class="control-label">Название компании</label>
                                        <input maxlength="200" type="text" required="required" class="form-control"
                                               placeholder="ООО Рога и копыта"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Адрес компании</label>
                                        <input maxlength="200" type="text" required="required" class="form-control"
                                               placeholder="Москва Кремль 1"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Номер телефона</label>
                                        <input maxlength="200" type="text"  required="required" class="form-control"
                                               placeholder="+7 (4742)-48-55-55"/>
                                    </div>
                                    <button class="btn btn-info pull-right" type="submit">Создать</button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>

                <div class="col-md-4 b-l b-light text-justify
">
                    <h3 class="dark-grey">Правила и условия</h3>
                    <p>
                        Значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечен


                    </p>
                    <p>
                        Значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечение нашей деятельности требуют определения и уточнения существенных финансовых и административных условий.
                    </p>
                    <p>
                        Значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечение нашей деятельности требуют определения и уточнения существенных финансовых и административных условий.
                    </p>


                </div>

            </div>
        </div>


    </div>
    </div>


    <script>
        window.onload = function () {
            $(document).ready(function () {
                var navListItems = $('div.setup-panel div a'),
                    allWells = $('.setup-content'),
                    allNextBtn = $('.nextBtn');

                allWells.hide();

                navListItems.click(function (e) {
                    e.preventDefault();
                    var $target = $($(this).attr('href')),
                        $item = $(this);

                    if (!$item.hasClass('disabled')) {
                        navListItems.removeClass('btn-primary').addClass('btn-default');
                        $item.addClass('btn-primary');
                        allWells.hide();
                        $target.show();
                        $target.find('input:eq(0)').focus();
                    }
                });

                allNextBtn.click(function () {
                    var curStep = $(this).closest(".setup-content"),
                        curStepBtn = curStep.attr("id"),
                        nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                        curInputs = curStep.find("input[type='text'],input[type='url']"),
                        isValid = true;

                    $(".form-group").removeClass("has-error");
                    for (var i = 0; i < curInputs.length; i++) {
                        if (!curInputs[i].validity.valid) {
                            isValid = false;
                            $(curInputs[i]).closest(".form-group").addClass("has-error");
                        }
                    }

                    if (isValid)
                        nextStepWizard.removeAttr('disabled').trigger('click');
                });

                $('div.setup-panel div a.btn-primary').trigger('click');
            });
        }
    </script>

@endsection
