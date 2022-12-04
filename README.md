## 使用技術

-   Docker
-   Laravel
-   PHP
-   JavaScript | jQuery
-   HTML | CSS
-   MySQL
-   nginx

## 環境構築

docker がローカル端末にインストールされていない場合、docker のインストールが必要です。(Docker Desktop for Mac)

コンテナ起動

    docker-compose up -d

マイグレーション実行

    docker-compose exec phpfpm php artisan migrate:fresh --seed

コンテナ停止

    docker-compose down

Composer Install

    docker-compose exec phpfpm composer install

テストコードの実行

    docker-compose exec phpfpm ./vendor/bin/phpunit

| URL                     |
| :---------------------- |
| <http://localhost:8080> |
