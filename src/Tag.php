<?php

namespace Ritaswc\LarkCardMessageBuilder;

use Ritaswc\LarkCardMessageBuilder\Element\Actions;
use Ritaswc\LarkCardMessageBuilder\Element\Button;
use Ritaswc\LarkCardMessageBuilder\Element\Column;
use Ritaswc\LarkCardMessageBuilder\Element\ColumnSet;
use Ritaswc\LarkCardMessageBuilder\Element\DivMarkdown;
use Ritaswc\LarkCardMessageBuilder\Element\Fields;
use Ritaswc\LarkCardMessageBuilder\Element\Hr;
use Ritaswc\LarkCardMessageBuilder\Element\Image;
use Ritaswc\LarkCardMessageBuilder\Element\Markdown;
use Ritaswc\LarkCardMessageBuilder\Element\MultiUrl;

class Tag
{
    public static function hr()
    {
        return new Hr();
    }

    public static function divMarkdown(string $content): DivMarkdown
    {
        return new DivMarkdown($content);
    }

    public static function markdown(string $content): Markdown
    {
        return new Markdown($content);
    }

    public static function columnSet(): ColumnSet
    {
        return new ColumnSet();
    }

    public static function column(): Column
    {
        return new Column();
    }

    public static function actions(): Actions
    {
        return new Actions();
    }

    public function button(): Button
    {
        return new Button();
    }

    public function multiUrl($url): MultiUrl
    {
        return new MultiUrl($url);
    }

    public function fields(): Fields
    {
        return new Fields();
    }

    public function image(string $imageKey, string $alt): Image
    {
        return new Image($imageKey, $alt);
    }
}