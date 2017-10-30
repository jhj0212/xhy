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
    <link rel="stylesheet" type="text/css" href="/Public/css/numberSuccess.css">
    <link rel="stylesheet" type="text/css" href="/Public/commonLib/css/common/reset.css">
    <!-- @media css -->
    <link rel="stylesheet" type="text/css" href="/Public/commonLib/css/common/media.css">
    <title>排号成功</title>
</head>

<body>
    <!-- 父容器 -->
    <div class="container">
        <!-- 各种信息容器 -->
        <div id="msgContainer">
            <!-- 头部一栏数据 -->
            <div class="msg_header">
                <div class="msg_header_content">
                    <span>前面等待</span>
                    <div>
                        <img src="/Public/images/orderSuccess/people.png">
                        <p><?php echo ($wait_num); ?><span>桌</span></p>
                    </div>
                </div>
                <div class="msg_header_content">
                    <span>预计等待</span>
                    <div>
                        <img src="/Public/images/orderSuccess/time.png">
                        <p><?php echo ($waitingtime["waitingtime"]); ?><span>分钟</span></p>
                    </div>
                </div>
                <div class="msg_header_content msg_header_content_last">
                
                    <h3><?php echo ($queue_no); ?></h3>
                </div>
            </div>
            <!-- 4个按键容器 -->
            <div class="msg_btn">
                <div class="msg_btn_content">
                    <img src="/Public/images/orderSuccess/fuli.png" alt="等待福利">
                    <span id="welfare">等待福利</span>
                </div>
                <div class="msg_btn_content">
                    <img src="/Public/images/orderSuccess/beicai.png" alt="预约备菜">
                    <span id="menu">菜单浏览</span>
                </div>
                <div class="msg_btn_content">
                    <img src="/Public/images/orderSuccess/quxiao.png" alt="取消排队">
                    <span id="cancel">取消排队</span>
                </div>
                <div class="msg_btn_content">
                    <img src="/Public/images/orderSuccess/paidui.png" alt="排队中">
                    <span id="queue">排队中</span>
                </div>
            </div>
        </div>
        <!-- 图片容器 -->
        <div id="imgContainer">
            <img src="/Public/images/orderSuccess/food.png">
        </div>
    </div>
    <!-- 外部库引用 -->
    <script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/1.9.0/jquery.min.js"></script>
    <script>
    ;$(function(){
    	var cancel = $("#cancel"),
    		queue = $("#queue"),
    		menu = $("#menu"),
    		welfare = $("#welfare");
    	var cancelUrl = "<?php echo U("/Admin/Index/numberCancel");?>",
    		menuUrl = "<?php echo U("/Admin/Index/numberFoods");?>",
    		welfareUrl = "<?php echo U("/Admin/Index/game");?>";
    	function onHref(id,url){
        	id.on("click",function(){
        		window.location.href=url;
        	})	
    	}
    	onHref(cancel,cancelUrl);
    	onHref(menu,menuUrl);
    	onHref(welfare,welfareUrl);
    })
    </script>
</body>

</html>