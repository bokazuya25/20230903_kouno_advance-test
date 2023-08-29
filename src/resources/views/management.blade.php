<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/sanitize.css">
    <link rel="stylesheet" href="/css/management.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h2 class="form__title">管理システム</h2>
        <form class="form__wrap" action="search">
            @csrf
            <div class="form__group">
                <div class="form__item">
                    <div class="form__item-title">
                        <p class="form__item-label">お名前</p>
                    </div>
                    <input class="form__item-input" type="text">
                </div>
                <div class="form__item">
                    <p class="form__item-label form__item-label--small-width">性別</p>
                    <div class="form__item-radio-box">
                        <label class="form__item-radio"><input class="form__item-radio-input" type="radio" name="gender" checked><span class="form__item-radio-dummy"></span><span class="form__item-radio-text">全て</span></label>
                        <label class="form__item-radio"><input class="form__item-radio-input" type="radio" name="gender"><span class="form__item-radio-dummy"></span><span class="form__item-radio-text">男性</span></label>
                        <label class="form__item-radio"><input class="form__item-radio-input" type="radio" name="gender"><span class="form__item-radio-dummy"></span><span class="form__item-radio-text">女性</span></label>
                    </div>
                </div>
            </div>
            <div class="form__item">
                <div class="form__item-title">
                    <p class="form__item-label">登録日</p>
                </div>
                <div class="form__item-input-box">
                    <input class="form__item-input" type="text">
                    <p class="form__item--delimiter">~</p>
                    <input class="form__item-input" type="text">
                </div>
            </div>
            <div class="form__item">
                <div class="form__item-title">
                    <p class="form__item-label">メールアドレス</p>
                </div>
                <div class="form__item-email">
                    <input class="form__item-input" type="email">
                </div>
            </div>
            <button class="form__button">検索</button>
            <input class="form__button-reset" type="reset" name="reset" value="リセット">
        </form>

        {{ $contacts->links('vendor.pagination.custom') }}

        <table class="table__wrap">
            <tr class="table__header-row">
                <th class="table__header-id">ID</th>
                <th class="table__header-fullname">お名前</th>
                <th class="table__header-gender">性別</th>
                <th class="table__header-emali">メールアドレス</th>
                <th class="table__header-opinion">ご意見</th>
                <th class="table__header-delete"></th>
            </tr>
            @foreach ($contacts as $contact)
            <tr class="table__item-row">
                <td class="table__item-id">{{ $contact->id }}</td>
                <td class="table__item-fullname">{{ $contact->fullname }}</td>
                <td class="table__item-gender">
                    @if ($contact->gender == 1)
                        男性
                    @elseif($contact->gender ==2)
                        女性
                    @endif
                </td>
                <td class="table__item-email">{{ $contact->email }}</td>
                <td class="table__item-opinion">
                    <p class="table__item-opinion-text">{{ $contact->opinion }}</p>
                </td>
                <td class="table__item-delete">
                    <form class="delete-form" action="{{ route('destroy') }}" method="post">
                        @method('delete')
                        @csrf
                        <input type="hidden" name="id" value="{{ $contact['id'] }}">
                        <button class="table__item-delete-button" type="submit">削除</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </main>
</body>
</html>