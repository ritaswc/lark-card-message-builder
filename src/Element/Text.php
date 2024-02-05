<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

use Ritaswc\LarkCardMessageBuilder\Interfaces\NoteInterface;
use Ritaswc\LarkCardMessageBuilder\Interfaces\TagInterface;

class Text extends BaseElement implements NoteInterface, TagInterface
{
    public function __construct(string $content, int $lines = 1)
    {
        $this->body = [
            'tag'  => 'div',
            'text' => [
                'tag'     => 'plain_text',
                'content' => $content,
            ],
            'lines' => $lines,
        ];
    }

    public function isShort(bool $isShort): Text
    {
        $this->body['is_short'] = $isShort;
        return $this;
    }

    public function toArray(): array
    {
        if (($this->body['lines'] ?? 1) < 2) {
            unset($this->body['lines']);
        }
        return $this->body;
    }
}