# API Desenvolvimento Web 3

## Install

1. Clone repository

2. Install packages: `cd backend/ && composer install`

3. Setup `.env`, like this:
```
DB_CONNECTION=pgsql
DB_HOST=postgresql
DB_PORT=5432
DB_DATABASE=calcamais
DB_USERNAME=postgres
DB_PASSWORD=postgres
```

4. Execute command
```
php artisan migrate
php artisan serve
```

Ps.: application running on port 8000.
