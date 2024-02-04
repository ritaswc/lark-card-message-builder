<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

class Button extends BaseElement
{
    protected array $values = [];

    public function __construct()
    {
        $this->body = [
            'tag'  => 'button',
            'text' => [
                'tag'     => 'plain_text',
                'content' => '点我打开网址',
            ],
            'url'  => 'https://www.baidu.com',
            'type' => 'default',
        ];
    }

    public function url(string $url): Button
    {
        $this->body['url'] = $url;
        return $this;
    }

    public function text(string $text): Button
    {
        $this->body['text']['content'] = $text;
        return $this;
    }

    public function theme(string $theme = 'default'): Button
    {
        if (!in_array($theme, [ 'default','primary', 'danger'])) {

        }
        $this->body['type'] = $theme;
        return $this;
    }

    public function value(array $valueSet)
    {
        foreach ($valueSet as $k => $v) {
            $this->values[$k] = $v;
        }
        return $this;
    }

    public function toArray(): array
    {
        if (count($this->values)) {
            $this->body['value'] = $this->values;
        }
        return $this->body;
    }
}