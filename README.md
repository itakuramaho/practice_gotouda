# ver3.1.0

# 環境について
開発環境にnpmスクリプトを使用しています。
node.js のインストールが必要です。

cssはscssを使用。jsはwebpackでバンドルしています。

また、phpコマンドが使える必要があります。

# コマンド一覧

```
// セットアップ
npm i

// npm run dev（開発環境用）
//「src」「public」のファイルを元に、dist配下に開発環境用のファイルを生成する。
npm run dev

// npm run build（本番環境用）
//「src」「public」のファイルを元に、build配下に本番環境用のファイルを生成する。画像も圧縮されます。
npm run build

// npm run format
// 「eslint」「prettier」の実行
npm run format
```

# ディレクトリ構成について

src/* -編集用(source)。「scss」「js」ファイルが入ります。「dist」or「build」内に変換・生成されます。

public/ -「dist」or「build」内にコピーされます。（例: public/assets → dist/assets） 画像等のアセットファイル等が入ります。

dist/  -npm run devコマンドより開発環境用のデータが生成されます（dist内のデータを直接編集することはありません）

build/ -npm run buildコマンドより本番環境のデータが生成されます（build内のデータを直接編集することはありません）


## ■src/styles
base -リセットscssや、ベース設定scssが入ります。

lib -「変数」「関数」「Mixin」の設定scssが入ります。

utility -汎用的に使えるクラスの設定scssが入ります。

module -汎用的に使えるモジュールのscssが入ります。 

page -ページ毎のscssが入ります。


基本的には「module」「page」内のscssファイルを編集します。

汎用的なモジュールは「module」の該当するscssファイルに記述します。
ページ毎のcssは「page」にファイルを追加し、記述します。

※「module」に関しても必要であれば適宜scssファイルを追加してください。


### src/styles/lib/var.scss

フォントサイズ、インナーサイズ、ブレイクポイント等の共通変数の設定を行うファイルです。
初めにこちらを設定します。


## ■src/scripts
jsが入ります。webpackによりバンドルされます。


# CSSルール
ページ毎のcss（src/styles/page/{page}.scss）は基本ページIDでラップして記述してください。

例）/about/ ページの場合
```
// src/styles/page/about.scss

.page-about {
  // ここの中に記述
}
```

## ■remについて

サイズ指定は、基本pxでなく、remで指定してください。
デバイスサイズによって拡大縮小するので、レスポンシブ対応がやりやすくなります。

参考記事
https://note.com/asamin_moto/n/ne75631919074

```
// remの設定
// src/styles/base/_base.scss

// 下記設定、1remを例に説明
// 1000px以上の時、1rem→10px 999px以下の時はサイズによって縮小する
// 767px以下の場合は、375pxを基準に1rem→10px それ以外はサイズによって拡大縮小する

html {
  font-size: 10px;
  @media screen and (max-width: 1000px) { // （基準の変更する場合、ここのブレイクポイントと下の計算を変更してください。）
    font-size: 1vw;  // 10px / 1000px * 100
  }
  @include g.max-screen(g.$bp-sp) {
    font-size: 2.66666667vw;  // 10px / 375px * 100 （基準の変更する場合、ここの計算を変更してください。）
  }
}
```

## ■命名ルール

class名は原則、BEM（MindBEMding） を採用しています。

```
.Block {}
.Block__Element {}
.Block__Element--Modifier {}
.Block--Modifier {}

// scss
.Block {
  &__Element01 {}
  &__Element02 {}
  &__Element03 {}
  &__Element03--Modifier {}

  &--Modifier {}
}

// ※単語の区切りはハイフン
.news-list__sub-title {}
```

## ■scssの階層について
```
// 階層を深くしすぎるとコードの見通しが悪くなるので注意。
// 原則ルートクラス（BEMのブロック要素）から3階層までとしてください。

// NG
.item { // ルートクラス
  &__ttl {
    &-02 {
      &--bold {
        font-weight: 600;
        @media (max-width:767px) {
          font-weight: 900;
        }
      }
    }
  }
  &__txt {}
}

// OK
.item { // ルートクラス
  &__ttl {}
  &__ttl-02 {}
  &__ttl-02--bold {
    font-weight: 600;
    @media (max-width:767px) {
      font-weight: 900;
    }
  }
  &__txt {}
}

// メディアクエリは、基本各ブロック、エレメント要素の中に記述してください。

// NG
.item {
  &__ttl {
  }
  &__ttl--bold {
  }
  &__txt {
  }
  @media (max-width:767px) {
    &__ttl {
    }
    &__ttl--bold {
    }
    &__txt {
    }
  }
}

// OK
.item {
  @media (max-width:767px) {} // .itemのSPスタイル
  &__ttl {
    @media (max-width:767px) {} // .item__ttlのSPスタイル
  }
  &__ttl--bold {
    @media (max-width:767px) {
      font-weight: 900;
    }
  }
  &__txt {
    @media (max-width:767px) {}
  }
}
```


## ■スタイルガイド
本テンプレートのスタイルガイドです。
https://dm-test-server01.com/data/css_style_guide/


# ブレイクポイントについて
基本、767pxまではSP、768px以上はPC・タブレットとします。それ以外は適宜必要に応じて区切ってください。

# git運用について
開発用ブランチとして基本「develop」で進めてください。

ブランチは定期的にpull, pushしてください。

コミットはなるべく小さい単位でまとめるようにしてください。