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
    <link rel="stylesheet" type="text/css" href="/Public/css/map.css">
    <link rel="stylesheet" type="text/css" href="/Public/commonLib/css/common/reset.css">
    <!-- @media css -->
    <link rel="stylesheet" type="text/css" href="/Public/commonLib/css/common/media.css">
    <title>地图页</title>
</head>

<body>
    <!-- 父容器 -->
    <div class="container">
        <!-- 搜索容器 -->  
        <form id="searchContainer" method="post" action="<?php echo U('/Admin/Index/map',array('name'=>$_GET['name']));?>">
        	<input name="res" type="hidden" value="麦当劳"></input>
        	<input name="branch" type="text" placeholder="请输入你想查询的餐厅"/>
            <button type="submit" class="submitBtn"></button>
        </form>
        <!-- 门店列表 -->
        <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="shopListContainer">
	            <div class="shopContent">
	                <div>
	                    <div>
	                    	<h3><?php echo ($vo['business_name']); ?>(<?php echo ($vo['branch_name']); ?>)</h3>
	                        <p>地址：<span class="shopAdd"><?php echo ($vo['province']); echo ($vo['city']); echo ($vo['district']); echo ($vo['address']); ?></span></p>
	                        <p class="shopPhone">电话：<span><?php echo ($vo['telephone']); ?></span></p>
	                    </div>
	                    <img src="">
	                </div>
	               		<a href="<?php echo U('getNumber',array('sid'=>$vo['sid']));?>">立即排队</a>
	            </div>
	        </div><?php endforeach; endif; else: echo "" ;endif; ?>
		<!-- 没有门店时显示提示 -->
        <div id="empty">
            <img src="/Public/commonLib/images/empty.png">
            <h3>暂无数据哦</h3>
        </div>
    </div>
    <!-- 外部库引用 -->
    <script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/1.9.0/jquery.min.js"></script>
    <script type="text/javascript">
        ;$(function (){
            var empty = $('#empty');
            if ($('#shopListContainer').length == 0) {
                empty.show();
            } else {
                empty.hide();
            }
        })
    </script>
</body>

</html>