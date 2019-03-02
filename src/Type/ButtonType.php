<?php

namespace Palmtree\Form\Type;

class ButtonType extends AbstractType
{
    protected $tag       = 'button';
    protected $type      = 'button';
    protected $required  = false;
    protected $userInput = false;

    public static $defaultArgs = [
        'placeholder' => false,
        'classes'     => [],
    ];

    public function getElement()
    {
        $element = parent::getElement();

        $element->addAttribute('type', $this->getType());
        $element->setInnerText($this->getLabel());

        $element->removeClass('form-control');

        return $element;
    }

    public function getLabelElement()
    {
        return false;
    }
}
