1. [Фабрики](factories.md)
2. [Dependency injection](dependency_injection.md)
2. [Связи на уровне моделей](relations.md)
2. [(ORM) Eloquent](eloquent.md)



## Развертывание

Клонируем репозиторий `git@github.com:laravel/laravel.git`

Устанавливаем зависимости `composer install`

Переименовываем .env.example в .env `mv .env.example .env`

Генерируем ключ `php artisan key:generate`

Запускаем миграции `php artisan migrate`

## IDE Helper
Нужен для того, чтобы PHPStorm понимал все магические методы Laravel.

После каждого изменения структуры приложения необходимо выполнить
`php artisan ide-helper:model -R `
