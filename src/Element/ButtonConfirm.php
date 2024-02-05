<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

class ButtonConfirm extends BaseElement
{
    public function __construct(string $title, string $content)
    {
        $this->body = [
            'title' => [
                'tag'     => 'plain_text',
                'content' => $title,
            ],
            'text'  => [
                'tag'     => 'plain_text',
                'content' => $content,
            ],
        ];
    }
}