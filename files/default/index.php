<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Made by Skystack</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<style>
body { 
	background-color:#eee; font-family:"Lucida Grande", verdana, arial, helvetica, sans-serif; 
	font-size: 12px; 
	color:#484848; 
	margin: 0; padding: 0; 
	/*min-width: 900px;*/
}

#head{margin:10px auto 20px auto;width:400px;text-align: center}
#landing{margin:0 auto;width:740px;background:#fff;padding:0px 20px 20px 20px;}
#landing h1{font-size:36px;}
#landing .content{margin-top:20px;}
#footer{margin:0 auto;width:600px;padding:15px;}
</style>
	
<div id="head"><img src="https://my.skystack.com/img/logo_black_on_trans.png" title="my.skystack.com" /></div>

<div id="landing" class="ui-corner-all" style="">
	<div class="content">

	        <h1>Its Done!</h1>

	        <p>To manage this server visit <a href="https://my.skystack.com">my.skystack.com</a></p>

	        <?php

	        if(isset($_GET['show_php']) && $_GET['show_php'] == 1):
	                phpinfo();
	        endif;

	        ?>
	</div>
</div>
</body>	
</html>
<!-- skystack_apps/files/default/index.php -->