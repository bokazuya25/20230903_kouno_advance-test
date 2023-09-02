<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/sanitize.css">
    <link rel="stylesheet" href="/css/confirm.css">
    <title>Document</title>
</head>

<body>
    <main>
        <h2 class="form__title">お問い合わせ</h2>
        <form class="form__wrap" action="{{ route('store') }}" method="post">
            @csrf
            <div class="form__item">
                <p class="form__item-label">お名前</p>
                <div class="form__item-box">
                    <p class="form__item-input">{{ $contact['lastname'] . '　' . $contact['firstname'] }}</p>
                    <input type="hidden" name="lastname" value="{{ $contact['lastname'] }}">
                    <input type="hidden" name="firstname" value="{{ $contact['firstname'] }}">
                </div>
            </div>
            <div class="form__item">
                <p class="form__item-label">性別</p>
                <div class="form__item-box">
                    @if ($contact['gender'] == 1)
                        <p class="form__item-input">男性</p>
                    @elseif($contact['gender'] == 2)
                        <p class="form__item-input">女性</p>
                    @endif
                    <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
                </div>
            </div>
            <div class="form__item">
                <p class="form__item-label">メールアドレス</p>
                <div class="form__item-box">
                    <p class="form__item-input">{{ $contact['email'] }}</p>
                    <input type="hidden" name="email" value="{{ $contact['email'] }}">
                </div>
            </div>
            <div class="form__item">
                <p class="form__item-label">郵便番号</p>
                <div class="form__item-box">
                    <div class="form__item-box-post">
                        <p class="form__item-input">{{ $contact['postcode'] }}</p>
                        <input type="hidden" name="postcode" value="{{ $contact['postcode'] }}">
                    </div>
                </div>
            </div>
            <div class="form__item">
                <p class="form__item-label">住所</p>
                <div class="form__item-box">
                    <p class="form__item-input">{{ $contact['address'] }}</p>
                    <input type="hidden" name="address" value="{{ $contact['address'] }}">
                </div>
            </div>
            <div class="form__item">
                <p class="form__item-label">建物名</p>
                <div class="form__item-box">
                    <p class="form__item-input">{{ $contact['building_name'] }}</p>
                    <input type="hidden" name="building_name" value="{{ $contact['building_name'] }}">
                </div>
            </div>
            <div class="form__item">
                <p class="form__item-label">ご意見</p>
                <div class="form__item-box">
                    <p class="form__item-textarea">{{ $contact['opinion'] }}</p>
                    <input type="hidden" name="opinion" value="{{ $contact['opinion'] }}"></input>
                </div>
            </div>
            <button class="form__button" type="submit">送信</button>
            <button class="form__button--modify" type="submit" name="back" value="back" onclick="location.href='{{ route('store') }}'">修正する</button>
        </form>
    </main>
</body>

</html>
