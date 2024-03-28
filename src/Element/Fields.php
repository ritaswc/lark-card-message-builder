<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

class Fields extends BaseElement
{
    public function __construct()
    {
        $this->body = [
            'tag'    => 'div',
            'fields' => [],
        ];
    }

    public function add(BaseElement $element): Fields
    {
        $this->body['fields'][] = $element;
        return $this;
    }
}