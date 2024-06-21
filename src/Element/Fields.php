<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

use Ritaswc\LarkCardMessageBuilder\Interfaces\FieldInterface;
use Ritaswc\LarkCardMessageBuilder\Interfaces\TagInterface;

class Fields extends BaseElement implements TagInterface
{
    public function __construct()
    {
        $this->body = [
            'tag'    => 'div',
            'fields' => [],
        ];
    }

    public function add(FieldInterface $element): Fields
    {
        $this->body['fields'][] = $element;
        return $this;
    }
}