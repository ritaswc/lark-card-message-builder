<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

class Text extends BaseElement
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