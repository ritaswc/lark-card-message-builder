<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

class ColumnSet extends BaseElement
{
    public function __construct()
    {
        $this->body = [
            'tag'                => 'column_set',
            'flex_mode'          => 'bisect',
            'background_style'   => 'grey',
            'horizontal_spacing' => 'default',
            'columns'            => [],
        ];
    }

    public function flexMode(string $flexMode): ColumnSet
    {
        $this->body['flex_mode'] = $flexMode;
        return $this;
    }

    public function backgroundStyle(string $backgroundStyle): ColumnSet
    {
        $this->body['background_style'] = $backgroundStyle;
        return $this;
    }

    public function horizontalSpacing(string $horizontalSpacing): ColumnSet
    {
        $this->body['horizontal_spacing'] = $horizontalSpacing;
        return $this;
    }

    public function addColumn(Column $column): ColumnSet
    {
        $this->body['columns'][] = $column;
        return $this;
    }
}