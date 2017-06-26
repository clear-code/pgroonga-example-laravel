# pgroonga-example-laravel

Example application of Laravel 5.4 with PGroonga

## How to setup

Prepare homestead environment before all.

```
% vagrant ssh
vagrant@homestead:~$ git clone https://github.com/clear-code/pgroonga-example-laravel.git Blog
vagrant@homestead:~$ cd Blog
vagrant@homestead:~/Blog$ composer install
vagrant@homestead:~/Blog$ php artisan migrate
vagrant@homestead:~/Blog$ php artisan db:seed
```

## How to try fulltext search with PGroonga

Install PGroonga at first.

```
vagrant@homestead:~$ sudo add-apt-repository -y universe
vagrant@homestead:~$ sudo add-apt-repository -y ppa:groonga/ppa
vagrant@homestead:~$ sudo apt-get update
vagrant@homestead:~$ sudo apt-get install -y -V postgresql-9.5-pgroonga
```

Then switch to the `search-with-pgroonga` branch.

```
vagrant@homestead:~/Blog$ git checkout search-with-pgroonga
vagrant@homestead:~/Blog$ php artisan migrate
```

