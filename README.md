# formation-web-Front
+ Download [XAMPP](https://www.apachefriends.org/xampp-files/8.0.0/xampp-windows-x64-8.0.0-2-VS16-installer.exe).

+ Download [Composer](https://getcomposer.org/Composer-Setup.exe).

+ Download MDB assets:
```
https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.css
https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap
https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css
https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js
```

+ Create Laravel application:
```
``xampp/htdocs$ composer create-project laravel/laravel formation-web``
``xampp/htdocs/formation-web$ cp .env.example .env``
``xampp/htdocs/formation-web$ php artisan key:generate``
``xampp/htdocs/formation-web$ php artisan serve``
```

+ If you download this branch and want to run the application:
```
``xampp/htdocs/application$ composer install``
``xampp/htdocs/application$ cp .env.example .env``
``xampp/htdocs/application$ php artisan key:generate``
``xampp/htdocs/application$ php artisan serve``
```

+ Now the application should run when you visit this url:
``localhost:8000``

# formation-web-Back
