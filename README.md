# Simple Composer Example

## Links to see before start:

- [Composer](https://getcomposer.org/)
- [Packagist](https://packagist.org/)
- [Twig](https://twig.symfony.com/)

## Screenshot

![Screenshot](https://github.com/beznosd/composer-example/blob/master/screenshot.png)

## How the project was created:

1. `$ composer init`
2. `$ composer require "twig/twig:^2.0"` (https://getcomposer.org/doc/03-cli.md#require)

**Composer** creates `/vendor` folder and stores there dependencies that are listed in `composer.json`.
Also in `/vendor` it automatically creates `autoload.php` which will be used to load dependencies to our project. 

3. `/autoload.php` was created where with function `spl_autoload_register` we can register own autoloader and also include autoloader that was created by **Composer** (`/vendor/autoload.php`)

4. We have downloaded [Twig](https://twig.symfony.com/) (template engine for PHP) via **Composer** and created own class `Classes\Greeting.php` to demonstrate that both autoloaders works fine and we can use composer dependencies in our application.

5. We have created view `/views/index.html` for our main page where we use variable `hello` that will be replaced by **Twig** with real data. 

6. In `index.php` we required our `/autoload.php` and then successfully used the class of our application and classes of our dependencies.

7. It just works. Cool!

## Test app in 3 steps

  - clon repo to your localhost
  - run `composer install`
  - open it in a browser (virtual host setup is not required)

Example requires php 7