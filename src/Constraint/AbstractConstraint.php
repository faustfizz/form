<?php

declare(strict_types=1);

namespace Palmtree\Form\Constraint;

use Palmtree\ArgParser\ArgParser;

abstract class AbstractConstraint implements ConstraintInterface
{
    /** @var string */
    protected $errorMessage = 'Invalid value';

    /**
     * @param array|string $args
     */
    public function __construct($args = [])
    {
        $parser = new ArgParser($args, 'error_message');
        $parser->parseSetters($this);
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(string $message): self
    {
        $this->errorMessage = $message;

        return $this;
    }
}
