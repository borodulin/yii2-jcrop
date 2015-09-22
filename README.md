Yii2 Jcrop
=================

## Description

Jcrop is a powerful image cropping tool for jQuery. For more than five years, Jcrop has offered web builders an easy way to add image cropping functionality to their applications. Now, in 2014, it's been totally redesigned to be better than ever. Jcrop can also be found powering image cropping functionality in popular open source software such as Wordpress, and web-based services like Gravatar.com.
For more information please visit [Highcharts](http://jcrop.org/) 

# Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/). 

To install, either run

```
$ php composer.phar require conquer/jcrop "*"
```
or add

```
"conquer/jcrop": "*"
```

to the ```require``` section of your `composer.json` file.

# Usage

Basic usage:

```php
// Form edit view
<?php
use conquer\jcrop\JcropWidget;
?>
...
<?= JcropWidget::widget([
        'src' => '/images/sample.jpg',
]) ?>
```

# License

**conquer/jcrop** is released under the MIT License. See the bundled `LICENSE` for details.