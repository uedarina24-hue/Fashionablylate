# 環境構築

## Dockerビルド
* git clone URL
* docker-compose up -d --build

## Laravel環境構築
* docker-compose exec php bash
* composer install
* cp.env.example.env,環境編集を適宜変更
* php artisan kye:generate
* php artisan migrate
* php artisan db:seed

## 開発環境
* お問い合せ画面　：http://localhost/
* ユーザー登録：http://localhost/register
* phpMyAdmin：http://localhost:08080/

## 使用技術（実行環境）
* php 8.2.11
* Laravel 8.83.8
* jquery 3.7.1.min.js
* MySQL 8.0.26
* nginx 1.21.1

## ER図
![alt text](image.png)
