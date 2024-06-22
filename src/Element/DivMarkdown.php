<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

use Ritaswc\LarkCardMessageBuilder\Interfaces\FieldInterface;
use Ritaswc\LarkCardMessageBuilder\Interfaces\NoteInterface;
use Ritaswc\LarkCardMessageBuilder\Interfaces\TagInterface;

class DivMarkdown extends BaseElement implements FieldInterface, NoteInterface, TagInterface
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