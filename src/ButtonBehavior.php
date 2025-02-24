<?php

namespace Ritaswc\LarkCardMessageBuilder;

use Ritaswc\LarkCardMessageBuilder\Element\Button\ButtonBehaviorCallback;
use Ritaswc\LarkCardMessageBuilder\Element\Button\ButtonBehaviorFormAction;
use Ritaswc\LarkCardMessageBuilder\Element\Button\ButtonBehaviorOpenUrl;

class ButtonBehavior
{
    public static function callback(): ButtonBehaviorCallback
    {
        return new ButtonBehaviorCallback();
    }

    public static function formAction(string $behavior = 'submit'): ButtonBehaviorFormAction
    {
        return new ButtonBehaviorFormAction($behavior);
    }

    public static function openUrl(string $defaultUrl): ButtonBehaviorOpenUrl
    {
        return new ButtonBehaviorOpenUrl($defaultUrl);
    }
}