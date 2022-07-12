# Laravel Setup

## PHP CS Fixer Rules

```console
wget https://raw.githubusercontent.com/flohoe/laravel-setup/master/scr/.php-cs-fixer.dist.php -O .php-cs-fixer.dist.php
```


## IDE Helper

```console
composer require --dev barryvdh/laravel-ide-helper

php artisan ide-helper:generate
php artisan ide-helper:meta
php artisan ide-helper:models --nowrite
```


## Static Code Analysis

- php insights
- larastan
- Clockwork


