<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Word Igniter</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/reset.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/style.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/all-packed.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/media.css">
    
    <!-- in case you wonder: That's the cool-kids-protocol-free way to load jQuery -->
    <script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/application.js"></script>
    
    <style>
    body{
    font-size:20px;    
        
    }
    head{
    font-size:20px;    
    font-family:"黑体";
        
    }
    #step1{
    font-size:60px;
    font-weight: bold;
    margin:10px 10px 10px 80px;
    }
        #finish{
            font-size:30px;
            font-weight: bold;
            margin:10px 10px 10px 80px;
        }
        #step2{
    font-size:30px;
    
    margin:10px 10px 10px 80px;
    }
        #step3{
    font-size:30px;
    margin:10px 10px 10px 80px;
    }
        #step4{
    font-size:30px;
    margin:10px 10px 10px 80px;
    }
        #step5{
    font-size:30px;
    margin:10px 10px 10px 80px;
    }
        
    button {  
    color: #606060;  
    border: solid 1px #b7b7b7;  
    background: #fff;  
    background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#ededed));  
    background: -moz-linear-gradient(top,  #fff,  #ededed);  
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#ededed');  
    }  
    button:hover {  
        background: #ededed;  
        background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#dcdcdc));  
        background: -moz-linear-gradient(top,  #fff,  #dcdcdc);  
        filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#dcdcdc');  
    }  
    button:active {  
        color: #999;  
        background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#fff));  
        background: -moz-linear-gradient(top,  #ededed,  #fff);  
        filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#ffffff');  
    }  
        

    button{
    font-weight:bold;
    display: inline-block;  
    zoom: 1; /* zoom and *display = ie7 hack for display:inline-block */  
    *display: inline;  
    vertical-align: baseline;  
    margin: 0 2px;  
    outline: none;  
    cursor: pointer;  
    text-align: center;  
    text-decoration: none;  
    font-size: 20px ;
    font-family:"黑体";
    padding: .5em 2em .55em;  
     
    -webkit-border-radius: .5em;   
    -moz-border-radius: .5em;  
    border-radius: .5em;  
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);  
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);  
    box-shadow: 0 1px 2px rgba(0,0,0,.2);  
	}  
	button:hover {  
	    text-decoration: none;  
	}  
	button:active {  
	    position: relative;  
	    top: 1px;  
	}  
	        
    .button {  
    color: #606060;  
    border: solid 1px #b7b7b7;  
    background: #fff;  
    background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#ededed));  
    background: -moz-linear-gradient(top,  #fff,  #ededed);  
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#ededed');  
    }  
    .button:hover {  
        background: #ededed;  
        background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#dcdcdc));  
        background: -moz-linear-gradient(top,  #fff,  #dcdcdc);  
        filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#dcdcdc');  
    }  
    .button:active {  
        color: #999;  
        background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#fff));  
        background: -moz-linear-gradient(top,  #ededed,  #fff);  
        filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#ffffff');  
    }

    .button{
        margin:10px 10px 10px 80px;
        font-weight:bold;
    display: inline-block;  
    zoom: 1; /* zoom and *display = ie7 hack for display:inline-block */  
    *display: inline;  
    vertical-align: baseline;  
     
    outline: none;  
    cursor: pointer;  
    text-align: center;  
    text-decoration: none;  
    font-size: 20px ;
        font-family:"黑体";
    padding: .5em 2em .55em;  
     
    -webkit-border-radius: .5em;   
    -moz-border-radius: .5em;  
    border-radius: .5em;  
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);  
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);  
    box-shadow: 0 1px 2px rgba(0,0,0,.2);  
	}  
	.button:hover {  
	    text-decoration: none;  
	}  
	.button:active {  
	    position: relative;  
	    top: 1px;  
	} 
	        
    .back {  
    color: #606060;  
    border: solid 1px #b7b7b7;  
    background: #fff;  
    background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#ededed));  
    background: -moz-linear-gradient(top,  #fff,  #ededed);  
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#ededed');  
    }  
    .back:hover {  
        background: #ededed;  
        background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#dcdcdc));  
        background: -moz-linear-gradient(top,  #fff,  #dcdcdc);  
        filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#dcdcdc');  
    }  
    .back:active {  
        color: #999;  
        background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#fff));  
        background: -moz-linear-gradient(top,  #ededed,  #fff);  
        filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#ffffff');  
    }

    .back{
        margin:10px 10px 10px 80px;
        font-weight:bold;
    display: inline-block;  
    zoom: 1; /* zoom and *display = ie7 hack for display:inline-block */  
    *display: inline;  
    vertical-align: baseline;  
     
    outline: none;  
    cursor: pointer;  
    text-align: center;  
    text-decoration: none;  
    font-size: 20px ;
        font-family:"黑体";
    padding: .5em 2em .55em;  
     
    -webkit-border-radius: .5em;   
    -moz-border-radius: .5em;  
    border-radius: .5em;  
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);  
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);  
    box-shadow: 0 1px 2px rgba(0,0,0,.2);  
	}  
	.back:hover {  
	    text-decoration: none;  
	}  
	.back:active {  
	    position: relative;  
	    top: 1px;  
	}
    
    #button{
    	margin:10px 10px 10px 80px;
    }
            
    .sample{
     font-size:20px;   
    }
        
    .feedback success{
       font-size:40px;  
    }
        
        
    .feedback error{
       font-size:40px;  
    }
        
    input{
       margin:5px 0px 30px 0px;         
    }
    h1{
        margin:0px 0px 30px 0px;
        font-family:"微软雅黑";
    }
    </style>

</head>
<body>
    
    <!--<div class="debug-helper-box"> -->
    <!--    DEBUG HELPER: you are in the view: <?php echo $filename; ?>-->
    <!--</div>-->

    <div class='title-box'>
        <a href="<?php echo URL; ?>">Word Igniter</a>
    </div>

    <div class="header">
        <div class="header_left_box">
        <ul id="menu">
            <li <?php if ($this->checkForActiveController($filename, "index")) { echo ' class="active" '; } ?> >
                <a href="<?php echo URL; ?>index/index">主页</a>
            </li>
            <li <?php if ($this->checkForActiveController($filename, "help")) { echo ' class="active" '; } ?> >
                <a href="<?php echo URL; ?>help/index">帮助</a>
            </li>
            <li <?php if ($this->checkForActiveController($filename, "overview")) { echo ' class="active" '; } ?> >
                <a href="<?php echo URL; ?>overview/index">所有已注册用户</a>
            </li>
            
            <?php if (Session::get('user_logged_in') == true):?>
            <li <?php if ($this->checkForActiveController($filename, "note")) { echo ' class="active" '; } ?> >
                <a href="<?php echo URL; ?>note/index">我的笔记</a>
            </li>
            <?php endif; ?>

            <?php if (Session::get('user_logged_in') == true):?>
            <li <?php if ($this->checkForActiveController($filename, "recite")) { echo ' class="active" '; } ?> >
                <a href="<?php echo URL; ?>recite/index">背单词</a>
                <ul class="sub-menu">
                        <li <?php if ($this->checkForActiveController($filename, "recite")) { echo ' class="active" '; } ?> >
                            <a href="<?php echo URL; ?>recite/index">开始背单词！</a>
                        </li>
                        <li <?php if ($this->checkForActiveController($filename, "recite")) { echo ' class="active" '; } ?> >
                            <a href="<?php echo URL; ?>recite/plan">制定背单词计划</a>
                        </li>
                 </ul>
            </li>
            <?php endif; ?>
            
            <?php if (Session::get('user_logged_in') == true):?>
            <li <?php if ($this->checkForActiveController($filename, "reading")) { echo ' class="active" '; } ?> >
                <a href="<?php echo URL; ?>reading/index">阅读</a>
            </li>
            <?php endif; ?>
            
            <?php if (Session::get('user_logged_in') == true):?>
            <li <?php if ($this->checkForActiveController($filename, "communication")) { echo ' class="active" '; } ?> >
                <a href="<?php echo URL; ?>communication/index">社交</a>
            </li>
            <?php endif; ?>
            
            <?php if (Session::get('user_logged_in') == true):?>
                <li <?php if ($this->checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                    <a href="<?php echo URL; ?>login/showprofile">我的账户</a>
                    <ul class="sub-menu">
                        <li <?php if ($this->checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                            <a href="<?php echo URL; ?>login/changeaccounttype">改变我的级别</a>
                        </li>
                        <li <?php if ($this->checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                            <a href="<?php echo URL; ?>login/uploadavatar">上传头像</a>
                        </li>
                        <li <?php if ($this->checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                            <a href="<?php echo URL; ?>login/editusername">编辑用户名</a>
                        </li>
                        <li <?php if ($this->checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                            <a href="<?php echo URL; ?>login/edituseremail">编辑电子邮箱</a>
                        </li>
                        <li <?php if ($this->checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                            <a href="<?php echo URL; ?>login/logout">登出</a>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>

            <!-- for not logged in users -->
            <?php if (Session::get('user_logged_in') == false):?>
                <li <?php if ($this->checkForActiveControllerAndAction($filename, "login/index")) { echo ' class="active" '; } ?> >
                    <a href="<?php echo URL; ?>login/index">登录</a>
                </li>
                <li <?php if ($this->checkForActiveControllerAndAction($filename, "login/register")) { echo ' class="active" '; } ?> >
                    <a href="<?php echo URL; ?>login/register">注册</a>
                </li>
            <?php endif; ?>
        </ul>
        </div>

        <?php if (Session::get('user_logged_in') == true): ?>
            <div class="header_right_box">
                <div class="namebox">
                    Hello <?php echo Session::get('user_name'); ?> !
                </div>
                <div class="avatar">
                    <?php if (USE_GRAVATAR) { ?>
                        <img src='<?php echo Session::get('user_gravatar_image_url'); ?>'
                             style='width:<?php echo AVATAR_SIZE; ?>px; height:<?php echo AVATAR_SIZE; ?>px;' />
                    <?php } else { ?>
                        <img src='<?php echo Session::get('user_avatar_file'); ?>'
                             style='width:<?php echo AVATAR_SIZE; ?>px; height:<?php echo AVATAR_SIZE; ?>px;' />
                    <?php } ?>
                </div>
            </div>
        <?php endif; ?>

        
        <div class="clear-both"></div>
    </div>
