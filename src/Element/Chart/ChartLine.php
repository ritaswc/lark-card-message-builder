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

    /**
     * 设置图标数据
     * @param array $data
     * @param string $xField
     * @param string $yField
     * @return $this
     */
    public function setData(array $data, string $xField, string $yField): ChartLine
    {
        $fixedData = [];
        // 只保留图标所需要的数据，其他数据丢了，节约空间
        foreach ($data as $v) {
            $fixedData[] = [
                $xField => $v[$xField],
                $yField => $v[$yField],
            ];
        }
        $this->fillChartSpec([
            'data'   => [
                'values' => $fixedData,
            ],
            'xField' => $xField,
            'yField' => $yField,
        ]);
        return $this;
    }
}