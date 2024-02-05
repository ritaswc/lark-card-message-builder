<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

use Ritaswc\LarkCardMessageBuilder\Interfaces\ActionInterface;

class DatePicker extends BaseElement implements ActionInterface
{
    const TYPES = ['date_picker', 'picker_time', 'picker_datetime'];

    public function __construct(string $type)
    {
        if (!in_array($type, static::TYPES)) {
            $type = array_values(static::TYPES)[0];
        }
        $this->body = [
            'tag' => $type,
        ];
    }

    /**
     * 初始化日期
     * @param string $date 必须是 `2024-02-05` 格式
     * @return $this
     */
    public function initialDate(string $date): DatePicker
    {
        $this->body['initial_date'] = $date;
        return $this;
    }

    /**
     * 初始化时间
     * @param string $time 必须是 `01:59` 格式
     * @return $this
     */
    public function initialTime(string $time): DatePicker
    {
        $this->body['initial_datetime'] = $time;
        return $this;
    }

    /**
     * 初始化日期和时间  必须是 `2024-02-05 01:59` 格式
     * @param string $datetime
     * @return $this
     */
    public function initialDatetime(string $datetime): DatePicker
    {
        $this->body['initial_datetime'] = $datetime;
        return $this;
    }

    public function placeholder(string $placeholder): DatePicker
    {
        $this->body['placeholder'] = [
            'tag'     => 'plain_text',
            'content' => $placeholder,
        ];
        return $this;
    }

    public function value(array $valueSet): DatePicker
    {
        if (!isset($this->body['value'])) {
            $this->body['value'] = [];
        }
        foreach ($valueSet as $k => $v) {
            $this->body['value'][$k] = $v;
        }
        return $this;
    }


    public function confirm(ButtonConfirm $buttonConfirm): DatePicker
    {
        $this->body['confirm'] = $buttonConfirm;
        return $this;
    }
}