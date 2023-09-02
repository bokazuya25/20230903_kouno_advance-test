document.addEventListener('DOMContentLoaded', function() {
    const inputs = document.querySelectorAll('input, textarea');

    inputs.forEach(function(input) {
        input.addEventListener('input', function() {
            const fieldName = input.getAttribute('name');
            const errorMessage = getErrorMessage(fieldName);
            validateInput(this, fieldName, errorMessage);
        });
    });
});

function getErrorMessage(fieldName) {
    const errorMessages = {
        'lastname': '姓を入力してください',
        'firstname': '名を入力してください',
        'email': 'メールアドレスを入力してください',
        'postcode': '郵便番号を入力してください',
        'address': '住所を入力してください',
        'opinion': 'ご意見を120字以内で入力してください'
    };

    return errorMessages[fieldName] || '';
}

function validateInput(input, fieldName, errorMessage) {
    const errorElement = document.querySelector(`[data-error-for="${fieldName}"]`);
    const fieldValue = input.value.trim();

    if (!fieldValue) {
        if (errorElement) {
            errorElement.textContent = errorMessage;
        }
    } else if (fieldName === 'email') {
        // Emailのバリデーションチェックを行う
        const isValidEmail = validateEmail(fieldValue);
        if (!isValidEmail) {
            if (errorElement) {
                errorElement.textContent = 'メールアドレス形式で入力してください';
            }
        } else {
            if (errorElement) {
                errorElement.textContent = '';
            }
        }
    } else if (fieldName === 'opinion') {
        // opinionの文字数チェックを行う
        if (fieldValue.length > 120) {
            if (errorElement) {
                errorElement.textContent = 'ご意見を120字以内で入力してください';
            }
        } else {
            if (errorElement) {
                errorElement.textContent = '';
            }
        }
    } else {
        if (errorElement) {
            errorElement.textContent = '';
        }
    }
}

function validateEmail(email) {
    // メールアドレスの正規表現パターン
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailPattern.test(email);
}

function validatePostcode(postcode) {
    // 郵便番号の正規表現パターン
    const postcodePattern = /^\d{3}-\d{4}$/;
    return postcodePattern.test(postcode);
}

document.addEventListener('DOMContentLoaded', function() {
    const postcodeInput = document.querySelector('input[name="postcode"]');

    postcodeInput.addEventListener('input', function() {
        const fieldValue = this.value;
        const halfWidthValue = convertToHalfWidth(fieldValue);
        this.value = halfWidthValue;
    });
});

function convertToHalfWidth(value) {
    // 全角数字を半角数字に変換する関数
    return value.replace(/[０-９]/g, function(s) {
        return String.fromCharCode(s.charCodeAt(0) - 65248);
    });
}

document.addEventListener('DOMContentLoaded', function() {
    const postcodeInput = document.querySelector('input[name="postcode"]');

    postcodeInput.addEventListener('input', function() {
        const fieldValue = this.value;
        const formattedValue = formatPostcode(fieldValue);
        this.value = formattedValue;
    });
});

function formatPostcode(value) {
    // 7桁の数字が入力された場合にハイフンを追加して8文字にフォーマットする関数
    const digits = value.replace(/[^\d-]/g, ''); // 数字以外の文字を除去
    const formattedValue = digits.replace(/^(\d{3})(\d{4})$/, '$1-$2'); // ハイフンを挿入
    return formattedValue;
}