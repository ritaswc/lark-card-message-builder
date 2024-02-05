<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

use Ritaswc\LarkCardMessageBuilder\Interfaces\ActionInterface;

class SelectStatic extends BaseElement implements ActionInterface
{
    public function __construct()
    {
        $this->body = [
            'tag' => 'select_static',
        ];
    }

    public function placeholder(string $placeholder): SelectStatic
    {
        $this->body['placeholder'] = [
            'tag'     => 'plain_text',
            'content' => $placeholder,
        ];
        return $this;
    }


    public function initialOption(string $option): SelectStatic
    {
        $this->body['initial_option'] = $option;
        return $this;
    }


    public function addOption(Option $option): SelectStatic
    {
        if (!isset($this->body['options'])) {
            $this->body['options'] = [];
        }
        $this->body['options'][] = $option;
        return $this;
    }


    public function value(array $valueSet): SelectStatic
    {
        if (!isset($this->body['value'])) {
            $this->body['value'] = [];
        }
        foreach ($valueSet as $k => $v) {
            $this->body['value'][$k] = $v;
        }
        return $this;
    }

    public function confirm(ButtonConfirm $buttonConfirm): SelectStatic
    {
        $this->body['confirm'] = $buttonConfirm;
        return $this;
    }


}