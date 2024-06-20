<?php

// namespace AesirxAnalytics\Mysql;

use AesirxAnalytics\MysqlHelper;

Class AesirX_Analytics_Get_All_Browser_Versions extends MysqlHelper
{
    function aesirx_analytics_mysql_execute($params = [])
    {
        return parent::get_statistics_per_field_wp(
            ['#__analytics_visitors.browser_version'],
            [],
            $params
        );
    }
}
