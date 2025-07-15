# Force HTTPS links for your app if you are behind a proxy such as HAproxy.

You can install the package via composer:

```bash
composer require aindot/proxy-setup
```

You can publish and run the migrations with:


You can publish the config file with:

```bash
php artisan vendor:publish --tag="proxy-setup-config"
```

This is the contents of the published config file:

```php
return [
    'https' => env('HTTPS', false),
];
```

- [Abdullah](https://github.com/aindot)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
