@extends('layouts.app4')

@section('css')
<link rel="stylesheet" href="{{ asset('css/search.css') }}">
@endsection

@section('content')
<div class="search__content">
    <div class="search__form">
        <form class="search-form-style" action="/admins" method="get">
        @csrf
        <div class="search-form__item">
            <div class="admin-table">
            <table class="admin-table__inner">
                <tr class="admin-table__row">
                    <th class="admin-table__header">お名前</th>
                    <th class="admin-table__header">性別</th>
                    <th class="admin-table__header">メールアドレス</th>
                    <th class="admin-table__header">お問い合わせの種類</th>
                    <th class="admin-table__header">電話番号</th>
                    <th class="admin-table__header">住所</th>
                    <th class="admin-table__header">建物名</th>
                    <th class="admin-table__header">お問い合わせの種類</th>
                    <th class="admin-table__header">お問い合わせ内容</th>
                </tr>
                @foreach ($contacts as $contact)
                <tr class="admin-table__row">
                    <td class="admin-table__item">
                        <p >{{ $contact['last_name'].' '.$contact['first_name']}}</p>
                        <input class="search-form__item-name" type="hidden" name="keyword" value="{{ $contact['last_name']}}"/>
                        <input class="search-form__item-name" type="hidden" name="keyword" value="{{ $contact['first_name']}}"/>
                    </td>
                    <td class="admin-table__item">
                        <p class="update-form__item-gender"></p>
                        <input type="hidden" name="keyword" value="{{ $contact['gender'] }}"/>
                        @if($contact['gender'] == 1)
                        男性
                        @elseif($contact['gender'] == 2)
                        女性
                        @else
                        その他
                        @endif
                    </td>
                    <td class="admin-table__item">
                        <p>{{ $contact['email'] }}</p>
                        <input type="hidden" name="keyword" value="{{ $contact['email']}}"/>
                    </td>
                    <td class="admin-table__item">
                        <p>{{ $contact['tel'] }}</p>
                        <input type="hidden" name="keyword" value="{{ $contact['tel']}}"/>
                    </td>
                    <td class="admin-table__item">
                        <p>{{ $contact['address'] }}</p>
                        <input type="hidden" name="keyword" value="{{ $contact['address']}}"/>
                    </td>
                    <td class="admin-table__item">
                        <p>{{ $contact['building'] }}</p>
                        <input type="hidden" name="keyword" value="{{ $contact['building']}}"/>
                    </td>
                    <td class="admin-table__item">
                        <p>{{ $contact['category']['content'] }}</p>
                        <input type="hidden" name="category_id" value="{{ $contact['category_id']}}"/>
                    </td>
                    <td class="admin-table__item">
                        <p>{{ $contact['detail'] }}</p>
                        <input type="hidden" name="keyword" value="{{ $contact['detail']}}"/>
                    </td>
                    <td class="admin-table__item-button">
                    <form class="detail-form" action="/contacts" method="post">
                        @csrf
                        <div class="detail-form__button">
                            <button class="detail-form__button-submit" type="submit">
                                削除
                            </button>
                        </div>
                    </form>
                    </td>
                    @endforeach
                </tr>
            </table>
            </div>
        </div>
    </div>
</div>
@endsection