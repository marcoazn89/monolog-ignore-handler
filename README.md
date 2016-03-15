# monolog-ignore-strategy
A monolog activation strategy that ignores log levels within a range

```php
$logger = new \Monolog\Logger('Test');

$handler = new \Monolog\Handler\StreamHandler(
  'my.log',
  100
);

// Trigger logging from DEBUG or higuer but not ALERT
$logger->pushHandler(new \Monolog\Handler\FingersCrossedHandler(
  $handler,
  new Marcoazn89\IgnoreStrategy(\Monolog\Logger::DEBUG, [\Monolog\Logger::ERROR, \Monolog\Logger::ALERT])
));
```
