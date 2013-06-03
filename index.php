<?php
$ref = $_SERVER['HTTP_USER_AGENT'];
if (!preg_match ("/yandex/i",$ref))  session_start();
if (is_dir('./install/')) {header("Location: ./install/"); exit;}
function get_mtime() {
    $mtime = microtime();
    $mtime = explode(' ', $mtime);
    $mtime = $mtime[1] + $mtime[0];
    return $mtime;
}
function convert($size) {
    $unit = array('b', 'kb', 'mb', 'gb', 'tb', 'pb');
    return round($size / pow(1024, ($i = floor(log($size, 1024)))), 2) . $unit[$i];;
}
function mamory() {
    $memory = (!function_exists('memory_get_usage')) ? '' : round(memory_get_usage() / 1024 / 1024, 4) . 'MB';
    echo "<div>" . $memory . "<div>";
}
$time1 = get_mtime();
//core file
ini_set("display_errors", "1");
ini_set("magic_quotes_runtime", "0");
//include core files
define('ROOT_DIR', dirname(__FILE__));
define('INCLUDE_DIR', ROOT_DIR . '/includes/');
include_once ("./cfg/connect.inc.php");
include_once ("./includes/database/mysql.php");
include_once ("./cfg/general.inc.php");
include_once ("./cfg/functions.php");
include_once ("./core/core_errors.php");
include_once ("./cfg/appearence.inc.php");
include_once ("./cfg/category_functions.php");
include_once ("./cfg/language_list.php");
include_once ("./cfg/company.inc.php");
include_once ("./cfg/product.inc.php");
include_once ("./cfg/shipping.inc.php");
include_once ("./cfg/votes.inc.php");
include_once ("./cfg/redirect.inc.php");
//init Smarty
if (DB_CHARSET == 'cp1251') define('SMARTY_RESOURCE_CHAR_SET', DB_CHARSET);
include ROOT_DIR . '/smarty/smarty.class.php';
$smarty = new Smarty; //core smarty object
$smarty_mail = new Smarty; //for e-mails
$smarty->register_modifier("print_price", "print_price");
//set Smarty include files dir
$smarty->template_dir = ROOT_DIR . "/css/css_" . CONF_COLOR_SCHEME . "/theme";
$smarty_mail->template_dir = "./css/css_" . CONF_COLOR_SCHEME . "/theme/mail";
//select a new language?
if (isset($_GET["new_language"]) && $_SESSION["current_language"] != $_GET["new_language"]) {
    $_SESSION["current_language"] = $_GET["new_language"];
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
//current language session variable
if (!isset($_SESSION["current_language"]) || $_SESSION["current_language"] < 0 || $_SESSION["current_language"] > count($lang_list)) $_SESSION["current_language"] = 0; //set default language
//include a language file
if (isset($lang_list[$_SESSION["current_language"]]) && file_exists(ROOT_DIR . "/languages/" . $lang_list[$_SESSION["current_language"]]->filename)) include (ROOT_DIR . "/languages/" . $lang_list[$_SESSION["current_language"]]->filename); //include current language file
else {
    die("<font color=red><b>ERROR: Couldn't find language file!</b></font>");
}
//connect to the database
db_connect(DB_HOST, DB_USER, DB_PASS) or die(db_error());
db_select_db(DB_NAME) or die(db_error());
mysql_query('SET NAMES ' . DB_CHARSET);
currency();
$currents = db_arAll("select * from " . CURRENCY_TABLE);
$smarty->assign("current_all", $currents);
unset($currents);
//get currency ISO 3 code
$currency_iso_3 = (defined('CONF_CURRENCY_ISO3')) ? CONF_CURRENCY_ISO3 : "USD";
$smarty->assign("currency_iso_3", $currency_iso_3);
unset($currents, $currency_iso_3);
//hurl's
if (isset($_GET["catalog_hurl"])) {
    $row = db_r("SELECT categoryID FROM " . CATEGORIES_TABLE . " where enabled=1 and hurl='" . mysql_real_escape_string($_GET["catalog_hurl"]) . "'");
    if ($row) $_POST["categoryID"] = $row;
    else header("Location: http://" . CONF_SHOP_URL . "/404/");
} elseif (isset($_GET["tags_hurl"])) { 
    $tagID = db_r('SELECT tag FROM ' . TAGS_TABLE . ' WHERE hurl=\'' . mysql_real_escape_string($_GET['tags_hurl']) . '\' OR tag=\'' . mysql_real_escape_string($_GET['tags_hurl']) . '\'') or die(db_error());
    if ($tagID) {
        $_POST["tagID"] = $tagID; 
    } else header("Location: http://" . CONF_SHOP_URL . "/404/");
} elseif (isset($_GET["product_hurl"])) {
    $row = db_r("SELECT * FROM " . PRODUCTS_TABLE . " where enabled=1 and hurl='" . mysql_real_escape_string($_GET['product_hurl']) . "'") or die(db_error());
    if ($row) $productID = $row;
    else header("Location: http://" . CONF_SHOP_URL . "/404/");
}
//set $categoryID
if (isset($_GET["categoryID"]) || isset($_POST["categoryID"])) $categoryID = isset($_GET['categoryID']) ? $_GET['categoryID'] : $_POST['categoryID'];
else $categoryID = 0;
$categoryID = (int)$categoryID;
//$productID
if (isset($_GET['productID']) || isset($_POST['productID'])) $productID = isset($_GET['productID']) ? $_GET['productID'] : $_POST['productID'];
//and different vars...
if (isset($_GET["register"]) || isset($_POST["register"])) $register = isset($_GET["register"]) ? $_GET["register"] : $_POST["register"];
if (isset($_GET["update_details"]) || isset($_POST["update_details"])) $update_details = isset($_GET["update_details"]) ? $_GET["update_details"] : $_POST["update_details"];
if (isset($_GET["order"]) || isset($_POST["order"])) $order = isset($_GET["order"]) ? $_GET["order"] : $_POST["order"];
if (isset($_GET["check_order"]) || isset($_POST["check_order"])) $check_order = isset($_GET["check_order"]) ? $_GET["check_order"] : $_POST["check_order"];
if (isset($_GET["proceed_ordering"]) || isset($_POST["proceed_ordering"])) $proceed_ordering = isset($_GET["proceed_ordering"]) ? $_GET["proceed_ordering"] : $_POST["proceed_ordering"];
if (!isset($_SESSION["vote_completed"])) $_SESSION["vote_completed"] = array();
//checking for proper $offset init
$offset = isset($_GET["offset"]) ? $_GET["offset"] : 0;
if ($offset < 0 || $offset % CONF_PRODUCTS_PER_PAGE) $offset = 0;
// sort order
if (isset($_GET["sort"])) {
    switch ($_GET["sort"]) {
        case "name":
            $_SESSION["sort"] = "name";
        break;
        case "Price":
            $_SESSION["sort"] = "Price";
        break;
        case "in_stock":
            $_SESSION["sort"] = "in_stock";
        break;
        case "product_code":
            $_SESSION["sort"] = "product_code";
        break;
        case "customers_rating":
            $_SESSION["sort"] = "customers_rating";
        break;
        default:
            $_SESSION["sort"] = CONF_SORT_PRODUCT;
        break;
    }
    $_GET["order"] = strtoupper($_GET["order"]);
    switch ($_GET["order"]) {
        case "ASC":
            $_SESSION["order"] = "ASC";
        break;
        case "DESC":
            $_SESSION["order"] = "DESC";
        break;
        default:
            $_SESSION["order"] = CONF_SORT_PRODUCT_BY;
        break;
    }
} else {
    if (!isset($_SESSION["sort"])) $_SESSION["sort"] = CONF_SORT_PRODUCT;
    if (!isset($_SESSION["order"])) $_SESSION["order"] = CONF_SORT_PRODUCT_BY;
}
//    $smarty -> assign("sort", $_SESSION["sort"]);
//    $smarty -> assign("order", $_SESSION["order"]);
define("CURR_USD", 1);
define("CURR_EUR", 1);
if (CONF_CURRENCY_AUTO == 1) {
    if (getAddrByHost("www.cbr.ru", 1)) getCURRENCY('http://www.cbr.ru/scripts/XML_daily.asp');
}
$smarty->assign("product_category_path", "");
// -------------SET SMARTY VARS AND INCLUDE SOURCE FILES------------//
if (isset($productID)) //to rollout categories navigation table
$categoryID = db_r('SELECT categoryID FROM ' . PRODUCTS_TABLE . ' WHERE productID=' . $productID) or die(db_error());
//set Smarty main page
$f_cnt = file("./core/aux_pages/live_counts");
$out_cnt = implode("", $f_cnt);
$smarty->assign("live_counts", $out_cnt);
//assign core Smarty variables
$smarty->assign("lang_list", $lang_list);
$smarty->assign("lang_list_count", count($lang_list));
if (isset($_SESSION["current_language"])) $smarty->assign("current_language", $_SESSION["current_language"]);
// - following vars are used as hidden in the customer survey form
$smarty->assign("categoryID", $categoryID);
if (isset($productID)) $smarty->assign("productID", $productID);
if (isset($_GET["currency"])) $smarty->assign("currency", $_GET["currency"]);
if (isset($_GET["user_details"])) $smarty->assign("user_details", $_GET["user_details"]);
if (isset($_GET["aux_page"])) $smarty->assign("aux_page", $_GET["aux_page"]);
if (isset($_GET["show_price"])) $smarty->assign("show_price", $_GET["show_price"]);
if (isset($_GET["adv_search"])) $smarty->assign("adv_search", $_GET["adv_search"]);
if (isset($_GET["searchstring"])) $smarty->assign("searchstring", $_GET["searchstring"]);
if (isset($register)) $smarty->assign("register", $register);
if (isset($order)) $smarty->assign("order", $order);
if (isset($check_order)) $smarty->assign("check_order", $check_order);
//set defualt main_content template to homepage
$smarty->assign("main_content_template", "home.tpl.html");
if (isset($_POST['token'])) {
    $url = 'http://ulogin.ru/token.php?token=' . $_POST['token'] . '&host=' . CONF_SHOP_URL;
    $authData = legosp_http_request($url);
    $authData = json_decode($authData, true);
    $em = '';
    if (isset($authData['email']) && trim($authData['email'])) $em = ' or cust_email=\'' . $authData['email'] . '\'';
    if (DB_CHARSET == 'cp1251') {
        if (isset($authData['first_name'])) $authData['first_name'] = Utf8Win($authData['first_name']);
        else $authData['first_name'] = '';
        if (isset($authData['last_name'])) $authData['last_name'] = Utf8Win($authData['last_name']);
        else $authData['last_name'] = '';
    }
    $custID = db_r('select count(*) FROM ' . CUST_TABLE . ' WHERE (provider=\'' . $authData['network'] . "' and openID='" . $authData['uid'] . "')" . $em);
}
// includes all .php files from includes/ dir
foreach(glob(INCLUDE_DIR . "*.php") as $php_file) include ($php_file);
$includes_dir = './css/css_' . CONF_COLOR_SCHEME . '/includes/';
if (is_dir($includes_dir)) foreach(glob($includes_dir . "*.php") as $php_file) include ($php_file);
if (isset($_SERVER["HTTP_REFERER"]) && !strpos($_SERVER["HTTP_REFERER"], 'cart')) $_SESSION["go_back"] = $_SERVER['HTTP_REFERER'];
if (isset($_SESSION['go_back'])) $go_back = $_SESSION['go_back'];
else $go_back = "";
$smarty->assign("go_back", $go_back);
if (isset($_GET['debug'])) $smarty->debugging = true;
$smarty->display("./css/css_" . CONF_COLOR_SCHEME . "/theme/index.tpl.html");
?> 