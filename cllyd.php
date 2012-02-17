<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- cl.ly'd written by Stan Hutcheon 2012 -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
html, body, iframe {
	margin: 0 auto;
	width: 100%;
	height: 100%;
	background-color:#000000;
	color:#FFFFFF;
}
h2 {
	padding-top:20px;
	font-family: "Helvetica Neue", Helvetica, Arial, Geneva, sans-serif;
	font-size:14px;
}
iframe {
	width: 100%;
	height: 100%;
	margin: 0 auto;
}
</style>
</head>
<body vlink="#FFFFFF" alink="#CCCCCC" link="#FFFFFF">
<div align="center">
<?php
/* Turn off error reporting as it changes the site (and its not needed) */
error_reporting(0);

if(htmlspecialchars($_GET["u"]) == "") {
	if($_POST["url"] == "") {} 
	else {
		$url2 = "<h2>share: <a href='http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] . "?u=" . $_POST["url"] . "'>http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] . "?u=" . $_POST["url"] ."</h2>";
	}
}
echo $url2;
?>
</div>
<iframe id="frame" src="http://cl.ly/<?php 
if(htmlspecialchars($_GET["u"]) == "") {
	if($_POST["url"] == "") {
		$url = "null";
	} else {
		$url = $_POST["url"];
	}
} else {
	$url =  htmlspecialchars($_GET["u"]);
}
echo $url;
?>" frameborder="0"></iframe>
<!-- This has to go here as a PHP error changes the title to the name of the error :p #lazy -->
<title><?php 
if(htmlspecialchars($_GET["u"]) == "") {
$title="CloudApp -- Not Found";
	if($_POST["url"] == "") {
		$title =  "CloudApp -- Not Found";
	} else {
		$title = "CloudApp -- " . $_POST["url"];
	}
} else {
	$title =  "CloudApp -- " . htmlspecialchars($_GET["u"]);
}
echo $title;
?></title>
</body>
</html>