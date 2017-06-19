<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/16
 * Time: 15:15
 */
require "SenMail.php";
$e = new SenMail();
$toEmail = array('xxxx@163.com','xxxxx@qq.com');
$e->sendMail($toEmail,'陈子程','测试2号','我是内容');










