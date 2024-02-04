<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

class Actions extends BaseElement
{
    public function __construct()
    {
        $this->body = [
            'tag'     => 'button',
            'actions' => [],
        ];
    }

    public function addAction(Column $column): Actions
    {
        $this->body['columns'][] = $column;
        return $this;
    }
}