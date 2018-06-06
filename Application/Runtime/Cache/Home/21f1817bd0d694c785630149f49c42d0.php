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
  <link href="/Public/Css/mypage.css" rel="stylesheet" type="text/css" />

  <link href="/Public/Css/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>


<body>
  <!--导航条-->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
          aria-expanded="false">
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
          <li >
            <a href="<?php echo U('Kh/index');?>">客户管理
              
            </a>
          </li>
          <li>
            <a href="<?php echo U('Jg/index');?>">贵金属价格</a>
          </li>
          <li class="active">
            <a href="<?php echo U('Cp/index');?>">产品
              <span class="sr-only">(current)</span></a>

          </li>
          <li>
            <a href="<?php echo U('Jg/index');?>">打印</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">报表
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="#">Action</a>
              </li>
              <li>
                <a href="#">Another action</a>
              </li>
              <li>
                <a href="#">Something else here</a>
              </li>
              <li role="separator" class="divider"></li>
              <li>
                <a href="#">Separated link</a>
              </li>
              <li role="separator" class="divider"></li>
              <li>
                <a href="#">One more separated link</a>
              </li>
            </ul>
          </li>
        </ul>
        <form action="<?php echo U('Cp/index');?>" method="get" class="navbar-form navbar-left">
          <input type="text" name="search" value="" size="18">
          <label>
            <div class="input-group">

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
          增加产品
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
                <h4 class="modal-title" id="myModalLabel">增加产品</h4>
              </div>
              <div class="modal-body">

                <!--模态层 -->
                <form action="<?php echo U('Cp/add');?>" method="post" id="form1">
                  <table align="center">
                    <tr>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">产品名称</span>
                          <input name="c_m" size="18" type="text" class="form-control " id="c_m" placeholder="请输入产品名称" >
                        </div>
                        <td>
                          <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">产品型号</span>
                            <input name="c_x" size="20" type="text" class="form-control " id="c_x" placeholder="请输入产品型号">
                          </div>

                        </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">产品标准</span>
                          <input size="20" name="c_b" type="text" class="form-control "  placeholder="请输入产品标准"  size="15" id="c_b" >
                        </div>


                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">生产部门</span>
                          <input size="20" name="c_bm" type="text" class="form-control " size="15" id="c_bm" placeholder="请输入生产部门" 
                            >
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">含金</span>
                          <input size="20" name="c_gg" class="form-control " type="text" size="15" id="c_gg" placeholder="请输入金含量" onkeyup="if(isNaN(value))execCommand('undo')"
                            onafterpaste="if(isNaN(value))execCommand('undo')">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">含银</span>
                          <input size="20" size="20" name="c_gy" class="form-control " type="text" size="15" id="c_gy" placeholder="请输入银含量" onkeyup="if(isNaN(value))execCommand('undo')"
                            onafterpaste="if(isNaN(value))execCommand('undo')">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">含铂</span>
                          <input size="20" name="c_gp" class="form-control " type="text" id="c_gp" placeholder="请输入铂含量" size="15" onkeyup="if(isNaN(value))execCommand('undo')"
                            onafterpaste="if(isNaN(value))execCommand('undo')">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">含钌</span>
                          <input size="17.5" name="c_gl" class="form-control " type="text" id="c_gl" placeholder="请输入钌含量" size="15" onkeyup="if(isNaN(value))execCommand('undo')"
                            onafterpaste="if(isNaN(value))execCommand('undo')">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">含铑</span>
                          <input size="17.5" name="c_gRh" class="form-control " type="text" id="c_gRh" placeholder="请输入铑含量" size="15" onkeyup="if(isNaN(value))execCommand('undo')"
                            onafterpaste="if(isNaN(value))execCommand('undo')">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">含铱</span>
                          <input size="16" name="c_gIr" class="form-control " type="text" id="c_gIr" size="15" placeholder="请输入铱含量" onkeyup="if(isNaN(value))execCommand('undo')"
                            onafterpaste="if(isNaN(value))execCommand('undo')">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="input-group" item-width="100%">
                          <span class="input-group-addon" id="basic-addon1">产品类别</span>
                          <input size="16" name="c_lb" class="form-control " type="text" id="c_lb" size="15" placeholder="请输入产品类别" onkeyup="if(isNaN(value))execCommand('undo')"
                            onafterpaste="if(isNaN(value))execCommand('undo')">
                        </div>
                      </td>
                      <td></td>
                    </tr>
                    <tr>
                      <td colspan="4" align="center">
                        <input class="btn btn-primary" type="Submit" name="Submit" value="增加" />
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> 　</td>
                    </tr>

                  </table>
                </form>

                <!--模态层 -->
              </div>
              <div class="modal-footer">
                金属含量只能填入数字
              </div>
            </div>
          </div>
        </div>

        <!--模态层 -->
        <ul class="nav navbar-nav navbar-right">
         
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="#">www</a>
              </li>
              <li>
                <a href="#">退出</a>
              </li>
              <li role="separator" class="divider"></li>
              <li>
                <a href="#">注销</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <!--导航条-->
  </td>
  </tr>
  </table>

  <table width="900" border="0" cellpadding="0" cellspacing="1" align="center" class="table  table-hover table-bordered table-condensed"
    id="g_table">

    <tr align="center" class="info">

      <td rowspan="2">产品名称</td>
      <td rowspan="2">型号 </td>
      <td rowspan="2">标准</td>
      <td rowspan="2">部门</td>
      <td rowspan="2">产品类别</td>
      <td colspan="7">金属含量</td>
      <td rowspan="2" colspan="2">
       编辑
      </td>
    </tr>
    <tr align="center" class="info">
      <td>金</td>
      <td>银</td>
      <td>铂</td>
      <td>钌</td>
      <td>铑</td>
      <td>钯</td>
      <td>铱</td>

    </tr>
    <?php if(is_array($select)): $i = 0; $__LIST__ = $select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center">
        <td><?php echo ($vo["c_m"]); ?> </td>
        <td class="active"><?php echo ($vo["c_x"]); ?></td>
        <td><?php echo ($vo["c_b"]); ?></td>
        <td class="active"><?php echo ($vo["c_bm"]); ?></td>
        <td ><?php echo ($vo["c_lb"]); ?></td>
        <td class="active"><?php echo ($vo["c_gg"]); ?></td>
        <td><?php echo ($vo["c_gy"]); ?></td>
        <td  class="active"><?php echo ($vo["c_gp"]); ?></td>
        <td ><?php echo ($vo["c_gl"]); ?></td>
        <td  class="active"><?php echo ($vo["c_grh"]); ?></td>
        <td><?php echo ($vo["c_gb"]); ?></td>
        <td  class="active"><?php echo ($vo["c_gir"]); ?></td>
        <input type="hidden" name="id" value="<?php echo ($vo["c_id"]); ?>">
<td > <span class="btn btn-info btn-xs" onclick="edit(this)">修改</span></td>
    <td class="active"> <span class="btn btn-info btn-xs" onclick="del(this)">删除</span></td>
        
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>


    <tr>
      <td colspan="13" align="right">

      </td>
    </tr>

    <tr class="content">
      <!--<td colspan="3" bgcolor="#FFFFFF"> <?php echo ($page); ?></td>-->
      <td colspan="13" bgcolor="#FFFFFF">
        <div class="pages" align="center">
          <?php echo ($page); ?>
        </div>
      </td>
    </tr>

  </table>

  <!--产品修改模态层 -->
  <script src="https://code.jquery.com/jquery.js"></script>
  <script src="/Public/bootstrap/js/bootstrap.min.js"> </script>

  <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="myModalLabel">产品修改</h4>
        </div>
        <div class="modal-body">

          <!--模态层 -->
          <form action="<?php echo U('Cp/edit');?>" method="post" id="form2">
            <table align="center">
              <tr>
                <td>
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">产品名称</span>
                    <input name="c_m" size="18" type="text" class="form-control " id="c_m1" placeholder="请输入产品名称" >
                  </div>
                  <td>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">产品型号</span>
                      <input name="c_x" size="20" type="text" class="form-control " id="c_x1" placeholder="请输入产品型号">
                    </div>

                  </td>
              </tr>
              <tr>
                <td>
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">产品标准</span>
                    <input size="20" name="c_b" type="text" class="form-control "  placeholder="请输入产品标准"  size="15" id="c_b1" >
                  </div>


                </td>
                <td>
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">生产部门</span>
                    <input size="20" name="c_bm" type="text" class="form-control " id="c_bm1" placeholder="请输入生产部门"              >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">含金</span>
                    <input size="20" name="c_gg" class="form-control " type="text"  id="c_gg1" placeholder="请输入金含量" onkeyup="if(isNaN(value))execCommand('undo')"
                      onafterpaste="if(isNaN(value))execCommand('undo')">
                  </div>
                </td>
                <td>
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">含银</span>
                    <input size="20" name="c_gy" class="form-control " type="text"  id="c_gy1" placeholder="请输入银含量" onkeyup="if(isNaN(value))execCommand('undo')"
                      onafterpaste="if(isNaN(value))execCommand('undo')">
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">含铂</span>
                    <input size="20" name="c_gp" class="form-control " type="text" id="c_gp1" placeholder="请输入铂含量"  onkeyup="if(isNaN(value))execCommand('undo')"
                      onafterpaste="if(isNaN(value))execCommand('undo')">
                  </div>
                </td>
                <td>
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">含钌</span>
                    <input size="17.5" name="c_gl" class="form-control " type="text" id="c_gl1" placeholder="请输入钌含量" onkeyup="if(isNaN(value))execCommand('undo')"
                      onafterpaste="if(isNaN(value))execCommand('undo')">
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">含铑</span>
                    <input size="17.5" name="c_gRh" class="form-control " type="text" id="c_gRh1" placeholder="请输入铑含量"  onkeyup="if(isNaN(value))execCommand('undo')"
                      onafterpaste="if(isNaN(value))execCommand('undo')">
                  </div>
                </td>
                <td>
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">含铱</span>
                    <input size="16" name="c_gIr" class="form-control " type="text" id="c_gIr1" size="15" placeholder="请输入铱含量" onkeyup="if(isNaN(value))execCommand('undo')"
                      onafterpaste="if(isNaN(value))execCommand('undo')">
                  </div>
                </td>
              </tr>
              <tr>
                  <td>
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">含钯</span>
                        <input size="16" name="c_gb" class="form-control " type="text" id="c_gb1" size="15" placeholder="请输入铱含量" onkeyup="if(isNaN(value))execCommand('undo')"
                          onafterpaste="if(isNaN(value))execCommand('undo')">
                      </div>
                    </td>
                <td>
                  <div class="input-group" item-width="100%">
                    <span class="input-group-addon" id="basic-addon1">产品类别</span>
                    <input size="16" name="c_lb" class="form-control " type="text" id="c_lb1" placeholder="请输入产品类别" 
                      >
                  </div>
                </td>
               
              </tr>
              <tr>
                <td colspan="4" align="center">
                  <input type="hidden" name="c_id" id="c_id1">
                  <input class="btn btn-primary" type="Submit" name="Submit" value="修改" />
                  <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> 　</td>
              </tr>

            </table>
          </form>

          <!--模态层 -->
        </div>
        <div class="modal-footer">
          金属含量只能填入数字
        </div>
      </div>
    </div>
  </div>

  <!--产品修改模态层end -->

<!--产品删除模态层 -->
<script src="https://code.jquery.com/jquery.js"></script>
<script src="/Public/bootstrap/js/bootstrap.min.js"> </script>

<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">产品修改</h4>
      </div>
      <div class="modal-body">

        <!--模态层 -->
        <form action="<?php echo U('Cp/del');?>" method="post" id="form2">
          <table align="center">
            <tr>
              <td>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">产品名称</span>
                  <input name="c_m" size="18" type="text" class="form-control " id="c_m2" readonly >
                </div>
                <td>
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">产品型号</span>
                    <input name="c_x" size="20" type="text" class="form-control " id="c_x2" readonly>
                  </div>

                </td>
            </tr>
            <tr>
              <td>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">产品标准</span>
                  <input size="20" name="c_b" type="text" class="form-control "   readonly id="c_b2" >
                </div>


              </td>
              <td>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">生产部门</span>
                  <input size="20" name="c_bm" type="text" class="form-control " id="c_bm2"  readonly >
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">含金</span>
                  <input size="20" name="c_gg" class="form-control " type="text"  id="c_gg2"  readonly
                    >
                </div>
              </td>
              <td>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">含银</span>
                  <input size="20" name="c_gy" class="form-control " type="text"  id="c_gy2"  readonly>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">含铂</span>
                  <input size="20" name="c_gp" class="form-control " type="text" id="c_gp2" readonly>
                </div>
              </td>
              <td>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">含钌</span>
                  <input size="17.5" name="c_gl" class="form-control " type="text" id="c_gl2"  readonly>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">含铑</span>
                  <input size="17.5" name="c_gRh" class="form-control " type="text" id="c_gRh2"  readonly>
                </div>
              </td>
              <td>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">含铱</span>
                  <input size="16" name="c_gIr" class="form-control " type="text" id="c_gIr2"  readonly>
                </div>
              </td>
            </tr>
            <tr>
                <td>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">含钯</span>
                      <input size="16" name="c_gb" class="form-control " type="text" id="c_gb2"  readonly>
                    </div>
                  </td>
              <td>
                <div class="input-group" item-width="100%">
                  <span class="input-group-addon" id="basic-addon1">产品类别</span>
                  <input size="16" name="c_lb" class="form-control " type="text" id="c_lb2"  readonly>
                </div>
              </td>
             
            </tr>
            <tr>
              <td colspan="4" align="center">
                <input type="hidden" name="c_id" id="c_id2">
                <input class="btn btn-primary" type="Submit" name="Submit" value="删除" />
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> 　</td>
            </tr>

          </table>
        </form>

        <!--模态层 -->
      </div>
      <div class="modal-footer">
        金属含量只能填入数字
      </div>
    </div>
  </div>
</div>

<!--产品删除模态层end -->
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
        url: "<?php echo U('Jg/add');?>",
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
    var tds= $(obj).parent().parent().find('td'); 
     $('#c_m2').val(tds.eq(0).text());  
     $('#c_x2').val(tds.eq(1).text());  
     $('#c_b2').val(tds.eq(2).text()); 
    $('#c_bm2').val(tds.eq(3).text());
    $('#c_lb2').val(tds.eq(4).text()); 
      $('#c_gg2').val(tds.eq(5).text()); 
      $('#c_gy2').val(tds.eq(6).text()); 
       $('#c_gp2').val(tds.eq(7).text()); 
              $('#c_gl2').val(tds.eq(8).text()); 
              $('#c_gRh2').val(tds.eq(9).text()); 
              $('#c_gb2').val(tds.eq(10).text()); 
              $('#c_gIr2').val(tds.eq(11).text()); 
              $('#c_id2').val(id);
              /*if (hy == '顺丰') {
		document.getElementById('顺丰').select = true;
	} else {
    if (hy=='自提'){document.getElementById('自提').select = true;}
    else
		document.getElementById('顺丰航空').select = true;
	}
}*/
        $('#Modal2').modal('show'); 

  }
  function edit(obj) {
    var id = $(obj).parent().prev().val();
    var tds= $(obj).parent().parent().find('td'); 
     $('#c_m1').val(tds.eq(0).text());  
     $('#c_x1').val(tds.eq(1).text());  
     $('#c_b1').val(tds.eq(2).text()); 
    $('#c_bm1').val(tds.eq(3).text());
    $('#c_lb1').val(tds.eq(4).text()); 
      $('#c_gg1').val(tds.eq(5).text()); 
      $('#c_gy1').val(tds.eq(6).text()); 
       $('#c_gp1').val(tds.eq(7).text()); 
              $('#c_gl1').val(tds.eq(8).text()); 
              $('#c_gRh1').val(tds.eq(9).text()); 
              $('#c_gb1').val(tds.eq(10).text()); 
              $('#c_gIr1').val(tds.eq(11).text()); 
              $('#c_id1').val(id);
              /*if (hy == '顺丰') {
		document.getElementById('顺丰').select = true;
	} else {
    if (hy=='自提'){document.getElementById('自提').select = true;}
    else
		document.getElementById('顺丰航空').select = true;
	}
}*/
        $('#Modal1').modal('show'); 

  }
  function back() {
    location.reload();
  } 
</script>

</html>