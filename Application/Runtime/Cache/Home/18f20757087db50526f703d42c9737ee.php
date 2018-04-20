<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "HTML://www.w3.org/TR/xHTML1/DTD/xHTML1-transitional.dtd">  
<HTML xmlns="HTML://www.w3.org/1999/xHTML">  
<head>  
<meta HTML-equiv="Content-Type" content="text/HTML; charset=gb2312" />  
<meta name="author" content="wuleying">  
<title>双击文字后实现编辑文本功能</title>  
<style>  
input.t {border:1px solid #fff;background:#fff;}  
input.s {border:1px solid #369;background:#fff;}  
</style>  
</head>  
<body>  
<input class="t" id="test" readonly value="这里是标题,双击文字后实现编辑文本功能" /><input type="submit" value="修改" style="display:none;" id="submit" />  
<script type="text/javascript">  
var test = document.getElementById("test");  
var mysubmit = document.getElementById("submit");  
test.ondblclick = function()  
{  
this.readOnly = false;  
this.className = "s";  
mysubmit.style.display = "";  
}  
mysubmit.onclick = function()  
{  
test.readOnly = true;  
test.className = "t";  
this.style.display = "none";  
}  
</script>  
</body>  
</HTML>