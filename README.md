# Inn Checksum

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]
<!-- [![Build Status][ico-travis]][link-travis] -->
<!-- [![Coverage Status][ico-scrutinizer]][link-scrutinizer] -->
<!-- [![Quality Score][ico-code-quality]][link-code-quality] -->

This package validates the Russian Tax Identification Number of Legal Persons, Individual Entrepreneurs and Individual Person

## Highlights

- Simple API
- Framework Agnostic
- Composer ready, [PSR-2][] and [PSR-4][] compliant

## System Requirements

You need:

- **PHP >= 7.1.0** but the latest stable version of PHP is recommended
- The `pcre` extension

## Install

Via Composer

``` bash
$ composer require cryonighter/inn-checksum
```

## Usage

``` php
use Cryonighter\InnChecksum\InnChecker;

if (InnChecker::check('1234567890')) {
    // Your code
}
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ php vendor/phpunit/phpunit/phpunit tests
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email `cryonighter@yandex.ru` instead of using the issue tracker.

## Credits

- [Andrey Reshetchenko][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[PSR-2]: http://www.php-fig.org/psr/psr-2/
[PSR-4]: http://www.php-fig.org/psr/psr-4/

[ico-version]: https://img.shields.io/packagist/v/cryonighter/inn-checksum.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/cryonighter/inn-checksum/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/cryonighter/inn-checksum.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/cryonighter/inn-checksuminn-checksum.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/cryonighter/inn-checksum.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/cryonighter/inn-checksum
[link-travis]: https://travis-ci.org/cryonighter/inn-checksum
[link-scrutinizer]: https://scrutinizer-ci.com/g/cryonighter/inn-checksum/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/cryonighter/inn-checksum
[link-downloads]: https://packagist.org/packages/cryonighter/inn-checksum
[link-author]: https://github.com/cryonighter
[link-contributors]: ../../contributors