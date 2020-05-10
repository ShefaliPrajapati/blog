
## Installation Steps
--
Clone .env.example to ``.env`` and replace below details with your database credential 
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog
DB_USERNAME=root
DB_PASSWORD=root
```
---
Run below commands 
* ``composer install``
* ``php artisan migrate:fresh`` 
* ``php artisan db:seed`` 
  
 
