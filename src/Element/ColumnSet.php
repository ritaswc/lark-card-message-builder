<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

use Ritaswc\LarkCardMessageBuilder\Interfaces\TagInterface;

class ColumnSet extends BaseElement implements TagInterface
{
    const FLEX_MODES          = ['none', 'stretch', 'flow', 'bisect', 'trisect'];
    const BACKGROUND_STYLES   = ['default', 'grey'];
    const HORIZONTAL_SPACINGS = ['default', 'small'];

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
        if (!in_array($flexMode, static::FLEX_MODES)) {
            $flexMode = array_values(static::FLEX_MODES)[0];
        }
        $this->body['flex_mode'] = $flexMode;
        return $this;
    }

    public function backgroundStyle(string $backgroundStyle): ColumnSet
    {
        if (!in_array($backgroundStyle, static::BACKGROUND_STYLES)) {
            $backgroundStyle = array_values(static::BACKGROUND_STYLES)[0];
        }
        $this->body['background_style'] = $backgroundStyle;
        return $this;
    }

    public function horizontalSpacing(string $horizontalSpacing): ColumnSet
    {
        if (!in_array($horizontalSpacing, static::HORIZONTAL_SPACINGS)) {
            $horizontalSpacing = array_values(static::HORIZONTAL_SPACINGS)[0];
        }
        $this->body['horizontal_spacing'] = $horizontalSpacing;
        return $this;
    }

    public function addColumn(Column $column): ColumnSet
    {
        $this->body['columns'][] = $column;
        return $this;
    }

    public function actionMultiUrl(MultiUrl $multiUrl): ColumnSet
    {
        $this->body['action']['multi_url'] = $multiUrl;
        return $this;
    }
}