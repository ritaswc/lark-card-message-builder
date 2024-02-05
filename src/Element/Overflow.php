<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

use Ritaswc\LarkCardMessageBuilder\Interfaces\ActionInterface;
use Ritaswc\LarkCardMessageBuilder\Interfaces\OverflowItemInterface;

class Overflow extends BaseElement implements ActionInterface
{
    protected array $values = [];

    public function __construct()
    {
        $this->body = [
            'tag'     => 'overflow',
            'options' => [],
        ];
    }

    public function add(Option $option): Overflow
    {
        $this->body['options'][] = $option;
        return $this;
    }

    /**
     * 该字段用于交互组件的回传交互方式,当用户点击交互组件后，会将 value 的值返回给接收回调数据的服务器。后续你可以通过服务器接收的 value 值进行业务处理。
     * 该字段值仅支持 key-value 形式的 JSON 结构，且 key 为 String 类型。示例值:
     * @param array $valueSet
     * @return $this
     */
    public function value(array $valueSet): Overflow
    {
        if (!isset($this->body['value'])) {
            $this->body['value'] = [];
        }
        foreach ($valueSet as $k => $v) {
            $this->body['value'][$k] = $v;
        }
        return $this;
    }

    public function confirm(ButtonConfirm $buttonConfirm): Overflow
    {
        $this->body['confirm'] = $buttonConfirm;
        return $this;
    }
}