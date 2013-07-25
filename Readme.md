PHP-VCR Examples
================

## Installation

Assuming you have got [composer](http://getcomposer.org) installed:

```
git clone git@github.com:adri/php-vcr-examples.git
cd php-vcr-examples/
composer install
```

## Guzzle

To run the guzzle example, do this:

```
cd guzzle
../vendor/bin/phpunit .
```

If you like to record all http requests again, delete the fixture file.

```
rm test/fixtures/github_adri_php-vcr.yml
../vendor/bin/phpunit .
```