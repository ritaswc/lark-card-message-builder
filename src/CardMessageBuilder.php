<?php

namespace Ritaswc\LarkCardMessageBuilder;

use Ritaswc\LarkCardMessageBuilder\Element\BaseElement;

class CardMessageBuilder
{
    protected array $configs   = [];
    protected array $card_link = [];
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

    /**
     * 配置卡片
     * https://open.feishu.cn/document/common-capabilities/message-card/message-cards-content/card-structure/card-configuration
     * @param array $configs
     * @return $this
     */
    public function configs(array $configs): CardMessageBuilder
    {
        foreach ($configs as $k => $v) {
            $this->configs[$k] = $v;
        }
        return $this;
    }

    public function subTitle(string $subTitle): CardMessageBuilder
    {
        $this->body['header']['subtitle'] = [
            'tag'     => 'plain_text',
            'content' => $subTitle,
        ];
        return $this;
    }

    /**
     * 标题图标
     * 例如：img_v2_718ccfc6-1180-41d7-a21d-1776dd053c8g
     * @param string $imageKey
     * @return $this
     */
    public function icon(string $imageKey): CardMessageBuilder
    {
        $this->body['icon']['img_key'] = $imageKey;
        return $this;
    }

    protected function format(array $body): array
    {
        if (count($this->configs)) {
            $this->body['config'] = $this->configs;
        }
        if (count($this->card_link)) {
            $this->body['card_link'] = $this->card_link;
        }
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