<?php

use Ritaswc\LarkCardMessageBuilder\CardMessageBuilder;
use Ritaswc\LarkCardMessageBuilder\Tag;

include __DIR__.'/../vendor/autoload.php';

$builder = new CardMessageBuilder('这是标题');
$arr     = $builder->setHeaderTemplateColor('grey')
    ->addElement(Tag::hr())
    ->addElement(Tag::divMarkdown('内容1'))
    ->addElement(Tag::markdown('内容2'))
    ->addElement(Tag::columnSet()->addColumn(
        Tag::column()->addElement(Tag::divMarkdown('内容2-1'))->addElement(Tag::divMarkdown('内容2-1'))))
    ->build();
file_put_contents('1.json', json_encode($arr, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT));