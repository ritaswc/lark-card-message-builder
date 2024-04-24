# lark-card-message-builder

Lark/飞书，机器人消息，卡片消息构建工具

## 官方文档
[点我跳转到：飞书开放平台 - 消息卡片概述](https://open.feishu.cn/document/common-capabilities/message-card/introduction-of-message-cards)

## 使用示例

### 基本字段提醒
```php

$cardMessageBuilder = (new CardMessageBuilder('【待审核】4532-有新的资质报告申请提交'))
            ->template('blue')
            ->addElement(Tag::divMarkdown('**门店所在区域: **上海市-上海市-松江区'))
            ->addElement(Tag::divMarkdown('**门店编号: **8888'))
            ->addElement(Tag::divMarkdown('**提交时间: **2024-01-25 09:29:36'))
            ->addElement(Tag::divMarkdown('**督导: **隔壁老李'))
            ->addElement(Tag::actions()->addAction(
                Tag::button()->text('点击查看')->url('https://www.baidu.com')->type('primary')
            ));
$cardBodyArray = $cardMessageBuilder->build();
file_put_contents('aaa.json', json_encode($cardBodyArray));

```
![images/001.png](https://github.com/ritaswc/lark-card-message-builder/blob/main/images/001.png?raw=true)