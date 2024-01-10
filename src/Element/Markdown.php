<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

class Markdown extends BaseElement
{
    public function __construct(string $content)
    {
        $this->body = [
            'tag'        => 'markdown',
            'content'    => $content,
            'text_align' => 'center',
        ];
    }

    public function textAlign(string $textAlign): Markdown
    {
        $this->body['text_align'] = $textAlign;
        return $this;
    }
}