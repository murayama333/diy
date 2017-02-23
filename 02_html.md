# HTMLハック

続いてHTMLという言語を使って、Webページを作成してみましょう。

## Do IT Yourself

Atomなどのエディタを起動して、以下の内容を記述し itcaret.html という名前でデスクトップに保存します。

```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IT CARET</title>
  </head>
  <body>
    <h1>IT CARET</h1>
  </body>
</html>
```

### プログラムの実行

HTMLのプログラムはブラウザ上で実行します。普段使っているブラウザ（ChromeやSafariなど）でitcaret.htmlを開いてみましょう。

> ブラウザにファイルをドラッグアンドドロップしてください。

## 何をしたのか？

HTMLファイルそのものは、タグをたくさん記述したファイルです。HTMLファイルを編集するにはAtomのようなテキストエディタを使います。

作成したHTMLをブラウザで開くと普段のインターネットと同じようにWebページとして表示されます。

## HTMLのタグ

以降はHTMLに用意されているタグの一例です。HTMLには様々なタグが用意されていますが、使い方はどれも似ているので簡単です。これらのタグを組み合わせればいけてるWebページをDIYできます。


### Step1 リンクをつくる

```html
    <a href="https://itcaret.com">link</a>
```


### Step2 画像を表示する

```html
    <img src="https://itcaret.com/wp-content/uploads/2017/02/premium_friday5.png" alt="">
```

### Step3 入力フォームを表示する

```html
    <form action="" method="post">
      <input type="text" name="note">
      <input type="submit" value="save">
    </form>
```

### Step4 リストを表示する

フォルダにsample.txtがある場合

```html
    <ul>
      <li>HTML</li>
      <li>PHP</li>
      <li>WordPress</li>
    </ul>
```

### ここまでのまとめ

```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IT CARET</title>
  </head>
  <body>
    <h1>IT CARET</h1>

    <a href="https://itcaret.com">link</a>

    <img src="https://itcaret.com/wp-content/uploads/2017/02/premium_friday5.png" alt="">

    <form action="" method="post">
      <input type="text" name="note">
      <input type="submit" value="save">
    </form>

    <ul>
      <li>HTML</li>
      <li>PHP</li>
      <li>WordPress</li>
    </ul>
  </body>
</html>
```

> Google MapやYoutube動画の表示にもチャレンジしてみましょう。
