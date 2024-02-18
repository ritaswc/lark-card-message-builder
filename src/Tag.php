<?php

namespace Ritaswc\LarkCardMessageBuilder;

use Ritaswc\LarkCardMessageBuilder\Element\Actions;
use Ritaswc\LarkCardMessageBuilder\Element\Button;
use Ritaswc\LarkCardMessageBuilder\Element\ButtonConfirm;
use Ritaswc\LarkCardMessageBuilder\Element\Column;
use Ritaswc\LarkCardMessageBuilder\Element\ColumnSet;
use Ritaswc\LarkCardMessageBuilder\Element\DatePicker;
use Ritaswc\LarkCardMessageBuilder\Element\DivMarkdown;
use Ritaswc\LarkCardMessageBuilder\Element\Fields;
use Ritaswc\LarkCardMessageBuilder\Element\Hr;
use Ritaswc\LarkCardMessageBuilder\Element\Image;
use Ritaswc\LarkCardMessageBuilder\Element\Markdown;
use Ritaswc\LarkCardMessageBuilder\Element\MultiUrl;
use Ritaswc\LarkCardMessageBuilder\Element\Note;
use Ritaswc\LarkCardMessageBuilder\Element\NoteText;
use Ritaswc\LarkCardMessageBuilder\Element\Option;
use Ritaswc\LarkCardMessageBuilder\Element\Overflow;
use Ritaswc\LarkCardMessageBuilder\Element\SelectStatic;
use Ritaswc\LarkCardMessageBuilder\Element\Text;

class Tag
{

    public static function actions(): Actions
    {
        return new Actions();
    }


    public static function button(): Button
    {
        return new Button();
    }

    public static function buttonConfirm(string $title, string $content): ButtonConfirm
    {
        return new ButtonConfirm($title, $content);
    }

    public static function column(): Column
    {
        return new Column();
    }

    public static function columnSet(): ColumnSet
    {
        return new ColumnSet();
    }

    public static function datePicker(string $type): DatePicker
    {
        return new DatePicker($type);
    }


    public static function divMarkdown(string $content): DivMarkdown
    {
        return new DivMarkdown($content);
    }

    public static function fields(): Fields
    {
        return new Fields();
    }

    public static function hr(): Hr
    {
        return new Hr();
    }


    public static function image(string $imageKey, string $alt): Image
    {
        return new Image($imageKey, $alt);
    }

    public static function markdown(string $content): Markdown
    {
        return new Markdown($content);
    }

    public static function multiUrl($url): MultiUrl
    {
        return new MultiUrl($url);
    }

    public static function note(): Note
    {
        return new Note();
    }

    public static function noteText(string $content): NoteText
    {
        return new NoteText($content);
    }

    public static function option(string $text): Option
    {
        return new Option($text);
    }

    public static function overflow(): Overflow
    {
        return new Overflow();
    }

    public static function selectStatic(): SelectStatic
    {
        return new SelectStatic();
    }

    public static function text(string $text): Text
    {
        return new Text($text);
    }
}