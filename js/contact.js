document.addEventListener('DOMContentLoaded', () => {

    const step1 = document.getElementById('form-step1');
    const step2 = document.getElementById('form-step2');
    const btnConfirm = document.getElementById('btn-confirm');
    const btnBack = document.getElementById('btn-back');
    const form = step1.closest('form');

    // エラーメッセージ表示用クラス
    const errorClass = 'wpcf7-not-valid-tip';

    // 確認ボタン押下時
    btnConfirm.addEventListener('click', () => {
        // まず前のエラー表示はクリアする
        form.querySelectorAll(`.${errorClass}`).forEach(el => el.remove());

        let hasError = false;

        // 必須項目（wpcf7-validates-as-required）のバリデーション
        form.querySelectorAll('.wpcf7-validates-as-required, [name="acceptance-51"]').forEach(input => {
            const tag = input.tagName.toLowerCase();
            let value = '';

            if (tag === 'select') {
                value = (input.options[input.selectedIndex] ? input.options[input.selectedIndex].value : '') || '';
            } else if (tag === 'input' || tag === 'textarea') {
                value = input.value.trim();
            }

            if (input.type === 'checkbox' && !input.checked) {
                value = '';
            }

            if (value === '' || value === '選択してください') {
                hasError = true;

                if (!input.nextElementSibling || !input.nextElementSibling.classList.contains(errorClass)) {
                    const span = document.createElement('span');
                    span.classList.add(errorClass);
                    span.setAttribute('aria-hidden', 'true');
                    span.textContent = '必須項目です。';
                    input.after(span);
                }
            }


        });

        // メール確認用チェック
        const email = form.querySelector('[name="your-email"]');
        const emailConf = form.querySelector('[name="your-email_conf"]');

        if (email && emailConf && email.value.trim() !== emailConf.value.trim()) {
            hasError = true;

            if (!emailConf.nextElementSibling || !emailConf.nextElementSibling.classList.contains(errorClass)) {
                const span = document.createElement('span');
                span.classList.add(errorClass);
                span.setAttribute('aria-hidden', 'true');
                span.textContent = 'メールアドレスが一致しません。';
                emailConf.after(span);
            }
        }
        
        if (hasError) {
            // 最初のエラー要素にスクロール
            const firstError = form.querySelector('.' + errorClass);
            if (firstError) {
                const rect = firstError.getBoundingClientRect();
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                const targetY = scrollTop + rect.top - 250;
                window.scrollTo({
                    top: targetY,
                    behavior: 'smooth'
                });
            }

            // エラーあれば確認画面へは進まない
            return;
        }

        // エラーなし → 確認画面へ値をセット
        document.getElementById('confirm-category').textContent = form.querySelector('[name="select-370"]').value;
        document.getElementById('confirm-name').textContent = form.querySelector('[name="your-name"]').value;
        document.getElementById('confirm-email').textContent = form.querySelector('[name="your-email"]').value;
        document.getElementById('confirm-tel').textContent = form.querySelector('[name="tel"]').value;
        document.getElementById('confirm-content').textContent = form.querySelector('[name="content"]').value;

        step1.classList.remove('show');
        step2.classList.add('show');
        scrollToForm();
    });

    // 戻るボタン押下で入力画面に戻す
    btnBack.addEventListener('click', () => {
        step2.classList.remove('show');
        step1.classList.add('show');
        scrollToForm();
    });

    function scrollToForm() {
        const rect = form.getBoundingClientRect();
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const targetY = scrollTop + rect.top - 150; // 150px 上にずらす
        window.scrollTo({
            top: targetY,
            behavior: 'smooth'
        });
    }

});
