<?php

namespace Palmtree\Form\Constraint;

class Email extends AbstractContstraint implements ConstraintInterface
{
    protected $errorMessage = 'Please enter a valid email address';

    public function validate($input)
    {
        return (filter_var($input, FILTER_VALIDATE_EMAIL) !== false);
    }
}