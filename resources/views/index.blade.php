<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <!-- <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Contact Form
      </a>
    </div>
  </header> -->

  <main>

  @extends('layouts.app')

  @section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
      </div>
      <form class="form" action="/contacts/confirm" method="post">
      @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <p>
                <span></span>
                <input type="text" name="name" placeholder="例）山田" value="{{ old('name') }}" />
                <span></span>
                <input type="text" name="name" placeholder="例）太郎" value="{{ old('name') }}" />
              </p>
              <!-- <input type="text" name="name" placeholder="テスト太郎" /> -->
            </div>
            <div class="form__error">
                @error('name')
                {{ $message }}
                @enderror

            </div>
          </div>
        </div>

        <div class="form_group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="radio" name="gender" value="male">男性
              <input type="radio" name="gender" value="female">女性
            </div>
            <div class="form__error">
                <!-- @error('gender')
                {{ $message }}
                @enderror -->

            </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com" value="{{ old('name') }}" />
            </div>
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror

            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">郵便番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <span>〒</span>
              <input type="text" name="post_code" placeholder="例）１２３－４５６７" value="{{ old('name') }}" />
            </div>
            <div class="form__error">
                @error('post_code')
                {{ $message }}
                @enderror

            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" placeholder="例）東京都渋谷区千駄ヶ谷１－２－３" value="{{ old('name') }}" />
            </div>
            <div class="form__error">
                @error('address')
                {{ $message }}
                @enderror

            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="Building_name" placeholder="例）千駄ヶ谷マンション１０１" value="{{ old('name') }}" />
            </div>
            <div class="form__error">
                @error('Building_name')
                {{ $message }}
                @enderror

            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">ご意見</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="opinion"></textarea>
            </div>
            <div class="form__error">
                @error('opinion')
                {{ $message }}
                @enderror

            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認</button>
        </div>
      </form>
    </div>
    @endsection('content')
  </main>
</body>

</html>