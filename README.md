# Simple Artisan Command to Speed Up Your Application

## Installation

	composer require cleaniquecoders/speed

## Configuration

Open up `app/Console/Commands/Kernel.php` and add the following:

```php
protected $commands = [
    \CleaniqueCoders\Speed\Console\Commands\Speed::class,
    \CleaniqueCoders\Speed\Console\Commands\Serve::class
];
```

## Terminal

Open your terminal and run `php artisan` to verify the command `speed` available.

## Usage

Type in `php artisan speed:up` in your terminal, you will get the following result:

	Compiled views cleared!
	Cache cleared successfully.
	Route cache cleared!
	Configuration cache cleared!
	Configuration cached successfully!
	Generating optimized class loader

You may run `php artisan speed:serve`, which it will run above command first then run the `php artisan serve` automatically.

`--port` option also available for `php artisan speed:serve` command.