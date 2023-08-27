<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/sanitize.css">
    <link rel="stylesheet" href="/css/index.css">
    <title>Document</title>
</head>

<body>
    <main>
        <h2 class="form__title">お問い合わせ</h2>
        <form class="form__wrap" action="{{ route('confirm') }}" method="post">
            @csrf
            <div class="form__item">
                <p class="form__item-label">お名前※</p>
                <div class="form__item-box">
                    <div class="form__item-input-box">
                        <div class="form__item-input-box__area">
                            <input type="text" class="form__item-input-name" name="lastname" value="{{ old('lastname') }}">
                            @error('lastname')
                                <p class="form__item-text error">{{ $message }}</p>
                            @enderror
                            <p class="form__item-text">例）山田</p>
                        </div>
                        <div class="form__item-input-box__area">
                            <input type="text" class="form__item-input-name" name="firstname" value="{{ old('firstname') }}">
                            @error('firstname')
                                <p class="form__item-text error">{{ $message }}</p>
                            @enderror
                            <p class="form__item-text">例）太郎</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__item">
                <p class="form__item-label">性別※</p>
                <div class="form__item-box">
                    <div class="form__item-radio-box">
                        <input class="form__item-radio-input" type="radio" name="gender" value="1" {{ old('gender') == 1 ? 'checked' : '' }}
                            checked><label class="form__item-radio-label" for="">男性</label>
                        <input class="form__item-radio-input" type="radio" name="gender" value="2" {{ old('gender') == 2 ? 'checked' : '' }}><label class="form__item-radio-label" for="">女性</label>
                        @error('gender')
                            <p class="form__item-text error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__item">
                <p class="form__item-label">メールアドレス※</p>
                <div class="form__item-box">
                    <input type="email" class="form__item-input" name="email" value="{{ old('email') }}">
                    @error('email')
                        <p class="form__item-text error">{{ $message }}</p>
                    @enderror
                    <p class="form__item-text">例）text@example.com</p>
                </div>
            </div>
            <div class="form__item">
                <p class="form__item-label">郵便番号※</p>
                <div class="form__item-box">
                    <div class="form__item-box-post">
                        <p class="form__item-postmark">〒</p>
                        <input type="text" class="form__item-input" name="postcode" value="{{ old('postcode') }}">
                    </div>
                    @error('postcode')
                        <p class="form__item-text--space-left error">{{ $message }}</p>
                    @enderror
                    <p class="form__item-text--space-left">例）123-4567</p>
                </div>
            </div>
            <div class="form__item">
                <p class="form__item-label">住所※</p>
                <div class="form__item-box">
                    <input type="text" class="form__item-input" name="address" value="{{ old('address') }}">
                    @error('address')
                        <p class="form__item-text error">{{ $message }}</p>
                    @enderror
                    <p class="form__item-text">例）東京都渋谷区千駄ヶ谷1-2-3</p>
                </div>
            </div>
            <div class="form__item">
                <p class="form__item-label">建物名</p>
                <div class="form__item-box">
                    <input type="text" class="form__item-input" name="building_name" value="{{ old('building_name') }}">
                    <p class="form__item-text">例）千駄ヶ谷マンション101</p>
                </div>
            </div>
            <div class="form__item">
                <p class="form__item-label">ご意見※</p>
                <div class="form__item-box">
                    <textarea class="form__item-textarea" name="opinion" wrap="hard">{{ old('opinion') }}</textarea>
                    @error('opinion')
                        <p class="form__item-text error">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button type="submit" class="form__button">確認</button>
        </form>
    </main>
</body>

</html>
