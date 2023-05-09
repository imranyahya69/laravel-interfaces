# Laravel Interfaces Implementation with Binding in AppServiceProvider.php

This repository contains an example implementation of Laravel interfaces using binding in `AppServiceProvider.php`.

## Requirements

- PHP >= 7.4
- Laravel >= 8.x

## Installation

1. Clone this repository to your local machine.

```
git clone https://github.com/imranyahya69/laravel-interfaces.git
```

2. Install dependencies using Composer.

```
cd laravel-interfaces
composer install
```

3. Create a new `.env` file by copying the example file.

```
cp .env.example .env
```

4. Generate a new Laravel application key.

```
php artisan key:generate
```

## Usage

This implementation demonstrates how to use Laravel's built-in interface binding feature to bind interfaces to their respective implementations. In this example, we have an interface `AgeInterface` and its implementation `AgeService`. We'll bind the `AgeInterface` interface to the `AgeService` implementation in `AppServiceProvider.php`.

To see this implementation in action, we'll create a new route that uses the `AgeInterface` interface.

1. Open the `routes/web.php` file.

2. Add a new route that uses the `AgeInterface`.

```php
use App\Interfaces\AgeInterface;

Route::get('/', function (AgeInterface $ageInterface) {
    $ageInterface->getAge();
});
```

3. Visit the newly created route in your browser. You should see the output.

## Implementation Details

In `AppServiceProvider.php`, we define a binding for the `AgeInterface` interface that resolves to the `AgeService` implementation.

```php
use App\Interfaces\AgeInterface;
use App\Services\AgeService;

public function register()
{
    $this->app->bind(AgeInterface::class, AgeService::class);
}
```

This means that any time we type hint the `AgeInterface` interface in our application, Laravel will automatically resolve it to an instance of the `AgeService` implementation.

In our example, we used the `AgeInterface` interface in a route closure to retrieve the output of getAge method. Since we bound the interface to the implementation in `AppServiceProvider.php`, Laravel resolved the `AgeInterface` interface to an instance of the `AgeService` implementation, allowing us to use its methods.

## Conclusion

Using interfaces and binding them to their respective implementations in Laravel can make our code more modular, flexible, and easier to maintain. In this example, we demonstrated how to use Laravel's built-in interface binding feature to bind interfaces to their implementations and use them in our application.

## License

This repository is licensed under the MIT License. See the `LICENSE` file for more information.