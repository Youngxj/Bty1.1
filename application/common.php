<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

/**
 * 判断是否包含字符串
 * @param  [type]  $key 长内容
 * @param  [type]  $con 关键字
 * @return boolean      [description]
 */
function isHave($key, $con)
{
    if (strpos($key, $con) !== false) {
        return true;
    } else {
        return false;
    }
}