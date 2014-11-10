<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('zh_CN', array (
  'validators' => 
  array (
    'This value should be false.' => '该变量的值应为 false.',
    'This value should be true.' => '该变量的值应为 true.',
    'This value should be of type {{ type }}.' => '该变量的类型应为 {{ type }}.',
    'This value should be blank.' => '该变量值应为空.',
    'The value you selected is not a valid choice.' => '选定变量的值不是有效的选项.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => '您至少要选择 {{ limit }} 个选项.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => '您最多能选择 {{ limit }} 个选项.',
    'One or more of the given values is invalid.' => '一个或者多个给定的值无效.',
    'The fields {{ fields }} were not expected.' => '非预期字段 {{ fields }}.',
    'The fields {{ fields }} are missing.' => '遗漏字段 {{ fields }}.',
    'This value is not a valid date.' => '该值不是一个有效日期（date）.',
    'This value is not a valid datetime.' => '该值不是一个有效日期时间（datetime）.',
    'This value is not a valid email address.' => '该值不是一个有效邮件地址.',
    'The file could not be found.' => '文件未找到.',
    'The file is not readable.' => '文件不可读.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => '文件太大 ({{ size }} {{ suffix }}). 文件大小不可以超过 {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => '文件类型不合法 ({{ type }}). 合法的文件类型有 {{ types }}.',
    'This value should be {{ limit }} or less.' => '这个变量的值应该小于或等于 {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => '字符串太长， 长度不可超过 {{ limit }} 个字符.',
    'This value should be {{ limit }} or more.' => '该变量的值应该大于或等于 {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => '字符串太短， 长度不可少于 {{ limit }} 个字符.',
    'This value should not be blank.' => '该变量不应为空.',
    'This value should not be null.' => '该变量不应为 null.',
    'This value should be null.' => '该变量应为空 null.',
    'This value is not valid.' => '该变量值无效.',
    'This value is not a valid time.' => '该值不是一个有效时间.',
    'This value is not a valid URL.' => '该值不是一个有效的 URL 地址.',
    'The two values should be equal.' => '该两个变量的值应该相同.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => '文件太大， 文件大小不可以超过 {{ limit }} {{ suffix }}.',
    'The file is too large.' => '文件太大.',
    'The file could not be uploaded.' => '文件不可被上传.',
    'This value should be a valid number.' => '该值应该为有效的数字.',
    'This value is not a valid country.' => '该值不是有效的国家名.',
    'This file is not a valid image.' => '该文件不是有效的图片.',
    'This is not a valid IP address.' => '该值不是有效的IP地址.',
    'This value is not a valid language.' => '该值不是有效的语言名.',
    'This value is not a valid locale.' => '该值不是有效的区域值.',
    'This value is already used.' => '该值已经被使用了.',
    'The size of the image could not be detected.' => '不能解析图片大小.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => '图片太宽 ({{ width }}px)，最大宽度为 {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => '图片宽度不够 ({{ width }}px)，最小宽度为 {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => '图片太高 ({{ height }}px)，最大高度为 {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => '图片高度不够 ({{ height }}px)，最小高度为 {{ min_height }}px.',
    'This value should be the user current password.' => '该变量应为用户当前的密码.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => '该变量应为 {{ limit }} 个字符.',
    'The file was only partially uploaded.' => '该文件的上传不完整.',
    'No file was uploaded.' => '没有上传任何文件.',
    'No temporary folder was configured in php.ini.' => 'php.ini里没有配置临时文件目录.',
    'Cannot write temporary file to disk.' => '临时文件写入磁盘失败.',
    'A PHP extension caused the upload to fail.' => '某个PHP扩展造成上传失败.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => '该集合最少应包含 {{ limit }} 个元素.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => '该集合最多包含 {{ limit }} 个元素.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => '该集合应包含正好 {{ limit }} 个元素element.',
    'Invalid card number.' => '无效的信用卡号.',
    'Unsupported card type or invalid card number.' => '不支持的信用卡类型或无效的信用卡号.',
    'This form should not contain extra fields.' => '该表单中不可有额外字段.',
    'The uploaded file was too large. Please try to upload a smaller file.' => '上传文件太大， 请重新尝试上传一个较小的文件.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF 验证符无效， 请重新提交.',
  ),
  'messages' => 
  array (
    'Bad credentials' => '帐号或密码不正确',
    'User account is locked.' => '帐号已经被封禁，无法登录。',
    'Your session has timed out, or you have disabled cookies.' => '您的会话已过期或者您的浏览器禁止了cookies。',
  ),
));

$catalogueZh = new MessageCatalogue('zh', array (
));
$catalogue->addFallbackCatalogue($catalogueZh);


return $catalogue;
