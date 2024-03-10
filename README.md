
composer create-project symfony/skeleton:"7.0.*" symfony-api-books

symfony composer require api

php bin/console make:entity

>Book

>title
>string
>255
>yes(NULL)

>description
>string
>255
>yes

>author

>date

php bin/console make:migration

php bin/console doctrine:migrations:migrate# symfony-api-books
