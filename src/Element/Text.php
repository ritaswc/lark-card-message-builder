<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

class Text extends BaseElement
{
    protected ?bool $isShort = null;

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

    public function toArray(): array
    {
        if (is_bool($this->isShort)) {
            $this->body['is_short'] = $this->isShort;
        }
        return $this->body;
    }
}