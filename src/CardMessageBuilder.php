<?php

namespace Ritaswc\LarkCardMessageBuilder;

use Ritaswc\LarkCardMessageBuilder\Element\BaseElement;

class CardMessageBuilder
{
    const TEMPLATES = ['default', 'blue', 'wathet', 'turquoise', 'green', 'yellow', 'orange', 'red', 'carmine', 'violet', 'purple', 'indigo', 'grey'];
    protected array $body = [
        'header'   => [
            'template' => 'default',
            'title'    => [
                'tag'     => 'plain_text',
                'content' => '大标题',
            ],
        ],
        'elements' => [],
    ];

    public function __construct(string $title)
    {
        $this->body['header']['title']['content'] = $title;
        return $this;
    }

    public function template(string $template): CardMessageBuilder
    {
        if (!in_array($template, static::TEMPLATES)) {
            $color = array_values(static::TEMPLATES)[0];
        }
        $this->body['header']['template'] = $template;
        return $this;
    }

    public function addElement($element): CardMessageBuilder
    {
        $this->body['elements'][] = $element;
        return $this;
    }

    public function toArray(): array
    {
        return $this->build();
    }

    public function build(): array
    {
        return $this->format($this->body);
    }

    protected function format(array $body): array
    {
        $newBody = [];
        foreach ($body as $k => $v) {
            if ($v instanceof BaseElement) {
                $v = $v->toArray();
            }
            if (is_callable($v)) {
                $v = $v();
            }
            if (is_array($v)) {
                $v = $this->format($v);
            }
            $newBody[$k] = $v;
        }
        return $newBody;
    }
}