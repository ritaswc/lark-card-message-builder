<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

class Actions extends BaseElement
{
    public function __construct()
    {
        $this->body = [
            'tag'     => 'action',
            'actions' => [],
        ];
    }

    public function addAction(BaseElement $column): Actions
    {
        $this->body['actions'][] = $column;
        return $this;
    }
}