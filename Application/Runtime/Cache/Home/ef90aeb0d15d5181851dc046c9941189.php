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
<table align="center" width="750">
	<tr><td>
	<form action="" method="get">
	  <input type="text" name="search" value="" size="18">
	  <label>
	      <select name="cxfs"  id="cxfs">
	        <option value="jqcx" >精确查询</option>
	        <option value="mhcx">模糊查询</option>
	       
          </select>
        </label>
	      <input type="submit" value="搜索">
	</form></td>
		<td align="right"><a href='<?php echo U('Index/show');?>'>价格跳转</a>
  <input class="btn-default" type="button" name="btn" id="btn" onclick="openDiv(document.getElementById('strHtml').innerHTML,500,200)" value="添加价格"/>
	
</td></tr></table>



<table width="900" border="0" cellpadding="0" cellspacing="1"  align="center" class="table table-bordered">
 
 <tr align="center" >
         
          <td width="6%" bgcolor="#CCCCCC" class="pu">&nbsp;</td>
          <td width="7%" bgcolor="#CCCCCC" class="pu">日期 </td>
        <td width="7%" bgcolor="#CCCCCC" class="pu">黄金</td>
        <td width="7%" bgcolor="#CCCCCC" class="pu">1#白银</td>
        <td width="6%" bgcolor="#CCCCCC" class="pu">2#白银</td>
        <td width="6%" bgcolor="#CCCCCC" class="pu">铂</td>
         <td width="6%" bgcolor="#CCCCCC" class="pu">金川铂</td>
        <td width="6%" bgcolor="#CCCCCC" class="pu">钌</td>
        <td width="6%" bgcolor="#CCCCCC" class="pu">铑</td>
        <td width="6%" bgcolor="#CCCCCC" class="pu">钯</td>
         <td width="6%" bgcolor="#CCCCCC" class="pu">金川钯</td>
        <td width="6%"  bgcolor="#CCCCCC" class="pu">铱</td>
        <td width="7%"  bgcolor="#CCCCCC" class="pu">编辑</td>
        <td width="5%"  bgcolor="#CCCCCC" class="pu">&nbsp;</td>
                      </tr>
 

<?php if(is_array($select)): $i = 0; $__LIST__ = $select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$jg): $mod = ($i % 2 );++$i;?><tr  align="center">
                       <td >&nbsp;</td>
                        <td  class="active" ><?php echo ($jg["riq"]); ?></td>
                        <td ><?php echo ($jg["gold"]); ?></td>
                        <td class="active"><?php echo ($jg["silver"]); ?></td>
                        <td ><?php echo ($jg["silver1"]); ?></td>
                        <td class="active"><?php echo ($jg["pd"]); ?></td>
                        <td ><?php echo ($jg["jcpt"]); ?></td>
                        <td class="active"><?php echo ($jg["ru"]); ?></td>
                        <td  ><?php echo ($jg["rh"]); ?></td>
                        <td class="active"><?php echo ($jg["pd"]); ?></td>
                        <td ><?php echo ($jg["jcpd"]); ?></td>
                        <td  class="active"><?php echo ($jg["yr"]); ?></td>
                        <td  ><a href="#" class="sorry" onclick="centerWindow('edit.php?id=<?php echo $row->ID;?>','','500','200','')" >修改</a>|<a href="#"  onclick="centerWindow('del.php?id=<?php echo $row->ID;?>','','550','200','')">删除</a></td>
                         <td >&nbsp;</td>
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
</html>