<?php
namespace Home\Controller;
use Think\Controller;
class XgController extends Controller{
    public function index(){
         { $cxfs=I('get.cxfs');
            $where =trim(I('get.search')); 
             if (!empty($where))
                   {
                       switch ($cxfs)
                       {
                           case  jqcx : 	 
                           $map['k_m']=$where;
                               break;
           
                           case mhcx:
                           $map['k_m|k_lxr|k_shdz']=array('like','%'.$where.'%');
                               break;
           
                       }
                       }
                     else
                   {
                       $map="";
                   }
                
               $m = M('k');   
               
              $count = $m->where($map)->count();
                   //$Page       = new \Think\Page($count,16);// 
                $p = getpage($count,13);
               $list = $m->field(true)->where($map)->order('k_id desc')->limit($p->firstRow, $p->listRows)->select();
                 
                $this->assign('select', $list); // 赋值数据集
                $this->assign('page', $p->show()); // 赋值分页输出
               $this->display();
               }
           }
           public function khedit(){
            { $cxfs=I('get.cxfs');
               $where = I('get.search'); 
                if (!empty($where))
                      {
                          switch ($cxfs)
                          {
                              case  jqcx : 	 
                              $map =$where;
                                  break;
              
                              case mhcx:
                              $map=array('like','%'.$where.'%');
                                  break;
               }
                          }
                     else
                      {
                          $map="";
                      }
               $m = M('k');   
               $count = $m->where($map)->count();
                      //$Page       = new \Think\Page($count,16);// 
                   $p = getpage($count,13);
                  $list = $m->field(true)->where($map)->order('k_m desc')->limit($p->firstRow, $p->listRows)->select();
                    
                   $this->assign('select', $list); // 赋值数据集
                   $this->assign('page', $p->show()); // 赋值分页输出
                  $this->display();
                
              
                  
                  }
              }

public function add(){
   
        if(IS_POST)	{
            $data=I('post.');
            
            
            
        $rules = array(
         array('k_m','require','客户名称必须填入！'), //默认情况下用正则进行验证
         array('k_m','','该客户记录已存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
         array('k_m','/^[a-zA-Z][a-zA-Z0-9_]{1,19}$/','用户名不合法！'),  
         array('email','email','邮箱格式不正确!'),  
         array('email','','该邮箱已经注册过！',0,'unique',1),  
        //array('pt','number_float','只能输入数字！'), // 当值不为空的时候判断是否在一个范围内
    );	
        
            
        $Form1 =D('k')	;
            if($Form1->validate($rules)->create($data))
            {
                
                $result =$Form1->add($data);
                if($result){
                    $this->success('客户添加成功！');
                }else{
                    $this->error('客户添加错误！');
                }
            }else{
                    $this->error($Form1->getError());
                }
                
                
            
        }
      
   
}

public function del(){
$map['k_id']=I('post.id');
$tab = M('k');
$info = $tab->where($map)->delete();
if($info){
$this->ajaxReturn("删除成功");
}else{
$this->ajaxReturn("删除失败");
}
 

}
public function edit(){
    $id = I('post.id');
    $map['riq'] = $_POST['post_files']['clo_0'];
    $map['gold'] = $_POST['post_files']['clo_1'];
    $map['silver'] = $_POST['post_files']['clo_2'];
    $map['silver1'] = $_POST['post_files']['clo_3'];
        $map['pt'] = $_POST['post_files']['clo_4'];
        $map['jcpt'] = $_POST['post_files']['clo_5'];
        $map['ru'] = $_POST['post_files']['clo_6'];
        $map['rh'] = $_POST['post_files']['clo_7'];
        $map['pd'] = $_POST['post_files']['clo_8'];
        $map['jcpd'] = $_POST['post_files']['clo_9'];
        $map['yr'] = $_POST['post_files']['clo_10'];
     //dump($map);exit;
    $tab = D('jg');
    $res = $tab->where('id='.$id)->save($map);
    if($res){
    $this->ajaxReturn("更新成功");
    }else{
        
    $this->ajaxReturn("更新失败");
        
    }
    }





    }
