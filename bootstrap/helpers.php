<?php

/**
 * 将当前请求的路由名称转换为 CSS 类名称
 * @return array|string|string[]
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
