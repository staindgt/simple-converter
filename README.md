# Simple Converter for PHP

This small converter can convert XML and JSON to array.

I hope he makes the programmer's job a little easier :)

## Installation

```
composer require staindgt/simple-converter
```

## Usage

```php
use Staindgt\SimpleConverter\ConverterXmlToArray;
use Staindgt\SimpleConverter\File;

$source = new File($fileName);
$convertedContent = (new ConverterXmlToArray($source))->convert();
```
