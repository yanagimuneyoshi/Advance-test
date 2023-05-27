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
        <!-- 他のフォーム要素と同様に、名前、性別、メールアドレスのフィールドを追加 -->
        <div class="form__group">
          <div class="form__group-title--name">
            <span class="form__label--item--name">お名前</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text--name">
              <input type="text" name="name" />
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title--gender">
            <span class="form__label--item">性別</span>
          </div>
          <div class="form-body">
            <!-- 性別の選択肢 -->
            <div class="form-man--all">
              <input type="radio" name="gender" value="全て" checked>
            </div>
            <div class="form-man--all--letter">
              <span class="form-sex-txt-all">全て</span>
            </div>
            <div class="form-man">
              <input type="radio" name="gender" value="男">
            </div>
            <div class="form-sex-txt">
              <span class="form-sex-txt">男</span>
            </div>
            <div class="form-woman">
              <input type="radio" name="gender" value="女">
            </div>
            <div class="form-woman-letter">
              <span class="form-sex-txt">女</span>
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title--day">
            <span class="form__label--item">登録日</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text--datetime">
              <input type="datetime-local" name="datetime-local-start" />
              <span class="form__input--text--line">〜</span>
              <input type="datetime-local" name="datetime-local-end" />
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title--email">
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
        <form class="form__button__fix" action="/categories" method="post">
          <div class="form__button__fix-reset">
            <button class="form__button__fix-submit" type="submit" method="post">リセット</button>
          </div>
        </form>

        <div class="category-table">
          <table class="category-table__inner">
            <tr class="category-table__row">
              <th class="category-table__header__ID">ID</th>
              <th class="category-table__header__name">お名前</th>
              <th class="category-table__header__gender">性別</th>
              <th class="category-table__header__email">メールアドレス</th>
              <th class="category-table__header__opinion">ご意見</th>
            </tr>
            <tr class="style"></tr>
            @foreach ($results as $result)
            <tr class="category-table__row">
              <td class="category-table__item1">{{ $result->id }}</td>
              <td class="category-table__item2">{{ $result->fullname }}</td>
              <td class="category-table__item3">{{ $result->gender }}</td>
              <td class="category-table__item4">{{ $result->email }}</td>
              <td class="category-table__item5">{{ $result->opinion }}</td>
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