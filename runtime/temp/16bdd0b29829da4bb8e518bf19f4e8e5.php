<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"G:\phpStudy\WWW\tpshop\public/../application/admin\view\message\index.html";i:1566402111;s:71:"G:\phpStudy\WWW\tpshop\public/../application/admin\view\common\top.html";i:1566221248;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>郝勇的后台</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="__admin__/layuiadmin/layui/css/layui.css" media="all">
  <link rel="stylesheet" href="__admin__/layuiadmin/style/admin.css" media="all">
  
  <script>
  /^http(s*):\/\//.test(location.href) || alert('请先部署到 localhost 下再访问');
  </script>
</head>
<body>
<div class="layui-fluid" id="LAY-app-message">
    <div class="layui-card">
        <div class="layui-tab layui-tab-brief">
            <ul class="layui-tab-title">
                <li class="layui-this">全部消息</li>
                <li>通知<span class="layui-badge">6</span></li>
                <li>私信</li>
            </ul>
            <div class="layui-tab-content">

                <div class="layui-tab-item layui-show">
                    <div class="LAY-app-message-btns" style="margin-bottom: 10px;">
                        <button class="layui-btn layui-btn-primary layui-btn-sm" data-type="all" data-events="del">删除</button>
                        <button class="layui-btn layui-btn-primary layui-btn-sm" data-type="all" data-events="ready">标记已读</button>
                        <button class="layui-btn layui-btn-primary layui-btn-sm" data-type="all" data-events="readyAll">全部已读</button>
                    </div>

                    <table id="LAY-app-message-all" lay-filter="LAY-app-message-all"></table>
                </div>
                <div class="layui-tab-item">

                    <div class="LAY-app-message-btns" style="margin-bottom: 10px;">
                        <button class="layui-btn layui-btn-primary layui-btn-sm" data-type="notice" data-events="del">删除</button>
                        <button class="layui-btn layui-btn-primary layui-btn-sm" data-type="notice" data-events="ready">标记已读</button>
                        <button class="layui-btn layui-btn-primary layui-btn-sm" data-type="notice" data-events="readyAll">全部已读</button>
                    </div>

                    <table id="LAY-app-message-notice" lay-filter="LAY-app-message-notice"></table>
                </div>
                <div class="layui-tab-item">

                    <div class="LAY-app-message-btns" style="margin-bottom: 10px;">
                        <button class="layui-btn layui-btn-primary layui-btn-sm" data-type="direct" data-events="del">删除</button>
                        <button class="layui-btn layui-btn-primary layui-btn-sm" data-type="direct" data-events="ready">标记已读</button>
                        <button class="layui-btn layui-btn-primary layui-btn-sm" data-type="direct" data-events="readyAll">全部已读</button>
                    </div>

                    <table id="LAY-app-message-direct" lay-filter="LAY-app-message-direct"></table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="__admin__/layuiadmin/layui/layui.js"></script>
<script>
    layui.config({
        base: '__admin__/layuiadmin/' //静态资源所在路径
    }).extend({
        index: 'lib/index' //主入口模块
    }).use(['index', 'message']);
</script>
</body>
</html>