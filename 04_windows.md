# PHPのインストール（Windows）

Windowsは標準でPHPがインストールされていません。そのため、PHPをダウンロードしてインストールする必要があります。

> インストール作業は10分くらいで終わります。

## インストール前の確認

事前にPHPがインストールされていないことを確認しておきましょう。

Windows10、Windows8の場合は、キーボード上のWindowsボタン + xボタンで表示されるメニューからコマンドプロンプトを起動できます。

コマンドプロンプトにはキーボードから入力できますので、次のコマンドを入力してください。


    php -v


PHPがインストールされていない場合は次のようなメッセージが表示されます。

![](https://dl.dropboxusercontent.com/u/141509/itc/img/php/install_win1.png)

> もしPHPが既にインストールされているなら以下の作業は不要です。

## PHPのインストール

> 以降のガイドはバージョンの表記を5.5.15としていますが、最新の7.1.2に置き換えて進めてください。

PHPをダウンロードするためにブラウザで以下のURLにアクセスします。

http://windows.php.net/download/

![](https://dl.dropboxusercontent.com/u/141509/itc/img/php/install_win2.png)

上記のページの「VC11 x86 Thread Safe」の「Zip」リンクをクリックするとダウンロードが開始します。

ダウンロードが終わったらZIPファイルを解凍してください。

![](https://dl.dropboxusercontent.com/u/141509/itc/img/php/install_win3.png)

解凍したフォルダ名を以下のように変更します。

* 変更前：php-5.5.15-Win32-VC11-x86
* 変更後：php

![](https://dl.dropboxusercontent.com/u/141509/itc/img/php/install_win22.png)

名前を変更したphpフォルダをC:¥直下に移動します。

![](https://dl.dropboxusercontent.com/u/141509/itc/img/php/install_win4.png)

C:¥phpというフォルダができあがればOKです。

<!--
### php.iniファイルのコピー

C:¥phpフォルダにはphp.ini-developmentという名前のファイルがあります。

![](https://dl.dropboxusercontent.com/u/141509/itc/img/php/install_win31.png)

このファイルをC:¥Windowsフォルダにコピーします。

* コピー元ファイル：C:¥php¥php.ini-development
* コピー先ファイル：C:¥Windows¥php.ini

（ファイルをコピーした後、ファイル名を変更して-development部分を削除してください）

C:¥Windowsフォルダにphp.iniファイルが配置されればOKです。

![](https://dl.dropboxusercontent.com/u/141509/itc/img/php/install_win32.png)

> C:¥Windowsフォルダにコピーする際に、権限確認のダイアログが表示された場合はOKを選択してください。

-->

## 環境変数の設定

続いてコマンドプロンプトからPHPコマンドを利用できるようにします。コマンドプロンプトからPHPコマンドを利用するには環境変数Pathを設定する必要があります。

環境変数Pathを設定するには、次のようにエクスプローラ画面で「コンピューター」を右クリックしてプロパティを開きます。

![](https://dl.dropboxusercontent.com/u/141509/itc/img/php/install_win5.png)

プロパティを選択すると次のような画面が起動するので、サイドバーの「システムの詳細設定」を選択します。

![](https://dl.dropboxusercontent.com/u/141509/itc/img/php/install_win6.png)

表示されたシステムのプロパティ画面で環境変数ボタンをクリックします。

![](https://dl.dropboxusercontent.com/u/141509/itc/img/php/install_win7.png)

環境変数画面が表示されるので、「ユーザー環境変数」欄の新規ボタンをクリックします。

![](https://dl.dropboxusercontent.com/u/141509/itc/img/php/install_win20.png)

> 既にPathを登録済みの場合はPathを選択して編集ボタンをクリックしてください

ユーザー変数の設定画面で以下のように登録します。（変数名にPath、変数値にC:¥phpと入力します）

![](https://dl.dropboxusercontent.com/u/141509/itc/img/php/install_win21.png)

> 既にPathを登録済みの場合は、以下のように記述します。追記箇所の先頭に必ずセミコロン ; の区切り文字を入れてください。


    （〜元々の表示部分）;C:¥php


以上で環境変数の設定は完了です。

> コマンドプロンプトを開いている場合、環境変数の設定を反映するために、コマンドプロンプトを閉じるようにしてください。

## インストールの確認

コマンドプロンプトを開いて、以下のコマンドを入力してください。


    php -v


以下のように表示されればOKです。

![](https://dl.dropboxusercontent.com/u/141509/itc/img/php/install_win14.png)

### エラーが表示される場合

php -vと入力しても以下のようなエラーが表示されるかもしれません。

![](https://dl.dropboxusercontent.com/u/141509/itc/img/php/install_win10.png)

この場合、MSVCR110.dllファイルをダウンロードして追加する必要があります。

### MSVCR110.dllの追加

MSVCR110.dllを追加するには、以下のURLにアクセスします。


    http://www.microsoft.com/ja-jp/download/details.aspx?id=30679


![](https://dl.dropboxusercontent.com/u/141509/itc/img/php/install_win11.png)

ダウンロードボタンをクリックします。

![](https://dl.dropboxusercontent.com/u/141509/itc/img/php/install_win12.png)

ダウンロードするプログラムの一覧からVSU4¥vcredist_x86.exeを選択してダウンロードします。

ダウンロードしたvcredist_x86.exeをダブルクリックするとインストーラが起動します。

![](https://dl.dropboxusercontent.com/u/141509/itc/img/php/install_win13.png)

ライセンス規約に同意してインストールを選択します。

インストールが完了したら**コマンドプロンプトを開き直して**php -vコマンドを実行してみてください。以下のように表示されればOKです。

![](https://dl.dropboxusercontent.com/u/141509/itc/img/php/install_win14.png)
