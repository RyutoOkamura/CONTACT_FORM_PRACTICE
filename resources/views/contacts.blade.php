<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <h1 class="title">お問い合わせ</h1>
    <form action="/confirm" method="post">
      @csrf
      <div class="name-input">
        <p class="form-label">お名前 (10文字以内) <span class="badge-danger">必須</span></p>
        <input type="text" name="name">
      </div>
      <div class="email-input">
        <p class="form-label">メールアドレス<span class="badge-danger">必須</span></p>
        <input type="text" name="email">
      </div>
      <div class="tel-input">
        <p class="form-label">電話番号</p>
        <input type="text" name="tel">
      </div>
      <div class="gender-input">
        <p class="form-label">性別<span class="badge-danger">必須</span></p>
        <input type="radio" name="gender" value="男性">男性
        <input type="radio" name="gender" value="女性">女性
      </div>
      <div class="contrnts-input">
        <p class="form-label">お問い合わせ内容<span class="badge-danger">必須</span></p>
        <textarea name="contents" cols="30" rows="10"></textarea>
      </div>
      <button type="submit">確認画面へ</button>
    </form>
  </div>
</body>

</html>