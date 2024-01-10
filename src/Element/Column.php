<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

class Column extends BaseElement
{
    public function __construct()
    {
        $this->body = [
            'tag'      => 'column',
            'width'    => 'weighted',
            'weight'   => 1,
            'elements' => [],
        ];
    }

    public function width(string $width): Column
    {
        $this->body['width'] = $width;
        return $this;
    }

    public function weight(int $weight): Column
    {
        $this->body['weight'] = $weight;
        return $this;
    }

    public function addElement(BaseElement $baseElement): Column
    {
        $this->body['elements'][] = $baseElement;
        return $this;
    }
}