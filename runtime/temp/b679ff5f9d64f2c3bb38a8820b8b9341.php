<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"G:\phpStudy\WWW\tpshop\public/../application/admin\view\content\tagsform.html";i:1566402851;s:71:"G:\phpStudy\WWW\tpshop\public/../application/admin\view\common\top.html";i:1566221248;}*/ ?>
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
<div class="layui-form" lay-filter="layuiadmin-form-tags" id="layuiadmin-app-form-tags" style="padding-top: 30px; text-align: center;">
    <div class="layui-form-item">
        <label class="layui-form-label">分类名</label>
        <div class="layui-input-inline">
            <input type="text" name="tags" lay-verify="required" placeholder="请输入..." autocomplete="off" class="layui-input">
        </div>
    </div>
</div>

<script src="__admin__/layuiadmin/layui/layui.js"></script>
<script>
    layui.config({
        base: '__admin__/layuiadmin/' //静态资源所在路径
    }).extend({
        index: 'lib/index' //主入口模块
    }).use(['index', 'form'], function(){
        var $ = layui.$
            ,form = layui.form ;
    })
</script>
</body>
</html>