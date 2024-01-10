<?php

namespace Ritaswc\LarkCardMessageBuilder;

use Ritaswc\LarkCardMessageBuilder\Element\Column;
use Ritaswc\LarkCardMessageBuilder\Element\ColumnSet;
use Ritaswc\LarkCardMessageBuilder\Element\DivMarkdown;
use Ritaswc\LarkCardMessageBuilder\Element\Hr;
use Ritaswc\LarkCardMessageBuilder\Element\Markdown;

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
}