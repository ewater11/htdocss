<?php if (!defined('THINK_PATH')) exit();?><html>
<head>

	<link href="../css/mo.css" rel="stylesheet" type="text/css">
</head>
<body><?php
 require("../js/func.php"); require("../Connections/conn.php"); $gd=inputck($_GET['id']); $sql="select * from jg where ID ='$gd'"; $result = $conn->query($sql); $row = $result->fetch_assoc(); ?>
 <form action="editcheck.php" method="post" >  
  <table width="400" border="0" align="center" cellspacing="1" bgcolor="#000000">
  <tbody>
   <tr>
   	<td colspan="4" align="center" valign="middle" bgcolor="#ffffff" class="bt">
   	  价格修改
 	  </td>
      </tr>
    <tr>
      <td width="67" align="center" bgcolor="#6699CC" class="dhl">日期</td>
      <td width="125" bgcolor="#ffffff"><input name="riq" type="date" size="15" id="riq" value="<?PHP echo $row["riq"];?>"></td>
      <td width="59" align="center" bgcolor="#6699CC" class="dhl">铂</td>
      <td width="136" bgcolor="#ffffff"><input name="pt" type="text" size="15" id="pt" value="<?PHP echo $row["pt"];?>"/></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#6699CC" class="dhl">钯</td>
      <td bgcolor="#ffffff"><input name="pd"  size="15" id="pd" value="<?PHP echo $row["pd"];?>"/></td>
      <td align="center" bgcolor="#6699CC" class="dhl">铑</td>
      <td bgcolor="#ffffff"><input name="rh" size="15" id="rh" value="<?PHP echo $row["rh"];?>"/></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#6699CC" class="dhl">铱</td>
      <td bgcolor="#ffffff"><input name="yr" type="text" size="15" id="yr" value="<?PHP echo $row["yr"];?>"/></td>
      <td align="center" bgcolor="#6699CC" class="dhl">钌</td>
      <td bgcolor="#ffffff"><input name="ru" type="text" size="15" id="ru" value="<?PHP echo $row["ru"];?>"/></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#6699CC" class="dhl">金</td>
      <td bgcolor="#ffffff"><input name="gold" type="text" id="gold" size="15" value="<?PHP echo $row["gold"];?>"></td>
      <td align="center" bgcolor="#6699CC" class="dhl">1#银</td>
      <td bgcolor="#ffffff"><input name="silver" type="text" id="silver" size="15" value="<?PHP echo $row["silver"];?>"></td>
      </tr>
    <tr>
      <td align="center" bgcolor="#6699CC" class="dhl">2#银</td>
      <td bgcolor="#ffffff"><input name="silver1" type="text" id="silver1" size="15" value="<?PHP echo $row["silver1"];?>"></td>
      <td align="center" bgcolor="#6699CC" class="dhl">金川铂</td>
      <td bgcolor="#ffffff"><input name="jcpt" type="text" id="jcpt" size="15" value="<?PHP echo $row["jcpt"];?>"></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#6699CC" class="dhl">金川钯</td>
      <td bgcolor="#ffffff"><input name="jcpd" type="text" id="jcpd" size="15" value="<?PHP echo $row["jcpd"];?>"></td>
      <td bgcolor="#ffffff"></td>
      <td bgcolor="#ffffff"><input name="id" type="hidden" id="id" size="15" value="<?php echo $row["ID"]; ?>"></td>
    </tr>
    <tr>
      <td colspan="4" align="center" bgcolor="#ffffff"><input type="Submit" name="Submit" value="修改"/></td>
    </tr>
  </tbody>
</table>
  <br/>
  <br/>
   <br/>
</form> <?php $conn->close();?>
</body>
</html>