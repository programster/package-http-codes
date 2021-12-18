HTTP Response Status Codes PHP Package
======================================

This is a PHP package providing an enum for the various HTTP response codes
[as found on Wikipedia](https://en.wikipedia.org/wiki/List_of_HTTP_status_codes).

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
