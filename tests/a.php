<?php

use Ritaswc\LarkCardMessageBuilder\CardMessageBuilder;
use Ritaswc\LarkCardMessageBuilder\Tag;

include __DIR__ . '/../vendor/autoload.php';

$builder = new CardMessageBuilder('这是标题');
$arr     = $builder->template('grey')
    ->addElement(Tag::hr())
    ->addElement(Tag::divMarkdown('内容1'))
    ->addElement(Tag::markdown('内容2'))
    ->addElement(Tag::columnSet()->addColumn(
        Tag::column()->addElement(Tag::divMarkdown('内容2-1'))->addElement(Tag::divMarkdown('内容2-1')))
    )
    ->addElement(
        Tag::actions()
            ->addAction(
                Tag::button()->text('啦啦啦')
                    ->confirm(Tag::buttonConfirm('标题', '内容'))
                    ->url('https://qa-b.51kuafu.com')
            )
    )
    ->build();
file_put_contents('1.json', json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));