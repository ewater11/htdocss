<?php
namespace Home\Controller;

use Think\Controller;
class KhController extends Controller{
    public function index(){
         { $cxfs=I('get.cxfs');
            $where = I('get.search'); 
             if (!empty($where))
                   {  switch ($cxfs)
                       {
                           case  jqcx : 	 
                           $map['k_m|k_shdz|k_lxr|k_shm|k_tel|k_sj|k_email|k_hkfs']=$where;
                               break;
           
                           case mhcx:
                           $map['k_m|k_shdz|k_lxr|k_shm|k_tel|k_sj|k_email|k_hkfs']=array('like','%'.$where.'%');
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
                $p = getpage($count,15);
               $list = $m->field(true)->where($map)->order('k_m desc,k_id desc')->limit($p->firstRow, $p->listRows)->select();
                 
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
                              $map['k_m|k_shdz|k_lxr|k_shm|k_tel|k_sj|k_email']=$where;
                                  break;
              
                              case mhcx:
                              $map['k_m|k_shdz|k_lxr|k_shm|k_tel|k_sj|k_email']=array('like','%'.$where.'%');
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
                   $p = getpage($count,15);
                  $list = $m->field(true)->where($map)->order('k_m desc,k_id desc')->limit($p->firstRow, $p->listRows)->select();
                    
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
    if (IS_POST){
$map['k_id']=I('post.k_id');
$tab = M('k');
$info = $tab->where($map)->delete();
if($info){
$this->success("删除成功");
}else{
$this->error("删除失败");
}
    } 

}
public function edit(){
	if (IS_POST){
        $id = I('post.k_id');
        $map = I('post.');
        $rules = array(
            array('k_m','require','客户名称必须填入！'), //默认情况下用正则进行验证
            
        );
        $Form2 = D('k');
        if($Form2->validate($rules)->create($map))
        {
        $res = $Form2->where('k_id='.$id)->save();
        if($res){
            $this->success('客户信息修改成功！');
        }else{
            $this->error('客户信息未修改！');
        }
        }else{
            $this->error($Form2->getError());
        }  
    }
}
public function khmx(){
   $map=I('get.k_id');
    $res=M('k');
    
    $mx = $res->where('k_id='.$map)->select();
        if($mx){
        $this->assign('select',$mx);
        
    }else{
        $this->error();
    }
    
    { $cxfs=I('get.cxfs');
        $where = I('get.search'); 
         if (!empty($where))
               {  switch ($cxfs)
                   {
                       case  jqcx : 	 
                       $map1['h_h']=$where;
                           break;
       
                       case mhcx:
                       $map1['h_h']=array('like','%'.$where.'%');
                           break;
                          }
                   }
                 else
               {
                   $map1="";
               }
               $ht=D('KhRelation');
               $count = $ht->relation(true)->where('k_id='.$map,$map1)->count();
               //$Page       = new \Think\Page($count,16);// 
            $p = getpage($count,10);
           $list = $ht->field(true)->where('k_id='.$map,$map1)->order('h_id desc')->limit($p->firstRow, $p->listRows)->select();
             
            $this->assign('list', $list); // 赋值数据集
            $this->assign('page', $p->show()); // 赋值分页输出
           $this->display();
           }
    }
}











   
