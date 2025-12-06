@extends('layouts.app3')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__heading">
        <h2>login</h2>
    </div>
    <div class="confirm__form">
        <form class="form" action="/login" method="post">
        @csrf
            <div class="form__item">
                <label class="form__label--item">メールアドレス</label>
                <input type="email" name="email" placeholder="※ test@example.com" value="{{ old('email') }}"/>
            </div>
            <div class="form__item">
                <label class="form__label--item">パスワード</label>
                <input type="password" name="password" placeholder="パスワード"/>
            </div>
            <div class="form__item">
                <a class="form__item-button" href="/admin">ログイン</a>
            </div>
        </form>
    </div>
</div>
@endsection