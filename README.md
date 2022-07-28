# Laravel Nova Links

Gives you access to easily add (external) links into Laravel Nova's menu.

## Versioning

Our major version corresponds to the major Nova version.

| Package version  | Nova version |
|------------------|--------------|
| `^4.0`           | `^4.0`       |

## Installation

You can install the package via composer.

```shell
composer require justbetter/laravel-nova-links
```

## Usage

Update your `NovaServiceProvider` to register the tool. Here you will be able to customize the name, icon and the links.

```php
<?php

use JustBetter\NovaLinks\LinksTool;

public function tools(): array
{
    return [
        LinksTool::make(__('Links'), 'link', [
            __('Job Queue') => url('/horizon'),
        ]),
    ];
}
```
