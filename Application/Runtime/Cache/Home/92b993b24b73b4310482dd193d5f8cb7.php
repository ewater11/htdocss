<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>客户管理</title>
  <style type="text/css">
    body {
      margin-top: 0px;
    }
  </style>
  <link href="/Public/Css/style.css" rel="stylesheet" type="text/css" />
  <link href="/Public/Css/mypage.css" rel="stylesheet" type="text/css" />
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
              <li class="active"><a href="<?php echo U('Xg/index');?>">客户管理<span class="sr-only">(current)</span></a></li>
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
            <form action="<?php echo U('Xg/index');?>" method="get" class="navbar-form navbar-left">
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
            增加客户
          </button>
            <!--模态层 -->
          <script src="https://code.jquery.com/jquery.js"></script>
          <script src="/Public/bootstrap/js/bootstrap.min.js"> </script>  
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel">增加客户</h4>
                </div>
                <div class="modal-body">  
                  <!--模态层 -->
                  <form action="<?php echo U('Xg/add');?>" method="post" id="form1">
                    <table>
                        <tr>
                        <td align="center">
                          <table>
                            <tr align="center">
                              <td colspan="2" align="center">
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">名称：</span>
                                  <input type="text" name="k_m" class="form-control" placeholder="客户名称" aria-describedby="basic-addon1" size="100%">
                                </div>
                              </td>
                            </tr>
                            <tr align="center">
                              <td colspan="2" align="center">
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">地址：</span>
                                  <input type="text" name="k_shdz" class="form-control" placeholder="客户地址" aria-describedby="basic-addon1" size="100%">
                                </div>
                              </td>
                            </tr>
                            <tr align="center">
                              <td colspan="2" align="center"><div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">收货单位名称：</span>
                                  <input type="text" name="k_shm" class="form-control" placeholder="收货单位名称" aria-describedby="basic-addon1" size="100%">
                                </div></td>
                            </tr>
                            <tr align="center">
                              <td height="27" align="center">
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">联系人：</span>
                                  <input type="text" name="k_lxr" class="form-control" placeholder="联系人" aria-describedby="basic-addon1" size="100%">
                                </div>
                              </td>
  
                              <td>
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">电话：</span>
                                  <input type="text" name="k_tel" class="form-control" placeholder="电话" aria-describedby="basic-addon1" size="100%">
                                </div>
                              </td>
  
                            </tr>
                            <tr align="center">
                              <td height="27" align="center">
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">手机：</span>
                                  <input type="text" name="k_sj" class="form-control" placeholder="手机" aria-describedby="basic-addon1" size="100%">
                                </div>
                              </td>
  
                              <td>
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">传真：</span>
                                  <input type="text" name="k_fax" class="form-control" placeholder="传真" aria-describedby="basic-addon1" size="100%">
                                </div>
                              </td>
  
                            </tr>
                            <tr align="center">
                              <td height="13" align="center">
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">邮政编码：</span>
                                  <input type="text" name="k_yb" class="form-control" placeholder="邮政编码" aria-describedby="basic-addon1" size="100%">
                                </div>
                              </td>
  
                              <td bgcolor="#FFFFFF" align="left">
                                <div class="input-group" >
                                  <span class="input-group-addon" id="basic-addon1">货运方式：</span>
                                  <form role="form" >
                                      <div class="form-group">
                                         <select class="form-control" id="hyfs">
                                          <option value="顺丰">顺丰</option>
                                          <option value="自提">自提</option>
                                          <option value="顺丰航空">顺丰航空</option>                                         
                                        </select>
                                       </div>
                                    </form>
                                   </div>
                              </td>
  
                            </tr>
                            <tr align="center">
                              <td height="13" align="center">
                                <div class="input-group">
                                  <span class="input-group-addon" id="sizing-addon2">收货地：</span>
                                  <input type="text" name="k_shdq" class="form-control" placeholder="收货地" aria-describedby="sizing-addon2" size="100%">
                                </div>
                              </td>
  
                              <td>
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">回款方式：</span>
                                  <input type="text" name="k_hkfs" class="form-control" placeholder="回款方式" aria-describedby="basic-addon1" size="100%">
                                </div>
                              </td>
  
                            </tr>
                             <tr align="center">
                              <td height="13" align="center">
                                <div class="input-group">
                                  <span class="input-group-addon" id="sizing-addon2">Email：</span>
                                  <input type="text" name="k_email" class="form-control" placeholder="Email" aria-describedby="sizing-addon2" size="100%">
                                </div>
                              </td>
  
                              <td>
                                
                              </td>
  
                            </tr>
                            <tr>
                              <td height="27" colspan="2" align="center">
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">备注：</span>
                                  <input type="text" name="k_bz" class="form-control" placeholder="备注" aria-describedby="basic-addon1" size="100%">
                                </div>
                              </td>
                            </tr>
                          </table>
                          <table width="60%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td height="40" align="center">
                                <input type="submit" name="Submit" value=" 提 交 " /> </td>
                            </tr>
                          </table>
  
                          <input name="hiddenField2" type="hidden" id="hiddenField2" value="" />
                        </td>
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
  <div class="table-responsive">
    <table   align="center" class="table  table-hover" id="g_table">
      <tr align="center">
        <td width="15%" bgcolor="#CCCCCC" >客户名称</td>
        <td width="7%" bgcolor="#CCCCCC" >手机</td>
        <td width="7%" bgcolor="#CCCCCC" >联系人</td>
        <td width="6%" bgcolor="#CCCCCC" >电话</td>
        <td width="7%" bgcolor="#CCCCCC" >收货地区</td>
              </tr>
      <?php if(is_array($select)): $i = 0; $__LIST__ = $select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center">
          <td><?php echo ($vo["k_m"]); ?></td>
          <td><?php echo ($vo["k_sj"]); ?></td>
          <td><?php echo ($vo["k_lxr"]); ?></td>
          <td><?php echo ($vo["k_tel"]); ?></td>
          <input type="hidden" name="id" value="<?php echo ($vo["k_id"]); ?>">
          <td><?php echo ($vo["k_shdq"]); ?></td>
                 </tr><?php endforeach; endif; else: echo "" ;endif; ?>



      <tr>
        <td colspan="14" align="right" bgcolor="#cccccc" class="pu">

        </td>
      </tr>

      <tr class="content">
        <!--<td colspan="3" bgcolor="#FFFFFF"> <?php echo ($page); ?></td>-->
        <td colspan="14" bgcolor="#FFFFFF">
          <div class="pages" align="center">
            <?php echo ($page); ?>
          </div>
        </td>
      </tr>

    </table>
  </div>



</body>
<script>
  var g_table = $("#g_table");
  function add() {
    var addRow = $("<tr></tr>");

    g_table.append(addRow);
    for (var i = 0; i < 12; i++) {
      var col_td = $("<td><input type='text' /></td>");
      addRow.append(col_td);
    }
    var col_opt = $("<td></td>");
    var confirmBtn = $("<a href='javascript:;' class='btn btn-warning btn-xs active'>确认</a>");
    var cancelBtn = $("<a href='javascript:;'class='btn btn-default btn-xs active'>取消</a>");
    cancelBtn.click(function () {
      window.location.reload();
    });
    confirmBtn.click(function () {
      var currentRow = $(this).parent().parent();
      var input_files = currentRow.find("input");
      var post_files = {};
      for (var i = 0, j = input_files.length; i < j; i++) {
        post_files['clo_' + i] = input_files[i].value;
      }
      // $.post("<?php echo U('ajax/add');?>",post_files,function(msg){
      // debugger;
      // })
      $.ajax({
        type: 'post',
        url: "<?php echo U('K/add');?>",
        data: { post_files },
        success: function (msg) {
          alert(msg);
          window.location.reload();
        }
      })
    });
    col_opt.append(confirmBtn);
    col_opt.append(cancelBtn);
    addRow.append(col_opt);
  }
  function del(obj) {
    var id = $(obj).parent().prev().prev().val();
    $.ajax({
      type: 'post',
      url: "<?php echo U('K/del');?>",
      data: { id: id },
      success: function (msg) {
        alert(msg);
      }
    })
    $(obj).parent().parent().remove();
  }
  function edit(obj) {
    var id = $(obj).parent().prev().val();
    for (var i = 1; i < 12; i++) {
      var temp = "<td align='center'><input  align='center' type='text' value='" + $(obj).parent().parent().children().eq(i).html() + "' size='6' ></td>";
      $(obj).parent().parent().children().eq(i).replaceWith(temp);
    }
    var confirmBtn1 = $("<span id='confirm'class='btn btn-success btn-xs'>确认</span>");
    var cancelBtn1 = $("<span onclick='back()' class='btn btn-default btn-xs'>取消</span>");
    confirmBtn1.click(function () {
      var currentRow = $(this).parent().parent();
      var input_files = currentRow.find("input");
      var post_files = {};
      for (var i = 0, j = input_files.length; i < j; i++) {
        post_files['clo_' + i] = input_files[i].value;
      }
      $.ajax({
        type: 'post',
        url: "<?php echo U('K/edit');?>",
        data: { post_files: post_files, id: id },
        success: function (msg) {
          alert(msg);
          window.location.reload();
        }
      })
    });
    $(obj).prev().replaceWith(confirmBtn1);
    $(obj).replaceWith(cancelBtn1);

  }
  function back() {
    location.reload();
  } 
</script>

</html>