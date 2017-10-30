<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" name="viewport">
    <!-- ios下删除默认的苹果工具栏和菜单栏 -->
    <meta content="yes" name="apple-mobile-web-app-capable">
    <!-- ios下控制状态栏显示样式，黑色 -->
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <!-- 电话号码非默认识别 -->
    <meta content="telephone=no" name="format-detection">
    <link rel="stylesheet" type="text/css" href="/Public/quanxian/css/gifeManage.css">
    <link rel="stylesheet" type="text/css" href="/Public/quanxian/css/reset.css">
    <!-- @media css -->
    <link rel="stylesheet" type="text/css" href="/Public/quanxian/css/media.css">
    <title>礼品管理</title>
</head>

<body>
<!-- 父容器 -->
<div class="container">
    <!-- 头部图片 -->
    <div id="imgContainer">
        <form action="<?php echo U('gift',array('sid'=>$sid));?>" method="post" id="form">
            <input type="text" placeholder="搜索礼品名称" name="gift_name" value=""/>
            <button type="submit"><img src="/Public/quanxian/img/search.png"></button>
        </form>
    </div>
    <!-- 礼品容器 -->
    <div id="gifeContainer">
        <?php if(is_array($data)): foreach($data as $key=>$vo): ?><div class="gifeContent">
                <img src="/Uploads<?php echo ($vo["gift_url"]); ?>" alt="礼品图片">
                <h3>礼品名称：<span><a href="<?php echo U('giftInfo',array('gift_id'=>$vo['gift_id'],'sid'=>$vo['sid']));?>"><?php echo ($vo["gift_name"]); ?></a></span></h3>
                <div>
                    <h3>所需积分：<span><?php echo ($vo["gift_bonus"]); ?></span>积分</h3>
                    <input type="hidden" name="gift_id" id="gift_id<?php echo ($vo["gift_id"]); ?>" value="<?php echo ($vo["gift_id"]); ?>"/>
                    <!--<a href="#" class="cancelGife">删除</a>-->
                    <a href="<?php echo U('deleteGift',array('gift_id'=>$vo['gift_id'],'sid'=>$vo['sid']));?>">删除</a>
                </div>
            </div><?php endforeach; endif; ?>
    </div>
    <!-- 尾部 -->
    <div id="footerHack"></div>
    <footer>
        <!--<button type="button" id="addGife">新增礼品</button>-->
        <!--<a href="<?php echo U('addGift',array('sid'=>$sid,'openid'=>$openid));?>" id="addGife">新增礼品</a>-->
        <a href="<?php echo U('addGift',array('sid'=>$sid,'openid'=>$openid));?>">新增礼品</a>
    </footer>
    <!-- 没有礼品时显示提示 -->
    <div id="empty">
        <img src="/Public/quanxian/img/empty.png">
        <h3>暂无数据哦</h3>
    </div>
    <!-- 确认删除弹窗 -->
    <div id="mask"></div>
    <div id="confirmWs">
        <div class="ws_head">
            <h3>您真的要删除么？</h3>
        </div>
        <div class="ws_body">
            <span class="true">确认</span>
            <span class="cancel">取消</span>
        </div>
    </div>
</div>
<!-- 外部库引用 -->
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" src="/Public/quanxian/js/gifeManage.js"></script>
</body>

</html>