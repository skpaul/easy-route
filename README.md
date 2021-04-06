# easy-route
A dead-simple, zero-configuration and simplest router for small php projects.



### How to

You must have the following 3 files and an "app" directory in your root-

1.  .htaccess
2. EasyRoute.php
3. index.php
4. app



### .htaccess

By this file, all requests are redirected to the index.php file

```php
RewriteEngine On
RewriteBase /
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.+)$ index.php [QSA,L]
```



### index.php

Include EasyRoute class - 

```php
include 'EasyRoute.php';
```



Create new instance passing the following parameter - 

```php
$router = new EasyRoute($_SERVER['REQUEST_URI']);
```



Add your routes -

```php
//the following line routes the url "yoursite.com" to the home.php file inside app directory-
$router->addRoute("/","/app/home");

//the following line routes the url "yoursite.com/about" to the about-me.php file inside app/about-us directory-
$router->addRoute("/about","/app/about-us/about-me");
```



Finally run the router-

```php
$router->run();
```



### Voila

You are done. 