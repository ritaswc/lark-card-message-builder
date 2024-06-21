<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

use Ritaswc\LarkCardMessageBuilder\Interfaces\FieldInterface;

class FieldText extends BaseElement implements FieldInterface
{
    public function __construct(string $content)
    {
        $this->body = [
            'text'     => [
                'content' => $content,
                'tag'     => 'plain_text',
            ],
            'is_short' => true,
        ];
    }

    public function isShort(bool $isShort = true): FieldText
    {
        $this->body['is_short'] = $isShort;
        return $this;
    }
}