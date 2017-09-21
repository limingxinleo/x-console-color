# X-Console-Color

## 安装
~~~
composer require limingxinleo/x-console-color
~~~

## 使用
~~~php
<?php

use Xin\Cli\Color;

echo Color::success("测试！！") . PHP_EOL;

echo Color::colorize('测试', Color::FG_RED) . PHP_EOL;

~~~