# コマンドツールを作る

ここでは普段のパソコン作業を自動化する、便利なプログラムを作成します。

## Do IT Yourself

WindowsとMacで書き方が少し異なるので気をつけてください。

### Windowsの場合

Atomなどのエディタを起動して、以下の内容を記述し itcaret.bat という名前でデスクトップに保存します。

```bat
echo itcaret > itcaret.txt
mkdir 2017
mkdir 2017\01
mkdir 2017\02
copy itcaret.txt 2017\01\itcaret.txt
copy itcaret.txt 2017\02\itcaret.txt
```

> キーボードから\\を入力するには¥マークを入力してください。このページをコピペすると¥マークを認識しないことがあるので、注意してください。

### Macの場合

Atomなどのエディタを起動して、以下の内容を記述し itcaret.command という名前でデスクトップに保存します。

```sh
cd Desktop
echo itcaret > itcaret.txt
mkdir 2017
mkdir 2017/01
mkdir 2017/02
cp itcaret.txt 2017/01/itcaret.txt
cp itcaret.txt 2017/02/itcaret.txt
```

Macの場合はファイルに実行権限を付与する必要があります。ターミナルというソフトを起動して、以下のコマンドを入力してください。

```
chmod u+x Desktop/itcaret.command
```


### プログラムの実行

作成したファイルをダブルクリックします。

## 何をしたのか？

ほとんどのパソコンは誰でも利用できるようにマウスで操作することができます。

あまり知られていませんが、WindowsもMacもプログラマーが使いやすいようにキーボードだけで（文字だけで）操作できるようになっています。

> ここで作ったプログラムはバッチプログラムなどと呼ばれます。

キーボード中心でパソコンを使うにはWindowsの場合はコマンドプロンプト、Macの場合はターミナルというアプリケーションを使います。これらのアプリケーション上で決められたコマンドを入力していくことでパソコンを操作することができます。


## 便利なコマンドたち

以降で紹介するのは、コマンドプロンプトやターミナル上で利用できるファイル操作関連のコマンドです。これらのコマンドを組み合わせれば役にたつプログラムをDIYできます。


### Step1 画面に文字を出力する

echoコマンドはコンソール（標準出力）に文字列データを出力します。

```
echo Hello World
```

#### ファイルに文字を出力する

&gt; ファイル名とすると、ファイルに文字列データを出力します。

```
echo Hello World > sample.txt
```

### Step2 フォルダの内容を表示する

dir（ls）コマンドはフォルダの内容を表示します。

#### Windowsの場合

```
dir
```

#### Macの場合

```
ls
```

### Step3 フォルダを移動する

WindowsもMacもフォルダは階層構造（ツリー構造）になっています。

+ ルート（WindowsはC:¥、 Macは / ）
  + Users
    + murayama
      + Desktop
        + file1.txt
        + file2.txt
    + tanaka
      + Desktop
        + file1.txt

コンソールは現在開いているフォルダを管理しています。

> Windowsの場合は

cdコマンドでフォルダを移動できます。

今のフォルダの中のDesktopフォルダに移動する。

```
cd Desktop
```

今のフォルダの一つ上のフォルダに移動する

```
cd ..
```

ルートフォルダから指定することもできます。

```
cd C:¥Users¥murayama¥Desktop
```


### Step4 ファイルの内容を表示する

フォルダにsample.txtがある場合

#### Windowsの場合

```
type sample.txt
```

#### Macの場合

```
cat sample.txt
```

### Step5 フォルダを作成する

```
mkdir friday
```

#### フォルダを削除する

> 注意：大事なフォルダを削除しないように作業してください。

```
rmdir friday
```

### Step6 ファイルを作成する

```
echo Hello > hello.txt
```

#### ファイルを削除する

> 注意：大事なファイルを削除しないように作業してください。

##### Windowsの場合

```
remove hello.txt
```

##### Macの場合

```
rm hello.txt
```


### Step7 ファイルをコピーする

#### Windowsの場合

```
copy sample.txt sample2.txt
```

#### Macの場合

```
cp sample.txt sample2.txt
```


#### ファイルを移動する

```
mv sample2.txt sample3.txt
```
