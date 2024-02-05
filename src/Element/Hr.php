<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

use Ritaswc\LarkCardMessageBuilder\Interfaces\TagInterface;

class Hr extends BaseElement implements TagInterface
{
    public function __construct()
    {
        $this->body = [
            'tag' => 'hr'
        ];
    }
}