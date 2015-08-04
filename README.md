# TwigInflect

TwigInflect is a [Twig](http://twig.sensiolabs.org/) extension to transform the inflection of strings.

The extension adds the following filters:
- pluralize
- singularize
- camelize
- dasherize
- pascalize
- titleize
- underscore
- humanize
- hyphenate
- ordinalize
- slugify

### Usage

```jinja
{{ 'car' | pluralize }}
{{ 'car' | pluralize(3) }}
{# cars #}

{{ 'bikes' | pluralize(1) }}
{{ 'bikes' | singularize }}
{# bike #}
```
