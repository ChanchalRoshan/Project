<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin</title>
</head>
<body bgcolor="#c6c6ff">
<!--url's used in the movie-->
<!--text used in the movie-->
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="602" height="1100" id="Admin" align="middle">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="

Admin.swf

?user=<?php echo $HTTP_POST_VARS['user']; ?>
&pass=<?php echo $HTTP_POST_VARS['pass']; ?>
" />
<param name="quality" value="high" />
<param name="bgcolor" value="#c6c6ff" />
<embed src="

Admin.swf

?user=<?php echo $HTTP_POST_VARS['user']; ?>
&pass=<?php echo $HTTP_POST_VARS['pass']; ?>
" quality="high" bgcolor="#c6c6ff" width="602" height="1100" name="Admin" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
</body>
</html>
