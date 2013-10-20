<?php
  if (isset($_GET['signin']))
  {
    $smarty->assign("main_content_template", "cust_login_info.tpl.html");
  }
?>