# lark-card-message-builder

Lark/飞书，机器人消息，卡片消息构建工具

## 官方文档
[点我跳转到：飞书开放平台 - 消息卡片概述](https://open.feishu.cn/document/common-capabilities/message-card/introduction-of-message-cards)

## 使用示例

### 单列-表单类信息展示-按钮
```php

$card = (new CardMessageBuilder('单列-表单类信息展示-按钮'))
    ->template('blue')
    ->addElement(Tag::divMarkdown('**门店所在区域: **上海市-上海市-松江区'))
    ->addElement(Tag::divMarkdown('**门店编号: **8888'))
    ->addElement(Tag::divMarkdown('**提交时间: **2024-01-25 09:29:36'))
    ->addElement(Tag::divMarkdown('**督导: **隔壁老李'))
    ->addElement(Tag::actions()->addAction(
        Tag::button()->text('点击查看')->url('https://www.baidu.com')->type('primary')
    ));
```
![images/001.png](https://github.com/ritaswc/lark-card-message-builder/blob/main/images/001.png?raw=true)


### 带表头表格类-列权重-小字
```php
$cardWeight = [3, 5, 2, 2, 2, 2];
$card       = (new CardMessageBuilder('带表头表格类-列权重-小字'))
    ->template('purple')
    ->addElement(
        Tag::columnSet()
            ->flexMode('none')
            ->backgroundStyle('grey')
            ->addColumn(Tag::column()->weight($cardWeight[0])->width('weighted')->addElement(Tag::markdown('**字段1**'))->verticalAlign('center'))
            ->addColumn(Tag::column()->weight($cardWeight[1])->width('weighted')->addElement(Tag::markdown('**字段2**'))->verticalAlign('center'))
            ->addColumn(Tag::column()->weight($cardWeight[2])->width('weighted')->addElement(Tag::markdown('**字段3**'))->verticalAlign('center'))
            ->addColumn(Tag::column()->weight($cardWeight[3])->width('weighted')->addElement(Tag::markdown('**字段4**'))->verticalAlign('center'))
            ->addColumn(Tag::column()->weight($cardWeight[4])->width('weighted')->addElement(Tag::markdown('**字段5**'))->verticalAlign('center'))
            ->addColumn(Tag::column()->weight($cardWeight[5])->width('weighted')->addElement(Tag::markdown('**字段6**'))->verticalAlign('center'))
    );
$card->addElement(
    Tag::columnSet()
        ->flexMode('none')
        ->backgroundStyle('default')
        ->horizontalSpacing('small')
        ->addColumn(Tag::column()->weight($cardWeight[0])->width('weighted')->addElement(Tag::markdown("1markdown1"))->verticalAlign('center'))
        ->addColumn(Tag::column()->weight($cardWeight[1])->width('weighted')->addElement(Tag::markdown("1markdown2"))->verticalAlign('center'))
        ->addColumn(Tag::column()->weight($cardWeight[2])->width('weighted')->addElement(Tag::markdown("1markdown3"))->verticalAlign('center'))
        ->addColumn(Tag::column()->weight($cardWeight[3])->width('weighted')->addElement(Tag::markdown("1markdown4"))->verticalAlign('center'))
        ->addColumn(Tag::column()->weight($cardWeight[4])->width('weighted')->addElement(Tag::markdown("1markdown5"))->verticalAlign('center'))
        ->addColumn(Tag::column()->weight($cardWeight[5])->width('weighted')->addElement(Tag::markdown("1markdown6"))->verticalAlign('center'))
);
$card->addElement(
    Tag::columnSet()
        ->flexMode('none')
        ->backgroundStyle('default')
        ->horizontalSpacing('small')
        ->addColumn(Tag::column()->weight($cardWeight[0])->width('weighted')->addElement(Tag::markdown("2markdown1"))->verticalAlign('center'))
        ->addColumn(Tag::column()->weight($cardWeight[1])->width('weighted')->addElement(Tag::markdown("2markdown2"))->verticalAlign('center'))
        ->addColumn(Tag::column()->weight($cardWeight[2])->width('weighted')->addElement(Tag::markdown("2markdown3"))->verticalAlign('center'))
        ->addColumn(Tag::column()->weight($cardWeight[3])->width('weighted')->addElement(Tag::markdown("2markdown4"))->verticalAlign('center'))
        ->addColumn(Tag::column()->weight($cardWeight[4])->width('weighted')->addElement(Tag::markdown("2markdown5"))->verticalAlign('center'))
        ->addColumn(Tag::column()->weight($cardWeight[5])->width('weighted')->addElement(Tag::markdown("2markdown6"))->verticalAlign('center'))
);
$card->addElement(Tag::hr());
$card->addElement(
        Tag::note()->add(Tag::noteText('🕐' . date('Y-m-d H:i:s') . '    📝J9044024949393' )
        )
    );
```
![images/002.png](https://github.com/ritaswc/lark-card-message-builder/blob/main/images/002.png?raw=true)
