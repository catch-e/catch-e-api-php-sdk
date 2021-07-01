# Catch-e API Client SDK for PHP #

<dl>
  <dt>Reference Docs</dt><dd><a href="https://github.com/catch-e/catch-e-api-php-sdk">https://github.com/catch-e/catch-e-api-php-sdk</a></dd>
  <dt>License</dt><dd>Apache 2.0</dd>
</dl>

The Catch-e API Client SDK enables you to work with Catch-e APIs on your server.

These client libraries are officially supported by Catch-e.

## Requirements ##
* [PHP 7.3.0 or higher](https://www.php.net/)

## Installation ##

You can use **Composer** or simply **Download the Release**

### Composer

The preferred method is via [composer](https://getcomposer.org/). Follow the
[installation instructions](https://getcomposer.org/doc/00-intro.md) if you do not already have
composer installed.

Once composer is installed, execute the following command in your project root to install this library:

```sh
composer require catch-e/api-sdk
```

Finally, be sure to include the autoloader:

```php
require_once '/path/to/your-project/vendor/autoload.php';
```

### Download the Release

If you prefer not to use composer, you can download the package in its entirety. The [Releases](https://github.com/catch-e/catch-e-api-php-sdk/releases) page lists all stable versions. Download any file
with the name `catch-e-api-php-sdk-[RELEASE_NAME].zip` for a package including this library and its dependencies.

Uncompress the zip file you download, and include the autoloader in your project:

```php
require_once '/path/to/catch-e-api-php-sdk/vendor/autoload.php';
```

## Examples ##
See the [`examples/`](examples) directory for examples of the key client features.
