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
      <h2>管理システム</h2>
    </div>

    <form class="form">
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">お名前</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text--name">
            <input type="text" name="family-name" placeholder="テスト太郎" />
            <input type="text" name="given-name" autocomplete="given-name" />
          </div>
        </div>
      </div>

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">性別</span>
        </div>
        <div class="form-body">
          <div class="form-man">
            <input type="radio" name="gender" value="全て" checked />
            <span class="form-sex-txt-all">全て</span>
          </div>
          <div class="form-body">
            <div class="form-man">
              <input type="radio" name="gender" value="男" />
              <span class="form-sex-txt">男</span>
            </div>
            <div class="form-woman">
              <input type="radio" name="gender" value="女" />
              <span class="form-sex-txt">女</span>
            </div>
          </div>
        </div>
      </div>
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">登録日</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text--datetime">
            <input type="datetime-local	" name="datetime-local" />
            <span class="form__input--text--datetime">〜</span>
            <input type="datetime-local	" name="datetime-local" />
          </div>
        </div>
      </div>
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">メールアドレス</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text--email">
            <input type="email" name="email" />
          </div>
        </div>
      </div>
      <div class="form__button">
        <button class="form__button-submit" type="submit">検索</button>
      </div>
    </form>
    <form class="form__button__fix">
      <button class="form__button__fix-submit" type="submit">リセット</button>
    </form>
  </div>
</main>