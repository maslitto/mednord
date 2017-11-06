@extends('layouts.app')

@section('content')
    <main class="content">
        <div class="wrapper">
            <div class="page-container">

                <div class="popup" id="request-price" style="margin-top:50px">
                    <div class="popup-title">Вход в админку</div>
                    <form class="popup-form" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}
                        <div class="box-field">
                            <label class="box-field__label">Email</label>
                            <div class="box-field__input">
                                <input type="email" class="form-control" name="email" value="">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="box-field">
                            <label class="box-field__label">Пароль:</label>
                            <div class="box-field__input">
                                <input type="password" class="form-control" name="password" value="">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Запомнить
                                </label>
                            </div>
                        </div>
                        <input value="Отправить" class="main-btn white" type="submit">
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
