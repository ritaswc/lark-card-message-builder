<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

use Ritaswc\LarkCardMessageBuilder\Interfaces\NoteInterface;
use Ritaswc\LarkCardMessageBuilder\Interfaces\TagInterface;

class ImgCombination extends BaseElement implements NoteInterface, TagInterface
{
    // 文档地址：https://open.feishu.cn/document/uAjLw4CM/ukzMukzMukzM/feishu-cards/card-components/content-components/multi-image-laylout

    const MODES = [
        'double', // 双图混排，最多2张图
        'triple', // 三图混拍，最多3张图
        'bisect', // 等分双列图混排，每行两个等大的正方形图，最多可排布三行，即六张图
        'trisect', // 等分三列图混排，每行三个等大的正方形图，最多可排布三行，即九张图
    ];

    public function __construct(string $mode, array $imgKeys)
    {
        $imgLists = [];
        foreach ($imgKeys as $imgKey) {
            $imgLists[] = [
                'img_key' => $imgKey,
            ];
        }

        $this->body = [
            'tag'              => 'img_combination',
            'combination_mode' => !in_array($mode, self::MODES) ? 'double' : $mode,
            'corner_radius'    => '12px',
            'img_list'         => $imgLists,
        ];
    }

    public function cornerRadius(string $cornerRadius)
    {
        $this->body['corner_radius'] = $cornerRadius;

        return $this;
    }
}
