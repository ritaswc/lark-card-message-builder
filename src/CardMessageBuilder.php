<?php

namespace Ritaswc\LarkCardMessageBuilder;

use Ritaswc\LarkCardMessageBuilder\Header\Template\Color\BaseTemplateColor;

class CardMessageBuilder
{
    protected $body = [
        'header'   => [
            'template' => 'default',
            'title'    => [
                'tag'     => 'plain_text',
                'content' => '大标题',
            ],
        ],
        'elements' => [],
    ];

    public function __construct(string $title)
    {
        $this->body['header']['title']['content'] = $title;
        return $this;
    }

    public function setHeaderTemplateColor(BaseTemplateColor $color): CardMessageBuilder
    {
        $this->body['header']['template'] = $color->getColorString();
        return $this;
    }

    public function addElement($element): CardMessageBuilder
    {
        $this->body['elements'][] = $element;
        return $this;
    }
}