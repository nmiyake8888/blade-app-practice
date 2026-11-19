# blade-app-practice

## 概要
COACHTECH 教材 Tutorial 9-2「Bladeテンプレート ハンズオン演習」で作成した成果物です。
LaravelのBladeテンプレートを使用して、商品一覧ページを作成しました。
コントローラーから商品データを渡し、商品名・カテゴリ・価格・在庫状況をテーブル形式で表示するWebページを実装しました。

## 使用技術
- PHP 8.2
- Laravel 10.x
- Blade テンプレート
- Laravel Sail
- Docker

## 学んだこと
- Bladeテンプレートで使用する変数やプロパティを読み取り、コントローラーから必要なデータを渡す方法
- @foreach や @forelse、@if、@isset などを使用した繰り返し処理や条件分岐の実装
- collect() を使用したコレクションの作成と、@dd() を使用したデバッグ方法

## 動作確認
1. Docker Desktopを起動する。
2. プロジェクトのルートディレクトリに移動する。
    cd ~/laravel-practice/9-2-5_hands-on/blade-app-practice
3. Laravel Sailを起動する。
    ./vendor/bin/sail up -d
4. ブラウザで以下のURLにアクセスする。
    http://localhost/products
5. 商品一覧ページが表示され、商品データや在庫状況が正しく表示されることを確認する。
6. 動作確認後、Laravel Sailを停止する。
    ./vendor/bin/sail down