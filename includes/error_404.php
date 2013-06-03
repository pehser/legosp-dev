<?php
if (isset($_GET["error_404"])) {
	$smarty->assign("main_content_template", "error_404.tpl.html");
}
?>