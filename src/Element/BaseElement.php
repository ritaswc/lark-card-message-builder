<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

abstract class BaseElement
{
    protected array $body = [];

    public function toArray(): array
    {
        return $this->body;
    }
}