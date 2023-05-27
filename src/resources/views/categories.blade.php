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
  <table class="category-table__inner">
    <tbody>
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
    </tbody>
  </table>
</body>

</html>