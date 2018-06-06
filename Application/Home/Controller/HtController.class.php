<?php
namespace Home\Controller;
use Think\Controller;
class HtController extends Controller{
public function Index(){
    { $cxfs=I('get.cxfs');
        $where = I('get.search'); 
         if (!empty($where))
               {  switch ($cxfs)
                   {
                       case  jqcx : 	 
                       $map['']=$where;
                           break;
       
                       case mhcx:
                       $map['']=array('like','%'.$where.'%');
                           break;
       
                   }
                   }
                 else
               {
                   $map="";
               }
            
           $m = M('ht');   
           
          $count = $m->where($map)->count();
               //$Page       = new \Think\Page($count,16);// 
            $p = getpage($count,15);
           $list = $m->field(true)->where($map)->order('h_id desc,h_h desc')->limit($p->firstRow, $p->listRows)->select();
             
            $this->assign('select', $list); // 赋值数据集
            $this->assign('page', $p->show()); // 赋值分页输出
           $this->display();
           }
       }


}





 
