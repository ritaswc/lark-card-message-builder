<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

class DivMarkdown extends BaseElement
{
    public function __construct(string $content)
    {
        $this->body = [
            'tag'  => 'div',
            'text' => [
                'tag'     => 'lark_md',
                'content' => $content,
            ],
        ];
    }
}