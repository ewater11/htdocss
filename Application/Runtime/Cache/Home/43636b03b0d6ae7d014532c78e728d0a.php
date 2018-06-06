<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<title>贵金属价格</title>
<style type="text/css">
body {
	margin-top: 0px;
}
</style>
  <link href="/Public/Css/style.css" rel="stylesheet" type="text/css" />
     <link href="/Public/Css/mypage.css" rel="stylesheet" type="text/css"/>

<link href="/Public/Css/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>


<body>
 <!--导航条-->
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo U('Index/show');?>">首页</a>
    </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo U('Kh/index');?>">客户管理<span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo U('Jg/index');?>">贵金属价格</a></li>
        <li><a href="<?php echo U('Jg/index');?>">打印</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">报表 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form action="<?php echo U('Jg/index');?>" method="get" class="navbar-form navbar-left">
        <input type="text" name="search" value="" size="18">
        <label>
            <div class="input-group" >                      
                    
          <select name="cxfs" id="cxfs">
            <option value="mhcx">模糊查询</option>
            <option value="jqcx">精确查询</option>
          </select>
          </div>
        </label>
        <input type="submit" value="搜索" class="btn btn-default"> 
      </form>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                      增加价格
                     </button>
     


<!--模态层 -->
<script src="https://code.jquery.com/jquery.js"></script>
<script src="/Public/bootstrap/js/bootstrap.min.js"> </script>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">增加价格</h4>
      </div>
      <div class="modal-body">
      
      <!--模态层 -->
      <form action="<?php echo U('Jg/add');?>" method="post" id="form1">  
        <table align="center" >
          <tr>
           <td >
            <div class="input-group">
                             <span class="input-group-addon" id="basic-addon1">日期</span>
                             <input name="riq" size="18" type="date" class="form-control " id="riq" placeholder="请输入日期"  value="<?php echo date("Y-m-d",intval(time())); ?>" > 
            </div>      
           <td >
             <div class="input-group">
                   <span class="input-group-addon" id="basic-addon1">铂</span>
                   <input name="pt" size="20" type="text" class="form-control " id="pt" placeholder="请输入铂价格" onkeyup="if(isNaN(value))execCommand('undo')" onafterpaste="if(isNaN(value))execCommand('undo')">  
     </div>
      
           </td>
         </tr>
         <tr>
           <td >
          <div class="input-group">
                             <span class="input-group-addon" id="basic-addon1">钯</span>
                             <input size="20" name="pd" class="form-control "  size="15" id="pd" placeholder="请输入钯价格" onkeyup="if(isNaN(value))execCommand('undo')" onafterpaste="if(isNaN(value))execCommand('undo')">
                </div> 
          
          
         </td>
           <td >
         <div class="input-group">
                             <span class="input-group-addon" id="basic-addon1">铑</span>
                             <input size="20" name="rh" class="form-control " size="15" id="rh" placeholder="请输入铑价格" onkeyup="if(isNaN(value))execCommand('undo')" onafterpaste="if(isNaN(value))execCommand('undo')">
     </div>
         </td></tr>
         <tr>
           <td >
          <div class="input-group">
                             <span class="input-group-addon" id="basic-addon1">铱</span>
                             <input size="20" name="yr" class="form-control " type="text" size="15" id="yr" placeholder="请输入铱价格" onkeyup="if(isNaN(value))execCommand('undo')" onafterpaste="if(isNaN(value))execCommand('undo')">
     </div>
       </td>
           <td ><div class="input-group" >
                             <span class="input-group-addon" id="basic-addon1">钌</span>
                             <input size="20" size="20"  name="ru" class="form-control " type="text" size="15" id="ru" placeholder="请输入钌价格" onkeyup="if(isNaN(value))execCommand('undo')" onafterpaste="if(isNaN(value))execCommand('undo')">
     </div></td>
         </tr>
         <tr>
           <td > <div class="input-group">
                             <span class="input-group-addon" id="basic-addon1">金</span>
                            <input size="20" name="gold" class="form-control " type="text" id="gold" placeholder="请输入金价格" size="15" onkeyup="if(isNaN(value))execCommand('undo')" onafterpaste="if(isNaN(value))execCommand('undo')"></div></td>
           <td ><div class="input-group">
                             <span class="input-group-addon" id="basic-addon1">1#银</span>
                             <input size="17.5" name="silver" class="form-control " type="text" id="silver" placeholder="请输入1#银价格" size="15" onkeyup="if(isNaN(value))execCommand('undo')" onafterpaste="if(isNaN(value))execCommand('undo')">
     </div></td>
           </tr>
         <tr>
           <td><div class="input-group">
                             <span class="input-group-addon" id="basic-addon1">2#银</span>
                             <input size="17.5" name="silver1" class="form-control " type="text" id="silver1" placeholder="请输入2#银价格" size="15" onkeyup="if(isNaN(value))execCommand('undo')" onafterpaste="if(isNaN(value))execCommand('undo')">
     </div></td>
           <td  ><div class="input-group">
                             <span class="input-group-addon" id="basic-addon1">金川铂</span>
                             <input size="16" name="jcpt" class="form-control " type="text" id="jcpt" size="15" placeholder="请输入金川铂价格" onkeyup="if(isNaN(value))execCommand('undo')" onafterpaste="if(isNaN(value))execCommand('undo')">
     </div></td>
         </tr>
         <tr>
           <td > <div class="input-group" item-width="100%">
                             <span class="input-group-addon" id="basic-addon1">金川钯</span>
                              <input size="16" name="jcpd" class="form-control " type="text" id="jcpd" size="15" placeholder="请输入金川钯价格" onkeyup="if(isNaN(value))execCommand('undo')" onafterpaste="if(isNaN(value))execCommand('undo')">
     </div></td>
           <td ></td>
         </tr>
         <tr>
           <td colspan="4" align="center" ><input  class="btn btn-primary" type="Submit" name="Submit"  value="增加"/> <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>  　</td>
         </tr>
      
     </table>
       </form>  

      <!--模态层 -->
      </div>
      <div class="modal-footer">
        此页面只能填入数字
      </div>
    </div>
  </div>
</div>
  
 <!--模态层 -->
 <ul class="nav navbar-nav navbar-right">
    <li><a href="<?php echo U('Kh/khedit');?>" >编辑</a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#">www</a></li>
        <li><a href="#">退出</a></li>
         <li role="separator" class="divider"></li>
        <li><a href="#">注销</a></li>
      </ul>
    </li>
  </ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
<!--导航条-->
</td></tr></table>

<table width="900" border="0" cellpadding="0" cellspacing="1"  align="center" class="table  table-hover table-bordered table-condensed" id="g_table">
 
 <tr align="center" class="info">
         
          <td width="6%" >&nbsp;</td>
          <td width="7%">日期 </td>
        <td width="7%" >黄金</td>
        <td width="7%">1#白银</td>
        <td width="6%" >2#白银</td>
        <td width="6%" >铂</td>
         <td width="6%" >金川铂</td>
        <td width="6%" >钌</td>
        <td width="6%" >铑</td>
        <td width="6%" >钯</td>
         <td width="6%" >金川钯</td>
        <td width="6%"  >铱</td>
        <td width="7%"  ><a href="<?php echo U('Jg/indexedit');?>"class="btn btn-info btn-xs">编辑</a></td>
        
                      </tr>
 

<?php if(is_array($select)): $i = 0; $__LIST__ = $select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$jg): $mod = ($i % 2 );++$i;?><tr  align="center">
                       <td > </td>                       
                        <td  class="active" ><?php echo ($jg["riq"]); ?></td>
                        <td ><?php echo ($jg["gold"]); ?></td>
                        <td class="active"><?php echo ($jg["silver"]); ?></td>
                        <td ><?php echo ($jg["silver1"]); ?></td>
                        <td class="active"><?php echo ($jg["pt"]); ?></td>
                        <td ><?php echo ($jg["jcpt"]); ?></td>
                        <td class="active"><?php echo ($jg["ru"]); ?></td>
                        <td  ><?php echo ($jg["rh"]); ?></td>
                        <td class="active"><?php echo ($jg["pd"]); ?></td>
                        <td ><?php echo ($jg["jcpd"]); ?></td>
                        <td  class="active"><?php echo ($jg["yr"]); ?></td>
                        <input type="hidden" name="id" value="<?php echo ($jg["id"]); ?>">
	<td  >                        
                        
                        
                       </td>
                        
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
 
     

<tr>
 <td colspan="14" align="right" bgcolor="#cccccc" class="pu">

</td>
 </tr>
  
      <tr class="content">
         <!--<td colspan="3" bgcolor="#FFFFFF"> <?php echo ($page); ?></td>-->
      <td colspan="14" bgcolor="#FFFFFF"><div class="pages" align="center">
             <?php echo ($page); ?>
        </div></td> 
      </tr>

</table>




</body>
<script>
var g_table = $("#g_table");
function add(){
var addRow = $("<tr></tr>");
 
g_table.append(addRow);
for(var i = 0;i <12;i++){
var col_td = $("<td><input type='text' /></td>");
addRow.append(col_td);
}
var col_opt = $("<td></td>");
var confirmBtn = $("<a href='javascript:;' class='btn btn-warning btn-xs active'>确认</a>");
var cancelBtn = $("<a href='javascript:;'class='btn btn-default btn-xs active'>取消</a>");
cancelBtn.click(function(){
window.location.reload();
});
confirmBtn.click(function(){
var currentRow = $(this).parent().parent();
var input_files = currentRow.find("input");
var post_files = {};
for(var i = 0 , j = input_files.length;i < j;i++){
post_files['clo_' + i] = input_files[i].value;
}
// $.post("<?php echo U('ajax/add');?>",post_files,function(msg){
// debugger;
// })
$.ajax({
type: 'post',
url : "<?php echo U('Jg/add');?>",
data: {post_files},
success:function(msg){
alert(msg);
window.location.reload();
}
})
});
col_opt.append(confirmBtn);
col_opt.append(cancelBtn);
addRow.append(col_opt);
}
function del(obj){
var id = $(obj).parent().prev().prev().val();
$.ajax({
type: 'post',
url: "<?php echo U('Jg/del');?>",
data: {id:id},
success:function(msg){
alert(msg);
}
})
$(obj).parent().parent().remove();
}
function edit(obj){
var id = $(obj).parent().prev().val();
for(var i = 1;i < 12;i++){
var temp = "<td align='center'><input  align='center' type='text' value='" + $(obj).parent().parent().children().eq(i).html() + "' size='6' ></td>";
$(obj).parent().parent().children().eq(i).replaceWith(temp);
}
var confirmBtn1 = $("<span id='confirm'class='btn btn-success btn-xs'>确认</span>");
var cancelBtn1 = $("<span onclick='back()' class='btn btn-default btn-xs'>取消</span>");
confirmBtn1.click(function(){
var currentRow = $(this).parent().parent();
var input_files = currentRow.find("input");
var post_files = {};
for(var i = 0 , j = input_files.length;i < j;i++){
post_files['clo_' + i] = input_files[i].value;
}
$.ajax({
type: 'post',
url : "<?php echo U('Jg/edit');?>",
data: {post_files:post_files,id:id},
success:function(msg){
alert(msg);
window.location.reload();
}
}) 
});
$(obj).prev().replaceWith(confirmBtn1);
$(obj).replaceWith(cancelBtn1);
 
}
function back(){
location.reload();
} 
</script>
</html>