<?php

namespace Ritaswc\LarkCardMessageBuilder\Element;

class MultiUrl extends BaseElement
{
    public function __construct(string $url)
    {
        $this->body = [
            'url'         => $url,
            'pc_url'      => '',
            'ios_url'     => '',
            'android_url' => '',
        ];
    }

    public function pc(string $url): MultiUrl
    {
        $this->body['pc_url'] = $url;
        return $this;
    }

    public function ios(string $url): MultiUrl
    {
        $this->body['ios_url'] = $url;
        return $this;
    }

    public function android(string $url): MultiUrl
    {
        $this->body['android'] = $url;
        return $this;
    }
}