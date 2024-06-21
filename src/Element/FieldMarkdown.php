<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

use Ritaswc\LarkCardMessageBuilder\Interfaces\FieldInterface;

class FieldMarkdown extends BaseElement implements FieldInterface
{
    public function __construct(string $content)
    {
        $this->body = [
            'text'     => [
                'content' => $content,
                'tag'     => 'lark_md',
            ],
            'is_short' => true,
        ];
    }

    public function isShort(bool $isShort = true): FieldMarkdown
    {
        $this->body['is_short'] = $isShort;
        return $this;
    }
}