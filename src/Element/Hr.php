<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

class Hr extends BaseElement
{
    public function __construct()
    {
        $this->body = [
            'tag' => 'hr'
        ];
    }
}