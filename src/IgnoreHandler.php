<?php
namespace Marcoazn89;

/**
 * Error level range + ignore activation strategy.
 *
 * Specify a trigger for the logs and pass an array of ignores
 * to log everything from the trigger and above with exception
 * of the ignores.
 *
 * @author Marco A. Chang
 */
class IgnoreHandler implements \Monolog\Handler\FingersCrossed\ActivationStrategyInterface
{
    private $actionLevel;
    private $ignore;

    public function __construct($actionLevel, array $ignore)
    {
        $this->actionLevel = \Monolog\Logger::toMonologLevel($actionLevel);
        $this->ignore = $ignore;
    }

    public function isHandlerActivated(array $record)
    {
        return ($record['level'] >= $this->actionLevel) &&
            (!in_array($record['level'], $this->ignore));
    }
}
