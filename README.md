# laravel-controller-helpers

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)

## Install

Via Composer

``` bash
$ composer require ieim/laravel-paths
```

## Usage

``` php
$skeleton = new Ieim\LaravelPaths();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Probable stuff which could be added on a later stage
- Define different places to look for paths via config or/and being lazy (looking in `app/`|`resources/`|`templates/`).

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, consider sending me an email to this@marceichenseher.de instead of using the issue tracker.

## Credits

- [Marc Eichenseher][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/ieim/laravel-paths.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/ieim/laravel-paths
[link-author]: https://github.com/ieim
[link-contributors]: ../../contributors
