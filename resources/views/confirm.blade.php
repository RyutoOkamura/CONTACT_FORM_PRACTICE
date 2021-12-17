<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"content="width=device-width, initial-scale=1">
<meta name="description" content="検索結果でサイト名の下に表示される「サイトの説明文」">
<link rel="apple-touch-icon" sizes="180x180" href="アップルタッチ用のファビコン(相対パスOK）.png">
<link rel="icon" type="image/png" sizes="32x32" href="32サイズのファビコン画像(相対パスOK）.png">
<link rel="icon" type="image/png" sizes="16x16" href="16サイズのファビコン画像(相対パスOK）.png">
<link rel="manifest" href="PWA化のためのマニフェストファイル.webmanifest">
<meta name="msapplication-TileColor" content="Windowsピン留めのテーマカラーを設定→#ffffff">
<meta name="theme-color" content="theme-colorを設定→#ffffff">
<meta name="msapplication-TileImage" content="Windowsピン留め時の画像(絶対パス）.png" />
<meta property="og:description" content="SNSでシェアされたときに表示するサイトの説明文">
<meta property="og:title" content="SNSでシェアされたときに表示するサイトのタイトル">
<meta property="og:image" content="SNSでシェアされたときに表示する画像※かならず絶対パスを記載（相対パス不可）https://....../img/icons/logo.png">
<meta property="og:image:width" content="画像の幅px">
<meta property="og:image:height" content="画像の高さpx">
<meta property="og:type" content="urlがトップページの場合→website、トップページ以外の場合→article">
<meta property="og:url" content="https://........">
<title>Contact</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet"  href="css/confirm.css">
</head>

<body>
  <div class="container">
    <h1 class="title">お問い合わせ内容の確認</h1>
    <div class="explanation-wrapper">
      <p class="explanation">入力内容をご確認の上、宜しければ「送信」をクリックしてください。</p>
    </div>
    <form action="/process" method="post">
      @csrf
      <div class="name-input">
        <p class="form-label">お名前 (10文字以内) <span class="badge-danger">必須</span></p>
        <div class="confirm-name">
          {{ $inputs['name'] }}
        </div>
        <input type="hidden" name="name" value="{{ $inputs['name'] }}">
      </div>
      <div class="email-input">
        <p class="form-label">メールアドレス<span class="badge-danger">必須</span></p>
        <div class="confirm-email">
          {{ $inputs['email'] }}
        </div>
        <input type="hidden" name="email" value="{{ $inputs['email'] }}">
      </div>
      <div class="tel-input">
        <p class="form-label">電話番号</p>
        <div class="confirm-tel">
          {{ $inputs['tel'] }}
        </div>
        <input type="hidden" name="tel" value="{{ $inputs['tel'] }}">
      </div>
      <div class="gender-input">
        <p class="form-label">性別<span class="badge-danger">必須</span></p>
        <div class="confirm-gender">
          {{ $inputs['gender'] }}
        </div>
        <input type="hidden" name="gender" value="{{ $inputs['gender'] }}">
      </div>
      <div class="contents-input">
        <p class="form-label">お問い合わせ内容<span class="badge-danger">必須</span></p>
        <div class="confirm-contents">
          {{ $inputs['contents'] }}
        </div>
        <input type="hidden" name="contents" value="{{ $inputs['contents'] }}">
      </div>
      <div class="btn-wrapper">
        <button name="action" type="submit" value="return" class="submit-btn">入力画面に戻る</button>
        <button name="action" type="submit" value="submit" class="submit-btn">送信</button>
      </div>
    </form>
  </div>
</body>

</html>