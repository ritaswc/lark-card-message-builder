<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

use Ritaswc\LarkCardMessageBuilder\Interfaces\FieldInterface;
use Ritaswc\LarkCardMessageBuilder\Interfaces\TagInterface;

class Markdown extends BaseElement implements FieldInterface, TagInterface
{
    protected ?bool $isShort = null;

    const TEXT_ALIGNS = ['left', 'center', 'right'];

    protected $multiUrl = null;

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
        if (!in_array($textAlign, static::TEXT_ALIGNS)) {
            $textAlign = array_values(static::TEXT_ALIGNS)[0];
        }
        $this->body['text_align'] = $textAlign;
        return $this;
    }

    public function isShort(bool $isShort): Markdown
    {
        $this->body['is_short'] = $this->isShort;
        return $this;
    }

    public function multiUrl(MultiUrl $multiUrl): Markdown
    {
        $this->body['href']['urlVal'] = $multiUrl;
        return $this;
    }
}