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
<script type="text/JavaScript">
function centerWindow(theURL,winName,width,height,features) {

    var window_width = width;
    var window_height = height;
    var edfeatures= features;
    var window_top = (screen.height-window_height)/2;
    var window_left = (screen.width-window_width)/2;
    newWindow=window.open(''+ theURL + '',''+ winName + '','width=' + window_width + ',height=' + window_height + ',top=' + window_top + ',left=' + window_left + ',features=' + edfeatures + '');
    newWindow.focus();
}
//-->
</script>
</head>
<body>
<table align="center" width="750">
	<tr><td>
	<form action="<?php echo U('Jg/index');?>" method="get">
	  <input type="text" name="search" value="" size="18">
	  <label>
	      <select name="cxfs"  id="cxfs">
	        <option value="jqcx" >精确查询</option>
	        <option value="mhcx">模糊查询</option>
	       
          </select>
        </label>
	      <input type="submit" value="搜索">
	</form></td>
		<td align="right">
  
  
  
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
  <table width="400" border="0" align="center" cellspacing="1" bgcolor="#000000">
  
     <tr>
      <td width="67" align="center" bgcolor="#6699cc" class="dhl">日期</td>
      <td width="125" bgcolor="#ffffff"><input name="riq" type="date" size="15" id="riq" value="<?php echo date("Y-m-d",intval(time())); ?>" /></td>
      <td width="59" align="center" bgcolor="#6699cc" class="dhl">铂</td>
      <td width="136" bgcolor="#ffffff"><input name="pt" type="text" size="15" id="pt"/></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#6699cc" class="dhl">钯</td>
      <td bgcolor="#ffffff"><input name="pd"  size="15" id="pd"/></td>
      <td align="center" bgcolor="#6699cc" class="dhl">铑</td>
      <td bgcolor="#ffffff"><input name="rh" size="15" id="rh"/></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#6699cc" class="dhl">铱</td>
      <td bgcolor="#ffffff"><input name="yr" type="text" size="15" id="yr"/></td>
      <td align="center" bgcolor="#6699cc" class="dhl">钌</td>
      <td bgcolor="#ffffff"><input name="ru" type="text" size="15" id="ru"/></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#6699cc" class="dhl">金</td>
      <td bgcolor="#ffffff"><input name="gold" type="text" id="gold" size="15"></td>
      <td align="center" bgcolor="#6699cc" class="dhl">1#银</td>
      <td bgcolor="#ffffff"><input name="silver" type="text" id="silver" size="15"></td>
      </tr>
    <tr>
      <td align="center" bgcolor="#6699cc" class="dhl">2#银</td>
      <td bgcolor="#ffffff"><input name="silver1" type="text" id="silver1" size="15"></td>
      <td align="center" bgcolor="#6699cc" class="dhl" >金川铂</td>
      <td bgcolor="#ffffff"><input name="jcpt" type="text" id="jcpt" size="15"></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#6699cc" class="dhl">金川钯</td>
      <td bgcolor="#ffffff"><input name="jcpd" type="text" id="jcpd" size="15"></td>
      <td bgcolor="#6699cc">&nbsp;</td>
      <td bgcolor="#ffffff">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4" align="center" bgcolor="#ffffff"><input  class="btn btn-primary" type="Submit" name="Submit" value="添加"/>　　　　　　<input  class="btn btn-default" type="reset"></td>
    </tr>
 
</table>
  </form>  

      <!--模态层 -->
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
  
 <!--模态层 -->
  
  
  
  
  
  
	
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
                       <td ><input type="hidden" value="<?php echo ($jg["id"]); ?>" name="showid"></td>
                       
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
                        <td  ><a href="" class="btn btn-primary btn-xs" onclick="centerWindow('/Jg/edit/id/<?php echo ($jg["id"]); ?>','','500','200','')" >修改</a>|
                        
                        
                        
                       
  <!-- Button trigger modal -->
  
  <script>
    $(function() {
        $("button[type=button1]").on("click", function() {
            $.ajax({
                type: "POST",
                url:"<?php echo U('Jg/show');?>",
                data: {
                    id: $("input[name=showid]").val(),
                    
                },
                success: function($data) {
                    $("#content").html($data.info);
                }
            });
            return false;
        });
    });
</script>
<button type="button1" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal1">
 删除
</button>

<!--模态层 -->
   
 
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
        <a href="#" class="modal-title" onclick="centerWindow('','','550','300','')" id="myModalLabel">删除</a>
      </div>
      <div class="modal-body">
      
      <!--模态层 -->
    <form action="<?php echo U('Jg/del/id/[$jg.id]');?>" method="post" id="form2">  
  <table width="400" border="0" align="center" cellspacing="1" bgcolor="#000000">
  <tbody>
   
      
    <tr>
      <td width="67" align="center" bgcolor="#6699CC" class="dhl">日期</td>
      <td width="125" bgcolor="#ffffff"><?php echo ($data["riq"]); echo ($jgid); ?></td>
      <td width="59" align="center" bgcolor="#6699CC" class="dhl">铂</td>
      <td width="136" bgcolor="#ffffff"><?php echo ($data["pt"]); ?></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#6699CC" class="dhl">钯</td>
      <td bgcolor="#ffffff"></td>
      <td align="center" bgcolor="#6699CC" class="dhl">铑</td>
      <td bgcolor="#ffffff"></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#6699CC" class="dhl">铱</td>
      <td bgcolor="#ffffff"></td>
      <td align="center" bgcolor="#6699CC" class="dhl">钌</td>
      <td bgcolor="#ffffff"></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#6699CC" class="dhl">金</td>
      <td bgcolor="#ffffff"></td>
      <td align="center" bgcolor="#6699CC" class="dhl">1#银</td>
      <td bgcolor="#ffffff"></td>
      </tr>
    <tr>
      <td align="center" bgcolor="#6699CC" class="dhl">2#银</td>
      <td bgcolor="#ffffff"></td>
      <td align="center" bgcolor="#6699CC" class="dhl">金川铂</td>
      <td bgcolor="#ffffff"></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#6699CC" class="dhl">金川钯</td>
      <td bgcolor="#ffffff"></td>
      <td bgcolor="#ffffff"></td>
      <td bgcolor="#ffffff"></td>
    </tr>
    <tr>
      <td colspan="4" align="center" bgcolor="#ffffff"><input type="Submit" name="Submit" value="删除"/><p id="content"></p></td>
    </tr>
  </tbody>
</table>
  </form>  

      <!--模态层 -->
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
  
 <!--模态层 --> 
                        
                        
                       </td>
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