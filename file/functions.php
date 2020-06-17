<?php

/**
 * Created by YLL Co Inc.
 * User: NiZerin
 * Email: nzl199851@163.com
 * Blog: nizer.in
 * Date: 6/17/2020
 * Time: 2:25 PM
 * FileName: functions.php
 */

if (!function_exists('html_charset')) {
    /**
     * @return array
     */
    function html_charset(): array
    {
        $data  = request()->post();

        foreach ($data as $k => $v) {
            $data[$k] = htmlspecialchars($v);
        }

        return $data;
    }
}
