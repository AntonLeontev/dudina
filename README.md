# Laravel Project

Этот проект создан с использованием фреймворка Laravel. Ниже приведены шаги для запуска проекта.

## Установка

1. Клонируйте репозиторий:

    ```bash
    git clone git@github.com:DoczzzMega/dudina.git
    ```
2. Перейдите в директорию проекта:

    ```bash
    cd your-laravel-project
    ```

3. Установите зависимости:

    ```bash
    composer install
    ```

4. Скопируйте файл `.env.example` в `.env` и настройте файл `.env` с вашими конфигурациями:

    ```bash
    cp .env.example .env
    ```

5. Сгенерируйте ключ приложения:

    ```bash
    php artisan key:generate
    ```

6. Создайте символическую ссылку для директории storage:

    ```bash
    php artisan storage:link
    ```

## Запуск миграций

Выполните миграции для создания таблиц в базе данных:

```bash
php artisan migrate
```

## Админка

Создать админа
```bash
php artisan moonshine:user
```

# Заполнить данными

Заполнить список отзывов
```bash
php artisan db:seed --class=ReviewSeeder
```
Заполнить список судебных дел
```bash
php artisan db:seed --class=CourtCaseSeeder
```
Заполнить список торгов
```bash
php artisan db:seed --class=AuctionSeeder
```
