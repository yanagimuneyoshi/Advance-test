<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Advance-test</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<main>
  <div class="contact-form__content">
    <div class="contact-form__heading">
      <h2>お問い合わせ</h2>
    </div>

    <form class="form">
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">お名前</span>
          <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="text" name="family-name" placeholder="テスト太郎" />
            <input type="text" name="given-name" autocomplete="given-name" />
          </div>
          <div class="form__error">
            <!--バリデーション機能を実装したら記述します。-->
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form-body">
            <div class="form-sex">
              <input type="radio" name="性別" />
              <span class="form-sex-txt">男</span>
            </div>
            <div class="form-sex">
              <input type="radio" name="性別" />
              <span class="form-sex-txt">女</span>
            </div>
          </div>

          <div class="form__group">
            <div class="form__group-title">
              <span class="form__label--item">メールアドレス</span>
              <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
              <div class="form__input--text">
                <input type="email" name="email" placeholder="test@example.com" />
              </div>
              <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
              </div>
            </div>
          </div>

          <div class="form__group">
            <div class="form__group-title">
              <span class="form__label--item">郵便番号</span>
              <span class="form__label--required">※</span>
              〒を入れる
              <input type="text" id="postalCode" name="postalCode" maxlength="7" pattern="[0-9]{3}-[0-9]{4}" placeholder="例）123-4567" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>

          <div class="form__group">
            <div class="form__group-title">
              <span class="form__label--item">住所</span>
              <span class="form__label--required">※</span>
              <input id="address" name="address" placeholder="例）東京都渋谷区千駄ヶ谷1-2-3" />入らない
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>

          　　　　　　
          <div class="form__group">
            <div class="form__group-title">
              <span class="form__label--item">建物名</span>
              <input id="text" name="text" placeholder="例）千駄ヶ谷マンション101" />
            </div>
          </div>

          <div class="form__group">
            <div class="form__group-title">
              <span class="form__label--item">ご意見</span>
              <span class="form__label--required">※</span>
              <textarea name="textarea" cols="30" rows="3"></textarea>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
　　　　　　<div class="form__button">
            <button class="form__button-submit" type="submit">確認</button>
          </div>
    </form>
  </div>
</main>

</html>