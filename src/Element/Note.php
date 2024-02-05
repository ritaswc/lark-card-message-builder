<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

use Ritaswc\LarkCardMessageBuilder\Interfaces\NoteInterface;
use Ritaswc\LarkCardMessageBuilder\Interfaces\TagInterface;

class Note extends BaseElement implements TagInterface
{
    public function __construct()
    {
        $this->body = [
            'tag'      => 'note',
            'elements' => [],
        ];
    }

    public function add(NoteInterface $noteItem)
    {
        $this->body['elements'][] = $noteItem;
        return $this;
    }
}