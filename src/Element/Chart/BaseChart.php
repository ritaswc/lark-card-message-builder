<?php

namespace Ritaswc\LarkCardMessageBuilder\Element\Chart;

use Ritaswc\LarkCardMessageBuilder\Element\BaseElement;
use Ritaswc\LarkCardMessageBuilder\Interfaces\TagInterface;

/**
 * @doc https://open.feishu.cn/document/uAjLw4CM/ukzMukzMukzM/feishu-cards/card-components/content-components/chart
 */
abstract class BaseChart extends BaseElement implements TagInterface
{
    const ASPECT_RATIOS = ['1:1', '2:1', '4:3', '16:9'];
    const COLOR_THEMES  = ['brand', 'rainbow', 'complementary', 'converse', 'primary'];
    protected array $body = [
        'tag'        => 'chart',
        'chart_spec' => null,
        'preview'    => true,
        'height'     => 'auto',
    ];

    public function aspectRatio(string $ratio): BaseChart
    {
        if (in_array($ratio, static::ASPECT_RATIOS)) {
            $this->body['aspect_ratio'] = $ratio;
        } else {
            unset($this->body['aspect_ratio']);
        }
        return $this;
    }

    /**
     * 设置图标主题
     * @param string $colorTheme
     * @return $this
     */
    public function colorTheme(string $colorTheme): BaseChart
    {
        if (in_array($colorTheme, static::COLOR_THEMES)) {
            $this->body['color_theme'] = $colorTheme;
        } else {
            // 飞书会默认为brand，干掉，直接节约传输数据量
            unset($this->body['color_theme']);
        }
        return $this;
    }

    /**
     * 按照一级key覆盖chartSpec的数据
     * @param array $data
     * @return $this
     */
    public function fillChartSpec(array $data): BaseChart
    {
        foreach ($data as $k => $v) {
            $this->body['chart_spec'][$k] = $v;
        }
        return $this;
    }

    /**
     * 图表是否可在独立窗口查看。
     * @param bool $preview
     * @return $this
     */
    public function preview(bool $preview): BaseChart
    {
        $this->body['preview'] = $preview;
        return $this;
    }

    /**
     * 图表组件的高度
     * @param string $height 1px ~ 999px 如果不是这个格式，则会变为auto
     * @return $this
     */
    public function height(string $height): BaseChart
    {
        $pattern = '/^(?:[1-9]\d{0,2}|999)px$/';
        if (preg_match($pattern, $height)) {
            $this->body['height'] = $height;
        } else {
            unset($this->body['height']);
        }
        return $this;
    }
}