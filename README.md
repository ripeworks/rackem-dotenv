# .env for your Rack'em application

A simple middleware that will load environment variables from `.env` into `$env`.

It's just like [this thing](https://github.com/bkeepers/dotenv).

## Installation

```bash
$ composer require rackem/dotenv:@stable
```

## Usage

```php
\Rackem::use_middleware("\Rackem\Dotenv");
```
