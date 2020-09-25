<p align="center"><a href="https://athfan.com" target="_blank"><img src="https://i.imgur.com/WXUgDHT.png" width="200"></a></p>

<p align="center">
<a href="https://packagist.org/packages/athphane/programmer-quotes"><img src="https://poser.pugx.org/athphane/programmer-quotes/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/athphane/programmer-quotes/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/athphane/programmer-quotes/license.svg" alt="License"></a>
</p>

## Programmer Quotes as a package
Easily get inspirational programmer quotes into your Laravel applications using this package. 

### Install
``` bash
composer require athphane/programmer-quotes
```
### How to use
The package will automatically register itself, so you do not need to manually add it to your Service Providers array. You simply need to do the following.
``` php
$quote = \Athphane\ProgrammerQuotes\ProgrammerQuotes::random();
dd($quote);
```

### Issues
It's just an array of sentences. If you find an issue, lemme know with an [issue](https://github.com/athphane/laravel-programmer-quotes/issues/new).
