<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

use Ritaswc\LarkCardMessageBuilder\Interfaces\NoteInterface;

class DivMarkdown extends BaseElement implements NoteInterface
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