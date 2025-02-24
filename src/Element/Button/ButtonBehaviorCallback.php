<?php

namespace Ritaswc\LarkCardMessageBuilder\Element\Button;

use Ritaswc\LarkCardMessageBuilder\Element\BaseElement;
use Ritaswc\LarkCardMessageBuilder\Interfaces\ButtonBehaviorInterface;

class ButtonBehaviorCallback extends BaseElement implements ButtonBehaviorInterface
{
    public function __construct()
    {
        $this->body['type']  = 'callback';
    }

    /**
     * 添加值   [k1 => v1, k2 => v2, ...]
     * @param array $values
     * @return $this
     */
    public function addValue(array $values): ButtonBehaviorCallback
    {
        if (!isset($this->body['value'])) {
            $this->body['value'] = [];
        }
        foreach ($values as $k => $v) {
            $this->body['value'][$k] = $v;
        }
        return $this;
    }

}