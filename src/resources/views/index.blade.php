<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/sanitize.css">
    <link rel="stylesheet" href="/css/index.css">
    <title>Document</title>
    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
</head>

<body>
    <main>
        <h2 class="form__title">お問い合わせ</h2>
        <form class="form__wrap h-adr" action="{{ route('confirm') }}" method="post">
            @csrf
            <div class="form__item">
                <p class="form__item-label">お名前※</p>
                <div class="form__item-box">
                    <div class="form__item-input-box">
                        <div class="form__item-input-box__area">
                            <input type="text" class="form__item-input-name" name="lastname"
                                value="{{ old('lastname') }}">
                            @error('lastname')
                                <p class="form__item-text error">{{ $message }}</p>
                            @enderror
                            @if (!$errors->has('lastname'))
                                <div class="form__item-text error" data-error-for="lastname">
                                    <span class="rial-time__validation"></span>
                                </div>
                            @endif
                            <p class="form__item-text">例）山田</p>
                        </div>
                        <div class="form__item-input-box__area">
                            <input type="text" class="form__item-input-name" name="firstname"
                                value="{{ old('firstname') }}">
                            @error('firstname')
                                <p class="form__item-text error">{{ $message }}</p>
                            @enderror
                            @if (!$errors->has('firstname'))
                                <div class="form__item-text error" data-error-for="firstname">
                                    <span class="rial-time__validation"></span>
                                </div>
                            @endif
                            <p class="form__item-text">例）太郎</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__item">
                <p class="form__item-label">性別※</p>
                <div class="form__item-box">
                    <div class="form__item-radio-box">
                        <label class="form__item-radio"><input class="form__item-radio-input" type="radio"
                                name="gender" value="1" {{ old('gender') == 1 ? 'checked' : '' }} checked><span
                                class="form__item-radio-dummy"></span><span
                                class="form__item-radio-text">男性</span></label>
                        <label class="form__item-radio"><input class="form__item-radio-input" type="radio"
                                name="gender" value="2" {{ old('gender') == 2 ? 'checked' : '' }}><span
                                class="form__item-radio-dummy"></span><span
                                class="form__item-radio-text">女性</span></label>
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
                    @if (!$errors->has('email'))
                        <div class="form__item-text error" data-error-for="email">
                            <span class="rial-time__varidation"></span>
                        </div>
                    @endif
                    <p class="form__item-text">例）text@example.com</p>
                </div>
            </div>
            <div class="form__item">
                <p class="form__item-label">郵便番号※</p>
                <div class="form__item-box">
                    <div class="form__item-box-post">
                        <span class="p-country-name" style="display: none;">Japan</span>
                        <p class="form__item-postmark">〒</p>
                        <input type="text" class="form__item-input p-postal-code" size="8" maxlength="8"
                            name="postcode" value="{{ old('postcode') }}">
                    </div>
                    @error('postcode')
                        <p class="form__item-text--space-left error">{{ $message }}</p>
                    @enderror
                    @if (!$errors->has('postcode'))
                        <div class="form__item-text--space-left error" data-error-for="postcode">
                            <span class="rial-time__validation"></span>
                        </div>
                    @endif
                    <p class="form__item-text--space-left">例）123-4567</p>
                </div>
            </div>
            <div class="form__item">
                <p class="form__item-label">住所※</p>
                <div class="form__item-box">
                    <input type="text"
                        class="form__item-input p-region p-locality p-street-address p-extended-address" name="address"
                        value="{{ old('address') }}">
                    @error('address')
                        <p class="form__item-text error">{{ $message }}</p>
                    @enderror
                    @if (!$errors->has('address'))
                        <div class="form__item-text error" data-error-for="address">
                            <span class="rial-time__validation"></span>
                        </div>
                    @endif
                    <p class="form__item-text">例）東京都渋谷区千駄ヶ谷1-2-3</p>
                </div>
            </div>
            <div class="form__item">
                <p class="form__item-label">建物名</p>
                <div class="form__item-box">
                    <input type="text" class="form__item-input" name="building_name"
                        value="{{ old('building_name') }}">
                    <p class="form__item-text">例）千駄ヶ谷マンション101</p>
                </div>
            </div>
            <div class="form__item">
                <p class="form__item-label">ご意見※</p>
                <div class="form__item-box">
                    <textarea class="form__item-textarea" name="opinion" wrap="hard" maxlength="120">{{ old('opinion') }}</textarea>
                    @error('opinion')
                        <p class="form__item-text error">{{ $message }}</p>
                    @enderror
                    @if (!$errors->has('opinion'))
                        <div class="form__item-text error" data-error-for="opinion">
                            <span class="rial-time__validation"></span>
                        </div>
                    @endif
                </div>
            </div>
            <button type="submit" class="form__button">確認</button>
        </form>
    </main>
    <script src="{{ asset('js/validation.js') }}"></script>
</body>

</html>
