# monolog-ignore-handler
A monolog handler that ignores log levels within a range

```php
$logger = new \Monolog\Logger('Test');

// Trigger logging from DEBUG or higuer
$logger->pushHandler(new Marcoazn89\IgnoreStrategy(
  \Monolog\Logger::DEBUG, [\Monolog\Logger::ERROR, \Monolog\Logger::ALERT]
));
```
