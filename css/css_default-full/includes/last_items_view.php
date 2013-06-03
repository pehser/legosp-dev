<?php
$title_last='¬ы смотрели';
if (DB_CHARSET == 'utf8') $title_last=win2utf($title_last);
define('LAST_VIEW_P', $title_last); // лимит выводимых позиций
define('LAST_ITEMS_LIMIT', 5); // лимит выводимых позиций
function get_product_list($item_list,$limit = "all", $this_product = FALSE)
{
$product_list = array();
if(($limit=="all")||($limit>count($item_list)))$limit = count($item_list)-1;
        for ($i=0;$i<$limit;$i++)
        {
           $sql='select productID,thumbnail,name,hurl from '.PRODUCTS_TABLE.' where productID='.$item_list[$i]; 
           if($product =db_arAll($sql))
            if(!$this_product||$this_product!=$product["productID"]) $product_list[] = $product[0];
        }
return $product_list;
}

// ƒобавить продукт в сессию
if (isset($productID) && $productID>=0 && !isset($_POST["review"]))
{
        if(isset($_SESSION["last_items_view"])&&$_SESSION["last_items_view"]!="")
        {
                $item_list = array_unique(explode(",",$_SESSION["last_items_view"]));
                $item_list_sort = array();
                foreach ($item_list as $item)
                {
                    if($item!=$productID) $item_list_sort[]=$item;
                }
            $item_list_sort[] = $productID;
            $_SESSION["last_items_view"] = implode(",",$item_list_sort);
        } else
        {
            $_SESSION["last_items_view"] = $productID;
        }
}
// ¬ывести продукты из сессии
if(isset($_SESSION["last_items_view"])&&$_SESSION["last_items_view"]!="")
{
$product_id_list = explode(",",$_SESSION["last_items_view"]);
if(isset($productID)) $product_list = get_product_list(array_reverse($product_id_list),LAST_ITEMS_LIMIT,$productID);
else $product_list = get_product_list(array_reverse($product_id_list),LAST_ITEMS_LIMIT,FALSE);
$smarty->assign("last_view_products",$product_list);
}
?>