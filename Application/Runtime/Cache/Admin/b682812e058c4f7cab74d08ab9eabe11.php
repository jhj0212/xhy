<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" name="viewport">
    <!-- ios下删除默认的苹果工具栏和菜单栏 -->
    <meta content="yes" name="apple-mobile-web-app-capable">
    <!-- ios下控制状态栏显示样式，黑色 -->
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <!-- 电话号码非默认识别 -->
    <meta content="telephone=no" name="format-detection">
    <link rel="stylesheet" type="text/css" href="/Public/quanxian/css/memberManage.css">
    <link rel="stylesheet" type="text/css" href="/Public/quanxian/css/reset.css">
    <!-- @media css -->
    <link rel="stylesheet" type="text/css" href="/Public/quanxian/css/media.css">
    <title>管理员中心</title>
</head>
<body>
    <!-- 父容器 -->
    <div class="container">
        <!-- 图片容器 -->
        <div id="imgContainer">
            <img src="/Public/quanxian/img/manageBg.png">
        </div>
        <!-- 信息容器 -->
        <div id="msgContainer">
            <a href="<?php echo U('admin',array('sid'=>'0000000001','openid'=>$openid));?>">
                <div>
                    <img src="/Public/quanxian/img/manage_1.png">
                    <span>权限分配</span>
                </div>
            </a>
            <a href="<?php echo U('addStaff',array('sid'=>'0000000001','openid'=>$openid));?>">
                <div>
                    <img src="/Public/quanxian/img/manage_8.png">
                    <span>添加人员</span>
                </div>
            </a>
            <a href="<?php echo U('seat',array('sid'=>'0000000001','id'=>1,'openid'=>$openid));?>">
                <div>
                    <img src="/Public/quanxian/img/manage_2.png">
                    <span>餐位管理</span>
                </div>
            </a>
            <a href="<?php echo U('report',array('sid'=>'0000000001','openid'=>$openid));?>">
                <div>
                    <img src="/Public/quanxian/img/manage_5.png">
                    <span>预订报表</span>
                </div>
            </a>
            <a href="<?php echo U('staff',array('sid'=>'0000000001','openid'=>$openid));?>">
                <div>
                    <img src="/Public/quanxian/img/manage_4.png">
                    <span>员工信息</span>
                </div>
            </a>
            <a href="<?php echo U('revenue',array('sid'=>'0000000001','openid'=>$openid));?>">
                <div>
                    <img src="/Public/quanxian/img/manage_3.png">
                    <span>线上收益</span>
                </div>
            </a>
            <a href="<?php echo U('gift',array('sid'=>'0000000001','openid'=>$openid));?>">
                <div>
                    <img src="/Public/quanxian/img/manage_6.png">
                    <span>礼品管理</span>
                </div>
            </a>
            <a href="<?php echo U('foods',array('sid'=>'0000000001','openid'=>$openid));?>">
                <div>
                    <img src="/Public/quanxian/img/manage_7.png">
                    <span>菜品管理</span>
                </div>
            </a>
        </div>
    </div>
    <!-- 外部库引用 -->
    <!--<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/1.9.0/jquery.min.js"></script>-->
</body>
</html>