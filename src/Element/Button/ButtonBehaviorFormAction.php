<?php

namespace Ritaswc\LarkCardMessageBuilder\Element\Button;

use Ritaswc\LarkCardMessageBuilder\Element\BaseElement;
use Ritaswc\LarkCardMessageBuilder\Interfaces\ButtonBehaviorInterface;

class ButtonBehaviorFormAction extends BaseElement implements ButtonBehaviorInterface
{
    public function __construct(string $behavior = 'submit')
    {
        $this->body['type']     = 'form_action';
        $this->body['behavior'] = $behavior;
    }

}