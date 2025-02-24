<?php

namespace Ritaswc\LarkCardMessageBuilder\Element\Button;

use Ritaswc\LarkCardMessageBuilder\Element\BaseElement;
use Ritaswc\LarkCardMessageBuilder\Interfaces\ButtonBehaviorInterface;

class ButtonBehaviorOpenUrl extends BaseElement implements ButtonBehaviorInterface
{
    public function __construct(string $defaultUrl)
    {
        $this->body['type']        = 'open_url';
        $this->body['default_url'] = $defaultUrl;
    }

    public function androidUrl(string $androidUrl): ButtonBehaviorOpenUrl
    {
        $this->body['android_url'] = $androidUrl;
        return $this;
    }

    public function iosUrl(string $iosUrl): ButtonBehaviorOpenUrl
    {
        $this->body['ios_url'] = $iosUrl;
        return $this;
    }

    public function pcUrl(string $pcUrl): ButtonBehaviorOpenUrl
    {
        $this->body['pc_url'] = $pcUrl;
        return $this;
    }
}