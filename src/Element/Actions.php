<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

use Ritaswc\LarkCardMessageBuilder\Interfaces\TagInterface;

class Actions extends BaseElement implements TagInterface
{
    const LAYOUTS = ['default', 'bisected', 'trisection', 'flow'];

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

    public function layout(string $layout): Actions
    {
        if (!in_array($layout, static::LAYOUTS)) {
            $layout = array_values(static::LAYOUTS)[0];
        }
        $this->body['layout'] = $layout;
        return $this;
    }
}