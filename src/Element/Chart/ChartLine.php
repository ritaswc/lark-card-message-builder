<?php

namespace Ritaswc\LarkCardMessageBuilder\Element\Chart;

class ChartLine extends BaseChart
{
    public function __construct($title)
    {
        $this->body['chart_spec'] = [
            'type'   => 'line',
            'title'  => [
                'text' => $title,
            ],
            'data'   => [
                'values' => [],
            ],
            'xField' => '',
            'yField' => '',
        ];
    }

    public function setData(array $data, string $xField, string $yField): ChartLine
    {
        $this->fillChartSpec([
            'data'   => [
                'values' => array_values($data),
            ],
            'xField' => $xField,
            'yField' => $yField,
        ]);
        return $this;
    }
}