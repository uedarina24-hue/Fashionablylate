@extends('layouts.app4')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin__content">
    <div class="admin__heading">
        <h2>Admin</h2>
    </div>

    <div class="admin__form">
        <form class="search-form" action="/admins/search" method="get">
        @csrf
        <div class="search-form__item">
            <input class="search-form__item-name" type="name" name="keyword" placeholder="名前やメールアドレスを入力して下さい" value="{{ old('keyword') }}"/>
            <select class="search-form__item-gender" name="keyword">
                <option value="">性別</option>
                <option value="">男性</option>
                <option value="">女性</option>
                <option value="">その他</option>
            </select>
            <select class="search-form__item-category" name="category_id">
                <option value="">お問い合わせ種類</option>
                @foreach ($categories as $category)
                <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                @endforeach
            </select>
            <input class="search-form__item-date" type="date" name="keyword"/>
        </div>

        <div class="search-form__button">
            <button class="search-form__button-submit" type="submit">検索</button>
            <button class="search-form__button-reset" type="submit">リセット</button>
        </div>
        </form>
        <div class="admin__export">
        <form class="admin__export-form" action="/export" method="post">
        @csrf
            <div class="export-form__button">
                <button class="export-form__button-submit" type="submit">エクスポート</button>
            </div>
            {{ $authors->links() }}
        </form>
        </div>

        <div class="admin-table">
            <table class="admin-table__inner">
                <tr class="admin-table__row">
                    <th class="admin-table__header">お名前</th>
                    <th class="admin-table__header">性別</th>
                    <th class="admin-table__header">メールアドレス</th>
                    <th class="admin-table__header">お問い合わせの種類</th>
                    <th class="admin-table__header"></th>
                </tr>
                @foreach ($contacts as $contact)
                <tr class="admin-table__row">
                    <td class="admin-table__item">
                        <p class="update-form__item-name">{{ $contact['last_name'].' '.$contact['first_name']}}</p>
                    </td>
                    <td class="admin-table__item">
                        <p class="update-form__item-gender"></p>
                        <input type="hidden" name="gender" value="{{ $contact['gender'] }}" readonly />
                        @if($contact['gender'] == 1)
                        男性
                        @elseif($contact['gender'] == 2)
                        女性
                        @else
                        その他
                        @endif
                    </td>
                    <td class="admin-table__item">
                        <p class="update-form__item-email">{{ $contact['email'] }}</p>
                    </td>
                    <td class="admin-table__item">
                        <p>{{ $contact['category']['content'] }}</p>
                        <input type="hidden" name="category_id" value="{{ $contact['category_id']}}" readonly />
                    </td>
                    <td class="admin-table__item-button">
                    <form class="detail-form" action="/contacts" method="post">
                        @csrf
                        <div class="detail-form__button">
                            <button class="detail-form__button-submit" type="submit">
                                詳細
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
@endsection
