<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

class Column extends BaseElement
{
    const WIDTH  = ['auto', 'weighted'];
    const VERTICAL_ALIGN = ['top', 'center', 'bottom'];

    public function __construct()
    {
        $this->body = [
            'tag'      => 'column',
            'elements' => [],
        ];
    }

    public function width(string $width): Column
    {
        if (!in_array($width, static::WIDTH)) {
            $width = array_values(static::WIDTH)[0];
        }
        $this->body['width'] = $width;
        return $this;
    }

    public function weight(int $weight): Column
    {
        if ($weight < 1) {
            $weight = 1;
        }
        if ($weight > 5) {
            $weight = 5;
        }
        $this->body['weight'] = $weight;
        return $this;
    }

    public function verticalAlign(string $verticalAlign): Column
    {
        if (!in_array($verticalAlign, static::VERTICAL_ALIGN)) {
            $verticalAlign = array_values(static::VERTICAL_ALIGN)[0];
        }
        $this->body['vertical_align'] = $verticalAlign;
        return $this;
    }

    public function addElement(BaseElement $baseElement): Column
    {
        $this->body['elements'][] = $baseElement;
        return $this;
    }
}