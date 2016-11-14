# PersonalPortfolio
My Personal Portfolio Page

#.htaccess
remove index.php from browser url
```sh
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L]
```
