<?php 
namespace Home\Controller;
use Think\Controller;
class JgController extends Controller{
public function index(){
 { $cxfs=I('get.cxfs');
		$where = I('get.search'); 
		
		if (!empty($where))
		{
			switch ($cxfs)
			{
				case  jqcx : 	 
				$map['riq|gold|silver|silver1|pd|ru|pt|rh|yr|jcpd|jcpt'] =$where;
				break;

			case mhcx:
				$map['riq|gold|silver|silver1|pd|ru|pt|rh|yr|jcpd|jcpt'] =array('like','%'.$where.'%');
				break;

			}
	    	}
			
	
		else
		{
			$map="";
		}
		//$cha= $_GET['select1'];
		
    $m = M('jg');   
    
   $count = $m->where($map)->count();
		//$Page       = new \Think\Page($count,16);// 
     $p = getpage($count,15);
    $list = $m->field(true)->where($map)->order('riq desc')->limit($p->firstRow, $p->listRows)->select();
	  
     $this->assign('select', $list); // 赋值数据集
     $this->assign('page', $p->show()); // 赋值分页输出
    $this->display();
  

	
    }
}
public function indexedit(){
	{ $cxfs=I('get.cxfs');
		   $where = I('get.search'); 
		   
		   if (!empty($where))
		   {
			   switch ($cxfs)
			   {
				   case  jqcx : 	 
					   $map['riq|gold|silver|silver1|pd|ru|pt|rh|yr|jcpd|jcpt'] =$where;
					   break;
   
				   case mhcx:
					   $map['riq|gold|silver|silver1|pd|ru|pt|rh|yr|jcpd|jcpt'] =array('like','%'.$where.'%');
					   break;
   
			   }
			   }
			   
	   
		   else
		   {
			   $map="";
		   }
		   //$cha= $_GET['select1'];
		   
	   $m = M('jg');   
	   
	  $count = $m->where($map)->count();
		   //$Page       = new \Think\Page($count,16);// 
		$p = getpage($count,15);
	   $list = $m->field(true)->where($map)->order('riq desc')->limit($p->firstRow, $p->listRows)->select();
		 
		$this->assign('select', $list); // 赋值数据集
		$this->assign('page', $p->show()); // 赋值分页输出
	   $this->display();
	 
   
	   
	   }
   }
public function del(){
	if (IS_POST){
$map['id'] = I('post.id');
$tab = M('jg');
$info = $tab->where($map)->delete();
if($info){
	$this->success("删除成功");
}else{
$this->error("删除失败");
}
}
}
public function add()
	{
	if(IS_POST)	{
		$data=I('post.');
		$rules = array(
     array('riq','require','日期必须填入！'), //默认情况下用正则进行验证
     array('riq','','该日期记录已存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
    //array('pt','number_float','只能输入数字！'), // 当值不为空的时候判断是否在一个范围内
);	
	
		
	$Form1 =D('jg')	;
		if($Form1->validate($rules)->create($data))
		{
			
			$result =$Form1->add($data);
			if($result){
				$this->success('价格添加成功！');
			}else{
				$this->error('价格添加错误！');
			}
		}else{
				$this->error($Form1->getError());
			}
			
			
		
	}
  
} 
public function edit(){
	if (IS_POST){
$id = I('post.id');
$map = I('post.');
$rules = array(
	array('riq','require','日期必须填入！'), //默认情况下用正则进行验证
	
);
$Form2 = D('jg');
if($Form2->validate($rules)->create($map))
{
$res = $Form2->where('id='.$id)->save();
if($res){
	$this->success('价格修改成功！');
}else{
	$this->error('价格未修改！');
}
}else{
	$this->error($Form2->getError());
}
}
}
}
