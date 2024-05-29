<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

use Ritaswc\LarkCardMessageBuilder\Interfaces\NoteInterface;
use Ritaswc\LarkCardMessageBuilder\Interfaces\TagInterface;

/**
 * @doc https://open.feishu.cn/document/common-capabilities/message-card/message-cards-content/image-module
 */
class Image extends BaseElement implements NoteInterface, TagInterface
{
    const MODES = ['crop_center', 'fit_horizontal', 'stretch', 'large', 'medium', 'small', 'tiny'];

    public function __construct(string $imageKey, string $alt)
    {
        $this->body = [
            'tag'     => 'img',
            'img_key' => $imageKey,
            'alt'     => [
                'tag'     => 'plain_text',
                'content' => $alt,
            ],
        ];
    }

    public function title(string $title): Image
    {
        $this->body['title'] = [
            'tag'     => 'plain_text',
            'content' => $title,
        ];
        return $this;
    }

    /**
     * 自定义图片的最大展示宽度，支持在 278px ~ 580px 范围内指定最大展示宽度。
     * 默认情况下图片宽度与图片组件所占区域的宽度一致。
     * @param int $width
     * @return $this
     */
    public function customWidth(int $width): Image
    {
        $width                      = max(278, $width);
        $width                      = min(580, $width);
        $this->body['custom_width'] = $width;
        return $this;
    }

    /**
     * 是否展示为紧凑型的图片。
     * @param bool $width
     * @return $this
     */
    public function compactWidth(bool $width): Image
    {
        $this->body['compact_width'] = $width;
        return $this;
    }

    /**
     * 图片显示模式。
     * @param string $mode
     * @return $this
     */
    public function mode(string $mode): Image
    {
        unset($this->body['custom_width']);
        if (!in_array($mode, static::MODES)) {
            $mode = array_values(static::MODES)[0];
        }
        $this->body['mode'] = $mode;
        return $this;
    }

    /**
     * 点击后是否放大图片。
     * @param bool $preview
     * @return $this
     */
    public function preview(bool $preview): Image
    {
        $this->body['preview'] = $preview;
        return $this;
    }
}