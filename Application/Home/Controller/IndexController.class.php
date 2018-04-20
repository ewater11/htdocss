<?php
namespace Home\Controller;
 use Think\Controller;

 /**
  * Class LoginController
  * @package Home\Controller
  */
 class IndexController extends Controller {
     /**
      * 用户登录
     */
     public function Index()
     {
         // 判断提交方式
        if (IS_POST) {
             // 实例化Login对象
            $login =M('admin');

             // 自动验证 创建数据集
            if (!$data = $login->create()) {
                 // 防止输出中文乱码
                header("Content-type: text/html; charset=utf-8");
                 exit($login->getError());
             }

             // 组合查询条件
            $where = array();
             $where['uname'] = $data['uname'];
			     $where['pw'] =$data['pw'];
             $result = $login->where($where)->field('id,uname,yxy,pw,jb,bz')->find();

             // 验证用户名 对比 密码
            if ($result) {
                 // 存储session
                 session('id', $result['id']);          // 当前用户id
                 session('yxy', $result['yxy']);   // 当前用户昵称
                session('uname', $result['uname']);   // 当前用户名
                session('jb', $result['jb']);   // 上一次登录时间
                      // 上一次登录ip

                 // 更新用户登录信息
                //$where['id'] = session('id');
                   // 登录次数加 1
               

                 $this->success('登录成功,正跳转至系统首页...', U('Index/show'),1);
             } else {
                 $this->error('登录失败,用户名或密码不正确!');
             }
         } else {
             $this->display();
         }
     }

     /**
      * 用户注册
     */
     public function register()
     {
         // 判断提交方式 做不同处理
        if (IS_POST) {
             // 实例化User对象
            $user = D('users');

             // 自动验证 创建数据集
            if (!$data = $user->create()) {
                 // 防止输出中文乱码
                header("Content-type: text/html; charset=utf-8");
                 exit($user->getError());
             }

             //插入数据库
            if ($id = $user->add($data)) {
                 /* 直接注册用户为超级管理员,子用户采用邀请注册的模式,
                    遂设置公司id等于注册用户id,便于管理公司用户*/
                 $user->where("id = $id")->setField('jb', $id);
                 $this->success('注册成功', U('Index/index'), 2);
             } else {
                 $this->error('注册失败');
             }
         } else {
             $this->display();
         }
     }

     /**
      * 用户注销
     */
     public function logout()
     {
         // 清楚所有session
         session(null);
         redirect(U('Index/index'), 2, '正在退出登录...');
     }

     /**
      * 验证码
     */
     public function verify()
     {
         // 实例化Verify对象
        $verify = new \Think\Verify();

         // 配置验证码参数
        $verify->fontSize = 14;     // 验证码字体大小
        $verify->length = 4;        // 验证码位数
        $verify->imageH = 34;       // 验证码高度
        $verify->useImgBg = true;   // 开启验证码背景
        $verify->useNoise = false;  // 关闭验证码干扰杂点
        $verify->entry();
     }
	 
	 public function show()
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
     $p = getpage($count,14);
    $list = $m->field(true)->where($map)->order('riq desc')->limit($p->firstRow, $p->listRows)->select();
     $this->assign('select', $list); // 赋值数据集
     $this->assign('page', $p->show()); // 赋值分页输出
    $this->display();
  

	
    }
 }