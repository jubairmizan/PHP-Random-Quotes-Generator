# PHP-Random-Quotes-Generator-Library
[![Latest Stable Version](https://poser.pugx.org/jubairmizan/random-quotes-generator/v/stable)](https://packagist.org/packages/jubairmizan/random-quotes-generator)
[![Total Downloads](https://poser.pugx.org/jubairmizan/random-quotes-generator/downloads)](https://packagist.org/packages/jubairmizan/random-quotes-generator)
[![Latest Unstable Version](https://poser.pugx.org/jubairmizan/random-quotes-generator/v/unstable)](https://packagist.org/packages/jubairmizan/random-quotes-generator)
[![License](https://poser.pugx.org/jubairmizan/random-quotes-generator/license)](https://packagist.org/packages/jubairmizan/random-quotes-generator)
[![Monthly Downloads](https://poser.pugx.org/jubairmizan/random-quotes-generator/d/monthly)](https://packagist.org/packages/jubairmizan/random-quotes-generator)
[![Daily Downloads](https://poser.pugx.org/jubairmizan/random-quotes-generator/d/daily)](https://packagist.org/packages/jubairmizan/random-quotes-generator)
[![composer.lock](https://poser.pugx.org/jubairmizan/random-quotes-generator/composerlock)](https://packagist.org/packages/jubairmizan/random-quotes-generator)

Random Quotes Generator Library With Packagist

**Library Install**

**Step 01**


Run this command on your composer 

composer require jubairmizan/random-quotes-generator

**Step 02**

Require the autoload.php on your vendor folder

ex: require_once('./vendor/autoload.php');

**Step 03**

Create an object for access the library class

ex: $rq = new \RandomQuotes\RandomQuotes();

**Step 04**

Call the RandomQuotes Method and give the parameter of what amount of random word you want to show on your project 

ex: echo $rq->generateRandomQuotes(100);
