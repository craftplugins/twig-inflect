> [!IMPORTANT]
>
> **This extension is no longer maintained.**

# TwigInflect

TwigInflect is a [Twig](http://twig.sensiolabs.org/) extension to transform the inflection of strings.

The extension adds the following filters:
- pluralize
- singularize
- camelize
- dasherize
- humanize
- hyphenate
- ordinalize
- pascalize
- titleize
- underscore

## Installation

```json
{
    "require": {
        "joshuabaker/twig-inflect": "dev-master"
    }
}
```

```php
<?php

use JoshuaBaker\Twig\Extensions\Extension\Inflect as TwigInflect;

$loader = new Twig_Loader_Filesystem('/path/to/templates');
$twig   = new Twig_Environment($loader);

// Registers extension
$twig->setExtensions(new TwigInflect);
```

## Usage

```twig
{{ 'car' | pluralize }}
{{ 'car' | pluralize(3) }}
{# cars #}

{{ 'bikes' | pluralize(1) }}
{{ 'bikes' | singularize }}
{# bike #}
```
