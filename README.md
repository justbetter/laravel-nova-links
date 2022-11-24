# Laravel Nova Links

Gives you access to easily add (external) links into Laravel Nova's menu.

## Versioning

Our major version corresponds to the major Nova version.

| Package version | Nova version |
|-----------------|--------------|
| `^4.0`          | `^4.0`       |
| `^1.0`          | `^4.0`       |

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
            // Pass a simple string for the url
            __('Job Queue') => url('/horizon'),

            // Or you can pass a Nova MenuItem for more flexibility
            __('Job Queue') => MenuItem::make(__('Job Queue'))
                ->openInNewTab()
                ->external()
                ->path(url('/horizon')),

        ]),
    ];
}
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ramon Rietdijk](https://github.com/ramonrietdijk)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
