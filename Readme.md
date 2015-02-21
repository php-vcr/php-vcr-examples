[DEPRECATED] PHP-VCR Examples
================

[![Build Status](https://travis-ci.org/php-vcr/php-vcr-examples.png?branch=master)](https://travis-ci.org/php-vcr/php-vcr-examples)

## Installation

Assuming you have got [composer](http://getcomposer.org) installed:

```
git clone git@github.com:php-vcr/php-vcr-examples.git
cd php-vcr-examples/
composer install
```

## Guzzle (using curl_rewrite library hook)

To run the guzzle example, do this:

```
cd guzzle
phpunit
```

If you like to record all http requests again, delete the fixture file.

```
rm test/fixtures/github_adri_php-vcr.yml
phpunit
```

## Soap

Soap examples can be run by:

```
cd soap
phpunit
```

To record all http requests agian, delete the fixtures:

```
cd soap
rm test/fixtures/soap_weather_api_temperature
phpunit
```
