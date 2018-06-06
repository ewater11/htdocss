<?php
namespace Home\Controller;
 use Think\Controller;

 /**
  * Class LoginController
  * @package Home\Controller
  */
 class CpController extends Controller {
      public function Index(){
        $cxfs=I('get.cxfs');
		$where = I('get.search'); 
		
		if (!empty($where))
		{
			switch ($cxfs)
			{
				case  jqcx : 	 
					$map['c_m|c_x|c_b|c_gg|c_gy|c_gl|c_gb|c_gp|c_gIr|c_gRh|c_lb|c_bm'] =$where;
					break;

				case mhcx:
				$map['c_m|c_x|c_b|c_gg|c_gy|c_gl|c_gb|c_gp|c_gIr|c_gRh|c_lb|c_bm'] =array('like','%'.$where.'%');
					break;

			}
	    	}
			
	
		else
		{
			$map="";
		}
		//$cha= $_GET['select1'];
		
    $m = M('c');   
    
   $count = $m->where($map)->count();
		//$Page       = new \Think\Page($count,16);// 
     $p = getpage($count,14);
    $list = $m->field(true)->where($map)->order('c_x,c_id desc')->limit($p->firstRow, $p->listRows)->select();
     $this->assign('select', $list); // 赋值数据集
     $this->assign('page', $p->show()); // 赋值分页输出
    $this->display();
  

}
public function add(){
if (IS_POST){
	$data=I('post.');
	$rules = array(
		array('c_x','require','产品型号必须填入！'), //默认情况下用正则进行验证
		array('c_x','','该产品型号已存在！',0,'unique',1),
	); // 在新增的时候验证name字段是否唯一
	$m=D('c');
	if($m->validate($rules)->create($data))
	{
		$result =$m->add($data);
		if($result){
			$this->success('产品添加成功！');
		}else{
			$this->error('产品添加错误！');
		}
	}else
			$this->error($m->getError());
	}
}
public function edit(){
	if (IS_POST){
        $id = I('post.c_id');
        $map = I('post.');
        $rules = array(
            array('c_x','require','产品型号必须填入！'), //默认情况下用正则进行验证
            
        );
        $Form2 = D('c');
        if($Form2->validate($rules)->create($map))
        {
        $res = $Form2->where('c_id='.$id)->save();
        if($res){
            $this->success('产品信息修改成功！');
        }else{
            $this->error('产品信息未修改！');
        }
        }else{
            $this->error($Form2->getError());
        }  
    }
	}

public function del(){
	if (IS_POST){
		$map['c_id']=I('post.c_id');
		$tab = M('c');
		$info = $tab->where($map)->delete();
		if($info){
		$this->success("删除成功");
		}else{
		$this->error("删除失败");
		}
			} 
	
}






}