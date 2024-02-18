<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

use Ritaswc\LarkCardMessageBuilder\Interfaces\NoteInterface;

class NoteText extends BaseElement implements NoteInterface
{
    public function __construct(string $content)
    {
        $this->body = [
            'tag'     => 'plain_text',
            'content' => $content,
        ];
    }
}