# concrete-php-assert
A concrete class that extends PHPUnit\Framework\Assert so that it can be instantiated as a class and used as an object.

See my [User Story where I first used this package in a project](https://github.com/john-arcus/xandria-demo/issues/2#issue-318208017).

## Do you really need it?

I started this project to make typing assertion invocations easier. As I implemented my idea I started to doubt if the project was worthwhile. So, bear in mind. This project might be pointless and you might be better of not using it. Meanwhile, I had started so I had to finish it.

If you just want a short name for that class you could `use` the short version of the name.

See: [Using namespaces: Aliasing/Importing](http://php.net/manual/en/language.namespaces.importing.php)

```php
use PHPUnit\Framework\Assert;
```

Is the same as:

```php
use PHPUnit\Framework\Assert as Assert;
```

So assertions could be invoked in just a few characters:

```php
Assert::assertTrue($foo);
```


## Install via Composer

You can add `concrete-php-assert` as a local, per-project, development-time dependency to your project using Composer:

```bash
$ composer require --dev arcus-software/concrete-php-assert

```

## Using ConcreteAssert in your own project

See actual usages of this code within a Behat FeatureContext.php script.

See the `FeatureContext` class in this project at: 

```bash
features/bootstrap/FeatureContext.php
```



# Developing this project

## Clone the repo

[Clone this repository](https://help.github.com/articles/cloning-a-repository/) from [its home on github](https://github.com/john-arcus/concrete-php-assert/).

Then, assuming that you have installed [Composer](https://getcomposer.org/), run:

```bash
$ composer update
```

We use [Behat](http://behat.org/) to test the basic behaviour of instantiating a concrete instance of `PHPUnit\Framework\Assert`. Run Behat tests from this project's root folder with the following command:

```bash
$ vendor/bin/behat
```
