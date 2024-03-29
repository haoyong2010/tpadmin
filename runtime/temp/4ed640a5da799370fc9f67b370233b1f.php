<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"G:\phpStudy\WWW\tpshop\public/../application/index\view\captcha\index.html";i:1478505472;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>验证码示例</title>
<script src="/static/jquery-1.10.2.min.js"></script>
<style>
body {
    font-family:"Microsoft Yahei","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size:16px;
    padding:5px;
}
.form{
    padding: 15px;
    font-size: 16px;
}

.form .text {
    padding: 3px;
    margin:2px 10px;
    width: 240px;
    height: 24px;
    line-height: 28px;
    border: 1px solid #D4D4D4;
}
.form .btn{
    margin:6px;
    padding: 6px;
    width: 120px;

    font-size: 16px;
    border: 1px solid #D4D4D4;
    cursor: pointer;
    background:#eee;
}
a{
    color: #868686;
    cursor: pointer;
}
a:hover{
    text-decoration: underline;
}
h2{
    color: #4288ce;
    font-weight: 400;
    padding: 6px 0;
    margin: 6px 0 0;
    font-size: 28px;
    border-bottom: 1px solid #eee;
}
div{
    margin:8px;
}
.info{
    padding: 12px 0;
    border-bottom: 1px solid #eee;
}

.copyright{
    margin-top: 24px;
    padding: 12px 0;
  border-top: 1px solid #eee;
}
</style>
</head>
<body>
<h2>验证码示例</h2>
<FORM method="post" class="form" action="<?php echo url('check'); ?>">
输入验证码：<INPUT type="text" class="text" name="code"><br/>
<div id="captcha_image"><?php echo captcha_img(); ?></div>
<INPUT type="submit" class="btn" value=" 提交 ">
</FORM>
    <div class="copyright">
        <a title="官方网站" href="http://www.thinkphp.cn">ThinkPHP</a> 
        <span>V5</span> 
        <span>{ 十年磨一剑-为API开发设计的高性能框架 }</span>
    </div>
</body>
</html>
<script>
    $('#captcha_image').click(function(){
        $(this).find('img').attr('src','/captcha.html?r='+Math.random());
    });
    
</script>