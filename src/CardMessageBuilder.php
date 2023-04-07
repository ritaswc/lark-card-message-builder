<?php
namespace Ritaswc\LarkCardMessageBuilder;
use Ritaswc\LarkCardMessageBuilder\Header\Template\Color\BaseColor;

class CardMessageBuilder
{
    const HEADER_TEMPLATE_COLOR_BLUE = 'blue';
    const HEADER_TEMPLATE_COLOR_WATHET = 'wathet';
    const HEADER_TEMPLATE_COLOR_TURQUOISE = 'turquoise';
    const HEADER_TEMPLATE_COLOR_GREEN = 'green';
    const HEADER_TEMPLATE_COLOR_YELLOW = 'yellow';
    const HEADER_TEMPLATE_COLOR_ORANGE = 'orange';

    protected $body = [
        'header' => [
            'template' => 'grey',
            'title' => [
                'tag' => 'plain_text',
                'content' => '大标题',
            ],
        ],
    ];

    public function __construct(string $title)
    {
        $this->body['header']['title']['content'] = $title;
        return $this;
    }

    public function setHeaderTemplateColor(BaseColor $color)
    {
        $this->body['header']['template'] = $color->getColorString();
        return $this;
    }
}