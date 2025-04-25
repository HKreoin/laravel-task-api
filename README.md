## Установка

Скопировать репозиторий с помощью git clone
```bash
git clone https://github.com/HKreoin/laravel-task-api.git
```

Первоначальная настройка
```bash
cd laravel-task-api
composer install
cp .env.example .env
php artisan key:generate
```

Запустить миграции:
```bash
php artisan migrate:fresh --seed
```

Запуск локально на http://127.0.0.1:8000/
```bash
php artisan ser
```
