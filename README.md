# CR-MatsumotoLabo

## 1.アプリ概要

CR Matsumotolabo は、大学時代の研究室のメンバーをモチーフにしたスロットゲームです。研究室のパチンコとスロットが好きな友人を喜ばせたかったのと、Laravel と Vue.js の復習をするために作成したました。

-   アプリケーション URL  
    http://powerful-island-73603.herokuapp.com/gitInfo

## 2.使用技術

-   フロントエンド
    -   HTML
    -   CSS
    -   JavaScript
    -   Vue.js 2.6.14
-   バックエンド
    -   PHP 8.0.13
    -   Laravel 8.75.0
    -   MySQL 15.1
    -   composer
-   インフラ
    -   Xampp
    -   Heroku
    -   AWS（S3）

## 3.ER 図

![ER](https://user-images.githubusercontent.com/91531795/147513785-8a7d56d8-1749-4ba5-ab35-581282e72875.png)

## 4.遊び方

-   「回す」ボタンを押すと 1/10 の確率で抽選が行われ、ルーレットが回ります。もし、抽選が当選していれば図柄が３つ全て揃います。
-   両端の図柄が揃うと「push」ボタンが現れ、ボタンを押すとリーチ演出が流れます。  
    ![11](https://user-images.githubusercontent.com/91531795/147513793-344304d9-18e8-4991-b9a6-af0db10c749c.png)

![13](https://user-images.githubusercontent.com/91531795/147514242-79a28e5c-d38f-4618-8f87-2c934e2f5914.png)

![14](https://user-images.githubusercontent.com/91531795/147514233-f8c8792d-10b7-408d-99c9-4d2d7e3689ff.png)
