<?php
include("../cfg/general.inc.php");
include("../cfg/connect.inc.php");
include("../cfg/functions.php");

header("HTTP/1.0 404 Not Found");

$CHARSET='windows-1251';
if (DB_CHARSET!='cp1251') $CHARSET='UTF-8';

$html='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
$html.='<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr" >';
$html.="<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=\"".$CHARSET."\" />
<title>404 ����������� ���� �������� �� �������</title>
<link rel=\"stylesheet\" type=\"text/css\" href=\"http://".CONF_SHOP_URL."/images/backend/install.css\" />
</head>
<body>
<div id=\"container\">
  <div id=\"header\"><a href=\"http://".CONF_SHOP_URL."/\"><img src=\"http://".CONF_SHOP_URL."/css/css_default/image/logo0000.png\" alt='".CONF_SHOP_NAME."' title='".CONF_SHOP_NAME."'/></a></div>
  <div id='content'>
    <div id='content_top'></div>
    <div id='content_middle'>
      <h1>404 �������� �� �������</h1>
      <div style='width: 100%; display: inline-block; padding: 40px;'>
	��������, ������� �� ���������, ����������� �� ����� �������.<br /> 
	��������, �� �������� ��� ������ ������ ��� ������� �� �������� ������.
	<ul>
	  <li>��������� ������������ ���������</li>
	  <li>�������������� <a href='http://".CONF_SHOP_URL."/'>������� ���������</a></li>
	</ul>
      </div>
    </div>
    <div id='content_bottom'></div>
  </div>
  <div id='footer'><a onclick=\"window.open('http://www.shop-script.ru');\">Project Homepage</a>|<a onclick=\"window.open('http://www.shop-script.ru/overview/');\">Documentation</a>|<a onclick=\"window.open('http://forum.webasyst.ru/viewforum.php?id=13');\">Support Forums</a></div>
</div>
</body>
</html>";

if (DB_CHARSET!='cp1251') $html=win2utf($html);
echo $html;





