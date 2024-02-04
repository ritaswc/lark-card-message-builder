<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

class Markdown extends BaseElement
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

    public function toArray(): array
    {
        if (is_bool($this->isShort)) {
            $this->body['is_short'] = $this->isShort;
        }
        if (null !== $this->multiUrl) {
            $this->body['href']['urlVal'] = $this->multiUrl;
        }
        return $this->body;
    }

    public function multiUrl(MultiUrl $multiUrl): Markdown
    {
        $this->multiUrl = $multiUrl;
        return $this;
    }
}