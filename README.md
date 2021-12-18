Awesome HTTP Codes Package
==========================

## Install

```bash
composer require programster/http-codes
```

## Example Usage

Below is an example of using the package to return a 404 JSON response for an 
API request.

```php
<?php
use Programster\Http\HttpCode;

http_response_code(HttpCode::NOT_FOUND);

$body = [
    "result" => "error",
    "message" => "Resource not found.",
];

header('Content-Type: application/json');
die(json_encode($body));
```
