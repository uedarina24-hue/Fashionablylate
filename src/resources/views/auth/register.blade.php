@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__heading">
        <h2>Register</h2>
    </div>
    <div class="confirm__form">
        <form class="form" action="/register" method="post">
        @csrf
            <div class="form__item">
                <label class="form__label--item">お名前</label>
                <input type="name" name="name" placeholder="※山田 太郎" value="{{ old('name') }}"/>
            </div>
            <div class="form__error">
            @error('name')
            {{ $message }}
            @enderror
            </div>
            <div class="form__item">
                <label class="form__label--item">メールアドレス</label>
                <input type="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}"/>
            </div>
            <div class="form__error">
            @error('email')
            {{ $message }}
            @enderror
            </div>
            <div class="form__item">
                <label class="form__label--item">パスワード</label>
                <input type="password" name="password" placeholder="パスワード"/>
            </div>
            <div class="form__error">
            @error('password')
            {{ $message }}
            @enderror
            </div>
            <div class="form__item-button">
                <button class="form__item-button-submit" type="submit">登録</button>
            </div>
        </form>
    </div>
</div>
@endsection