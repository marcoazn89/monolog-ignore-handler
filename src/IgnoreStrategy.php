<?php
namespace Marcoazn89;

/**
 * This class was meant to be used with the \Monolog\Handler\FingersCrossedHandler.
 * The first parameter specifies when the handler will be activated and the second
 * one specifies when the handler will not be activated
 *
 * @author Marco A. Chang
 */
class IgnoreStrategy implements \Monolog\Handler\FingersCrossed\ActivationStrategyInterface
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
