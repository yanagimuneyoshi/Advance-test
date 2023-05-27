<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Advance-test</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/category.css') }}">
</head>

<body>
  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>管理システム</h2>
      </div>
      <form class="form" method="POST" action="/search">
        @csrf
        <div class="flex">
          <div class="form__group__name">
            <div class="form__group-title">
              <label class="form__label--item">お名前</label>
            </div>
            <div class="form__group-content">
              <div class="form__input--text">
                <input type="text" name="name" />
              </div>
            </div>
          </div>
          <div class="form__group__gender">
            <div class="form__group__gender__radio">
              <div class="form__group-title">
                <label class="form__label--item">性別</label>
              </div>
              <div class="form__group-content">
                <div class="form__input--radio">
                  <input type="radio" name="gender" value="全て" checked>
                  <span class="form__radio-label">全て</span>
                  <input type="radio" name="gender" value="男">
                  <span class="form__radio-label">男</span>
                  <input type="radio" name="gender" value="女">
                  <span class="form__radio-label">女</span>
                </div>
              </div>
            </div>
          </div>
          <div class="form__group__entry">
            <div class="form__group-title">
              <label class="form__label--item">登録日</label>
            </div>
            <div class="form__group-content">
              <div class="form__input--datetime">
                <input type="datetime-local" name="datetime-local-start" />
                <span class="form__input--datetime-separator">〜</span>
                <input type="datetime-local" name="datetime-local-end" />
              </div>
            </div>
          </div>
          <div class="form__group__email">
            <div class="form__group-title">
              <label class="form__label--item">メールアドレス</label>
            </div>
            <div class="form__group-content">
              <div class="form__input--text">
                <input type="email" name="email" />
              </div>
            </div>
          </div>
          <div class="form__button">
            <button class="form__button-submit" type="submit">検索</button>
          </div>
          <form class="form__button__fix" action="/categories" method="post">
            @csrf
            <div class="form__button__fix-reset">
              <button class="form__button__fix-submit" type="submit" method="post">リセット</button>
            </div>
          </form>
        </div>
      </form>
      <div class="category-table">
        <table class="category-table__inner">
          <tr class="category-table__row">
            <th class="category-table__header">ID</th>
            <th class="category-table__header">お名前</th>
            <th class="category-table__header">性別</th>
            <th class="category-table__header">メールアドレス</th>
            <th class="category-table__header">ご意見</th>
          </tr>
          <tr class="style"></tr>
          @foreach ($results as $result)
          <tr class="category-table__row">
            <td class="category-table__item">{{ $result->id }}</td>
            <td class="category-table__item">{{ $result->fullname }}</td>
            <td class="category-table__item">{{ $result->gender }}</td>
            <td class="category-table__item">{{ $result->email }}</td>
            <td class="category-table__item">{{ $result->opinion }}</td>
            <td class="category-table__item">
              <form class="delete-form" action="/categories/{{ $result->id }}" method="post">
                @csrf
                @method('DELETE')
                <div class="delete-form__button">
                  <button class="delete-form__button-submit" type="submit">削除</button>
                </div>
              </form>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </main>
</body>

</html>