<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Contact Form
      </a>
    </div>
  </header>

  <main>

  @extends('layouts.app')

  @section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')


    <div class="thanks__content">
      <div class="thanks__heading">
        <h2>ご意見ありがとうございました。</h2>
      </div>
      <form action="/contacts/confirm" method="post">
      <div class="form__button">
          <button class="form__button-submit" type="submit">トップページへ</button>
        </div>
      </form>
    </div>
    @endsection
  </main>
</body>

</html>