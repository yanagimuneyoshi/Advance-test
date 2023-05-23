<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Advance-test</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>


<main>
  <div class="confirm__content">
    <div class="confirm__heading">
      <h2>内容確認</h2>
    </div>
    <form class="form">
      <div class="confirm-table">
        <table class="confirm-table__inner">
          <tr class="confirm-table__row">
            <th class="confirm-table__header">お名前</th>
            <td class="confirm-table__text">
              <input type="text" name="name" value="山田　太郎" />
            </td>
          </tr>
          <tr class="confirm-table__row">
            <th class="confirm-table__header">性別</th>
            <td class="confirm-table__text">
              <input type="radio" name="性別" value="男性" 　 />
            </td>
          </tr>
          <tr class=" confirm-table__row">
            <th class="confirm-table__header">メールアドレス</th>
            <td class="confirm-table__text">
              <input type="email" name="email" value="test@example.com" />
            </td>
          </tr>
          <tr class="confirm-table__row">
            <th class="confirm-table__header">郵便番号</th>
            <td class="confirm-table__text">
              <input type="text" name="postalCode" value="123-4567" />
            </td>
          </tr>
          <tr class="confirm-table__row">
            <th class="confirm-table__header">住所</th>
            <td class="confirm-table__text">
              <input type="address" name="address" value="東京都渋谷区千駄ヶ谷1-2-3" />
            </td>
          </tr>
          <tr class="confirm-table__row">
            <th class="confirm-table__header">建物名</th>
            <td class="confirm-table__text">
              <input type="text" name="text" value="千駄ヶ谷マンション101" />
            </td>
          </tr>
          <tr class="confirm-table__row">
            <th class="confirm-table__header">ご意見</th>
            <td class="confirm-table__text">
              <input type="text" name="text" value="いつもお世話になっております。先日、貴社製品を購入させていただきました。この度、不具合が生じ、説明書に沿って操作を進めていましたが上手く行きませんでした。どのように直せば良いかご教授いただきたいです。" />
            </td>
          </tr>
        </table>
      </div>
      <div class="form__button">
        <button class="form__button-submit" type="submit">送信</button>
      </div>
      <div class="form__button__fix">
        <button class="form__button__fix-submit" type="submit">修正する</button>
      </div>
    </form>
  </div>
</main>


</html>