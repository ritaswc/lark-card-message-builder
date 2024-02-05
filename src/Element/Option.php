<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

class Option extends BaseElement
{
    public function __construct(string $text)
    {
        $this->body = [
            'text' => [
                'tag'     => 'plain_text',
                'content' => $text, // 按钮文字
            ],
        ];
    }

    public function value(string $value): Option
    {
        $this->body['value'] = $value;
        return $this;
    }

    public function url(string $url): Option
    {
        unset($this->body['multi_url']);
        $this->body['url'] = $url;
        return $this;
    }

    public function multiUrl(MultiUrl $multiUrl): Option
    {
        unset($this->body['url']);
        $this->body['multi_url'] = $multiUrl;
        return $this;
    }


}