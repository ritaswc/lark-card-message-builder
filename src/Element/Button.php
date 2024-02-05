<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

use Ritaswc\LarkCardMessageBuilder\Interfaces\ActionInterface;

class Button extends BaseElement implements ActionInterface
{
    protected array $values = [];

    const TYPES = ['primary', 'default', 'danger'];

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
        unset($this->body['multi_url']);
        return $this;
    }

    public function multiUrl(MultiUrl $multiUrl): Button
    {
        $this->body['multi_url'] = $multiUrl;
        unset($this->body['url']);
        return $this;
    }

    public function text(string $text): Button
    {
        $this->body['text']['content'] = $text;
        return $this;
    }

    public function type(string $type = 'default'): Button
    {
        if (!in_array($type, static::TYPES)) {
            $type = array_values(static::TYPES)[0];
        }
        $this->body['type'] = $type;
        return $this;
    }

    /**
     * 该字段用于交互组件的回传交互方式,当用户点击交互组件后，会将 value 的值返回给接收回调数据的服务器。后续你可以通过服务器接收的 value 值进行业务处理。
     * 该字段值仅支持 key-value 形式的 JSON 结构，且 key 为 String 类型。示例值:
     * @param array $valueSet
     * @return $this
     */
    public function value(array $valueSet): Button
    {
        if (!isset($this->body['value'])) {
            $this->body['value'] = [];
        }
        foreach ($valueSet as $k => $v) {
            $this->body['value'][$k] = $v;
        }
        return $this;
    }

    public function confirm(ButtonConfirm $buttonConfirm): Button
    {
        $this->body['confirm'] = $buttonConfirm;
        return $this;
    }

}