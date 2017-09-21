<?php
// +----------------------------------------------------------------------
// | test.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
require_once __DIR__ . '/../vendor/autoload.php';

use Xin\Cli\Color;

echo Color::success("测试！！") . PHP_EOL;

echo Color::colorize('测试', Color::FG_RED) . PHP_EOL;