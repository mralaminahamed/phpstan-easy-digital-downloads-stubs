# Easy Digital Downloads Stubs

[![Latest Version](https://img.shields.io/packagist/v/mralaminahamed/easy-digital-downloads-stubs.svg?color=4CC61E&style=flat-square)](https://packagist.org/packages/mralaminahamed/easy-digital-downloads-stubs)
[![Downloads](https://img.shields.io/packagist/dt/mralaminahamed/easy-digital-downloads-stubs.svg?style=flat-square)](https://packagist.org/packages/mralaminahamed/easy-digital-downloads-stubs/stats)
[![License](https://img.shields.io/packagist/l/mralaminahamed/easy-digital-downloads-stubs.svg?style=flat-square)](./LICENSE)
[![PHP Version](https://img.shields.io/packagist/php-v/mralaminahamed/easy-digital-downloads-stubs.svg?style=flat-square)](./composer.json)

PHP stub declarations for [Easy Digital Downloads](https://easydigitaldownloads.com) (free) to enhance IDE completion and static analysis capabilities. Generated using [php-stubs/generator](https://github.com/php-stubs/generator) directly from the source code.

## Features

- Complete function, class, and interface declarations
- Constant definitions for proper static analysis
- IDE autocompletion support
- PHPStan integration
- Covers EDD 3.x (generated from 3.6.8)

## Requirements

- PHP >= 7.4
- Composer

## Installation

```bash
composer require --dev mralaminahamed/easy-digital-downloads-stubs
```

## Configuration

### PHPStan (`phpstan.neon`)

```neon
parameters:
    scanFiles:
        - vendor/mralaminahamed/easy-digital-downloads-stubs/easy-digital-downloads-stubs.php
        - vendor/mralaminahamed/easy-digital-downloads-stubs/easy-digital-downloads-constants-stubs.php
```

Or use the bundled extension:

```neon
includes:
    - vendor/mralaminahamed/easy-digital-downloads-stubs/extension.neon
```

## Regenerating Stubs

```bash
# Download EDD source
cd source
wget https://downloads.wordpress.org/plugin/easy-digital-downloads.latest-stable.zip
unzip easy-digital-downloads.zip
cd ..

# Install dependencies and generate
composer install
composer generate
```

## Related Packages

- [phpstan-easy-digital-downloads-pro-stubs](https://github.com/mralaminahamed/phpstan-easy-digital-downloads-pro-stubs) — EDD Pro stubs

## License

MIT. See [LICENSE](./LICENSE).
