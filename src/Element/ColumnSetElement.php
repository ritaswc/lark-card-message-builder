<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

class ColumnSetElement extends BaseElement
{
    protected $body = [
        'tag'              => 'column_set',
        'flex_mode'        => 'none',
        'background_style' => 'default',
        'columns'          => [],
    ];

    public function addColumn(array $column)
    {
        $this->body['columns'] = $column;
    }
}