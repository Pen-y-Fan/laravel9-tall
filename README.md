# Laravel 9 TALL

This is a Laravel 9 with the TALL stack installed, (Tailwind 3, Alpine, Livewire 3 and Laravel 9), the purpose it to 
experiment with Laravel 9, which had just been released.

Laravel Jetstream (Livewire + Blade) has been installed for authentication.

## Requirements

This is a Laravel 9 project. The installation is similar to a new Laravel 8 project.

- [PHP 8.0+](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org)

Recommended:

- [Git](https://git-scm.com/downloads)

## Clone

See [Cloning a repository](https://help.github.com/en/articles/cloning-a-repository) for details on how to create a
local copy of this project on your computer.

e.g.

```sh
git clone git@github.com:Pen-y-Fan/laravel9-tall.git
```

## Install

Install all the dependencies using composer

```sh
cd laravel9-tall
composer install
npm install
npm run dev
```

## Create .env

Create an `.env` file from `.env.example`

```shell script
composer post-root-package-install
```

## Generate APP_KEY

Generate an APP_KEY using the artisan command

```shell script
php artisan key:generate
```

## edit .env

Edit your **.env** file and configure your database settings

```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel9_tall
DB_USERNAME=<your-db-user>
DB_PASSWORD=<your-db-password>
```

Create your database in MySQL (or whichever database server you configured in your .env file):

```shell
mysql -u user
# enter your password, as required
mysql> CREATE DATABASE laravel9_tall CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
Query OK, 1 row affected (0.00 sec)
mysql> exit
```

## migrate

Run the migration file.

```shell
php artisan migrate
```

## run tests

Tests have been configured to use **sqlite** in memory database, enable the PHP **pdo_sqlite** extension or adjust 
**phpunit.xml** if MySQL is preferred.

```shell
php artisan test --paralell
```

All being well you should see the tests run successfully:

```text
.SSS.......SSS........S.....................                     44 / 44 (100%)

Time: 00:03.625, Memory: 24.00 MB

OK, but incomplete, skipped, or risky tests!
Tests: 44, Assertions: 86, Skipped: 7.      
```

## Start the app

```shell
php artisan serve
```

Alternatively, configure the app to run in your preferred environment, such as sail, Apache or Nginx.

## Access the route

Open your browser to: <https://localhost:8000/>

## Contributing

This is a **personal project**. Contributions are **not** required. Anyone interested in developing this project are
welcome to fork or clone for your own use.

## Credits

- [Michael Pritchard \(AKA Pen-y-Fan\)](https://github.com/pen-y-fan)

## License

MIT License (MIT). Please see [License File](LICENSE.md) for more information.
