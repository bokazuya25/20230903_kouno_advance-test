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
        <form class="form__wrap">
            <h2 class="form__title">お問い合わせ</h2>
            <div class="form__item">
                <p class="form__item-label">お名前※</p>
                <div class="form__item-box">
                    <div class="form__item-input-box">
                        <div class="form__item-input-box__area">
                            <input type="text" class="form__item-input-name" name="lastname">
                            <p class="form__item-text">例）山田</p>
                        </div>
                        <div class="form__item-input-box__area">
                            <input type="text" class="form__item-input-name" name="firstname">
                            <p class="form__item-text">例）太郎</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__item">
                <p class="form__item-label">性別※</p>
                <div class="form__item-box">
                    <div class="form__item-radio-box">
                        <input class="form__item-radio-input" type="radio" name="gender" value="1" checked><label class="form__item-radio-label" for="">男性</label>
                        <input class="form__item-radio-input" type="radio" name="gender" value="2"><label class="form__item-radio-label" for="">女性</label>
                    </div>
                </div>
            </div>
            <div class="form__item">
                <p class="form__item-label">メールアドレス※</p>
                <div class="form__item-box">
                    <input type="email" class="form__item-input">
                    <p class="form__item-text">例）text@example.com</p>
                </div>
            </div>
            <div class="form__item">
                <p class="form__item-label">郵便番号※</p>
                <div class="form__item-box">
                    <div class="form__item-box-post">
                        <p class="form__item-postmark">〒</p>
                        <input type="text" class="form__item-input">
                    </div>
                    <p class="form__item-text--space-left">例）123-4567</p>
                </div>
            </div>
            <div class="form__item">
                <p class="form__item-label">住所※</p>
                <div class="form__item-box">
                    <input type="text" class="form__item-input">
                    <p class="form__item-text">例）東京都渋谷区千駄ヶ谷1-2-3</p>
                </div>
            </div>
            <div class="form__item">
                <p class="form__item-label">建物名</p>
                <div class="form__item-box">
                    <input type="text" class="form__item-input">
                    <p class="form__item-text">例）千駄ヶ谷マンション101</p>
                </div>
            </div>
            <div class="form__item">
                <p class="form__item-label">ご意見※</p>
                <div class="form__item-box">
                    <textarea class="form__item-textarea"></textarea>
                </div>
            </div>
            <button type="submit" class="form__button">確認</button>
        </form>
    </main>
</body>
</html>