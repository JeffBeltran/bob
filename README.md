# Bob - An API Query String Builder

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffbeltran/bob.svg?style=for-the-badge)](https://packagist.org/packages/jeffbeltran/bob)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/jeffbeltran/bob/Tests?style=for-the-badge)](https://github.com/jeffbeltran/bob/actions?query=workflow%3Atests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffbeltran/bob.svg?style=for-the-badge)](https://packagist.org/packages/jeffbeltran/bob)

This is a Laravel package that will allow you to create query scopes that can be applied to an API's Endpoint dynamically via Query Strings.

In short, you can apply filters to your API endpoints like so

```
/posts?include=comments&author=2&sort=created_at,asc
```

This would return all posts for the author of ID 2, all comment relationships and sorted by created_at date (note: some assembly required)

## Installation - WIP

You can install the package via composer:

```bash
composer require jeffbeltran/bob
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Jeffbeltran\Bob\BobServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="Jeffbeltran\Bob\BobServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage - WIP

```php
$bob = new Jeffbeltran\Bob();
echo $bob->echoPhrase('Hello, Jeffbeltran!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email jeffbeltran@gmail.com instead of using the issue tracker.

## Credits

-   [Jeff Beltran](https://github.com/JeffBeltran)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
