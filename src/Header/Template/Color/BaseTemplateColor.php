<?php

namespace Ritaswc\LarkCardMessageBuilder\Header\Template\Color;

abstract class BaseTemplateColor
{
    public function getColorString(): string
    {
        $arr = explode('\\', __CLASS__);
        return strtolower(end($arr));
    }
}