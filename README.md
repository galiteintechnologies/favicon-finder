# Favicon Finder
Check if website have favicon icon exist or not

[![Latest Version](https://img.shields.io/packagist/v/nexuslinkservices/favicon-finder.svg?style=flat-square)](https://packagist.org/packages/nexuslinkservices/favicon-finder)
[![Software License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/nexuslinkservices/favicon-finder/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/nexuslinkservices/favicon-finder/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/nexuslinkservices/favicon-finder/badges/build.png?b=master)](https://scrutinizer-ci.com/g/nexuslinkservices/favicon-finder/build-status/master)

## Installation

If you use composer, you can add this package by running 

````
composer require nexuslinkservices/favicon-finder
````

## Usage

```
<?php

use FaviconFinder\IconFinder;

$iconFinder = new IconFinder();

$isFaviconAvailable = $iconFinder->isFaviconAvailable("http://packagist.com/");
if($isFaviconAvailable)
{
    echo "Favicon Icon exist";
} else {
    echo "Favicon Icon Does not exist";
}

```

## Output

```
Favicon Icon exist

```

## CONTRIBUTING:

Pull requests are always welcome.