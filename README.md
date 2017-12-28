<p align="center">
  <img src="http://www.phpbenchmarks.com/images/logo_github.png">
  <br>
  <a href="http://www.phpbenchmarks.com" target="_blank">www.phpbenchmarks.com</a>
</p>

## What is www.phpbenchmarks.com ?

You will find lot of benchmarks for PHP frameworks, ORM and libs here.

You can compare results between Apache Bench and Siege, PHP 5.6 to 7.2 and versions of your favorites PHP code.

## What is this repository ?

It's benchmark bundles for almost all Symfony versions.

As Symfony change `request` service to `request_stack` in Symfony 2.4, branches has been created for Symfony <= 2.3.

Hello World: [helloworld](https://github.com/phpbenchmarks/symfony/tree/helloworld)

REST Api (Symfony 2.0 to 2.3): [restapi-symfony-2-3](https://github.com/phpbenchmarks/symfony/tree/restapi-symfony-2-3)

REST Api (Symfony 2.4 to 4.x): [restapi](https://github.com/phpbenchmarks/symfony/tree/restapi)

Blog: [blog](https://github.com/phpbenchmarks/symfony/tree/blog)

Small overload (Symfony 2.0 to 2.3): [smalloverload-symfony-2-3](https://github.com/phpbenchmarks/symfony/tree/smalloverload-symfony-2-3)

Small overload (Symfony 2.4 to 4.x): [smalloverload](https://github.com/phpbenchmarks/symfony/tree/smalloverload)

Big overload (Symfony 2.0 to 2.3): [bigoverload-symfony-2-3](https://github.com/phpbenchmarks/symfony/tree/bigoverload-symfony-2-3)

Big overload (Symfony 2.4 to 4.x): [bigoverload](https://github.com/phpbenchmarks/symfony/tree/bigoverload)

You can find how we benchmark it [here](http://www.phpbenchmarks.com/en/benchmark-protocol).

## How version works ?

We do not follow semantic version for this repository. Here is an explanation about our versioning system:

`X` benchmark type (`1` Hello World, `2` Blog, `3` REST Api, `4` Small overload, `5` Big overload)

`Y` related to Symfony version (`0` Symfony 2.0 to 2.3, `1` Symfony 3.4 to 4.x for `REST Api` benchmak for example)

`Z` new version, not just bugfix and could contains BC

## Symfony benchmarks

You can find all Symfony benchmarks [here](http://www.phpbenchmarks.com/en/benchmark/apache-bench/php-7.2/select-version/symfony.html).
