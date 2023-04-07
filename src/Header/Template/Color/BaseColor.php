<?php

namespace Ritaswc\LarkCardMessageBuilder\Header\Template\Color;

abstract class BaseColor
{
    public function getColorString(): string
    {
        $class = __CLASS__;
        $arr   = explode('\\', $class);
        return strtolower(end($arr));
    }
}