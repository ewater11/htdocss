<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>系统登录</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/Public/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/Public/css/form-elements.css">
        <link rel="stylesheet" href="/Public/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="/Public/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/Public/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/Public/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/Public/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/Public/ico/apple-touch-icon-57-precomposed.png">


    </head>

    <body >

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>系统登陆</strong> </h1>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        		<p>下面框中填入用户名和密码</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="username">用户名</label>
			                        	<input type="text" name="uname" placeholder="用户名" class="form-username form-control" id="username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">密码</label>
			                        	<input type="password" name="pw" placeholder="密码" class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn">提交</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
      


        <!-- Javascript -->
        <script src="/Public/js/jquery-1.11.1.min.js"></script>
        <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
        <script src="/Public/js/jquery.backstretch.min.js"></script>
        <script src="/Public/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="/Public/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>