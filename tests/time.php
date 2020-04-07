<?php

// +----------------------------------------------------------------------
// | 时间助手
// +----------------------------------------------------------------------
// | 版权所有 2017~2020 [ https://www.dtapp.net ]
// +----------------------------------------------------------------------
// | 官方网站: https://gitee.com/liguangchun/timer
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | gitee 仓库地址 ：https://gitee.com/liguangchun/timer
// | github 仓库地址 ：https://github.com/GC0202/timer
// | Packagist 地址 ：https://packagist.org/packages/liguangchun/timer
// +----------------------------------------------------------------------

use DtApp\Timer\Time;

require_once '../vendor/autoload.php';

// 当前时间
var_dump(Time::getData());

// 当前时间戳
var_dump(Time::getTime());