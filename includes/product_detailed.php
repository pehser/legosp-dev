<?php
/*****************************************************************************
 *                                                                           *
 * Shop-Script FREE                                                          *
 * Copyright (c) 2005 WebAsyst LLC. All rights reserved.                     *
 * Lego Edition SP                                                           *
 * Copyright (c) 2011 Sergey Piekhota. All rights reserved.                  * 
 *                                                                           *
 ****************************************************************************/

	// product detailed information view


	if (isset($_POST["vote"]) && isset($productID)) //vote for a product
	{
		if (!isset($_SESSION["vote_completed"][ $productID ]) && isset($_POST["mark"]) && $_POST["mark"])
		{
			$q = db_query("UPDATE ".PRODUCTS_TABLE." SET customers_rating=(customers_rating*customer_votes+'".(int)$_POST["mark"]."')/(customer_votes+1), customer_votes=customer_votes+1 WHERE productID='".$productID."'") or die (db_error());
		}
		$_SESSION["vote_completed"][ $productID ] = 1;
	}
        
        if ($_POST['review'] && isset($productID))
        {
         if ((isset($_SESSION['cust_id']) && !isset($_POST["captcha"])) || ($_POST["captcha"] == $_SESSION['captcha']))  
         {
          
           if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["review"]))
           {
                      
                        if (!CONF_REVIEW_LINK && preg_match("#(https?|ftp)://\S+[^\s.,> )\];'\"!?]#", $_POST["review"])) 
                        {
                            $jstext=PRODUCT_REVIEW_ADD_NOT_LINK;
                            if (DB_CHARSET!='cp1251') $jstext=win2utf($jstext); 
                            echo "<script language=\"JavaScript\">alert('".$jstext."');</script>";  
                            return FALSE;
                               
                        }
                        
                        $new_review = str_replace("\n","<br />\n",$_POST["review"]);
                        $new_review = preg_replace("'<script[^>]*?>.*?</script>'si","",$new_review);
			$areview['productID']=(int)$productID;  
                        $areview['username']=preg_replace("'<script[^>]*?>.*?</script>'si","",$_POST["name"]);
                        $areview['email']=preg_replace("'<script[^>]*?>.*?</script>'si","",$_POST["email"]);
                        $areview['review']=$new_review;
                        add_field(REVIEW_TABLE, $areview); 
                        $smarty->assign("review_saved", "yes");
                        if (CONF_REVIEW_MODER) echo "<script language=\"JavaScript\">alert('".PRODUCT_REVIEW_ADD_OK_MODER."');</script>"; 
                        else echo  "<script language=\"JavaScript\">alert('".PRODUCT_REVIEW_ADD_OK."');</script>"; 
                        

		        //notification for administrator
		        $adm .= "\n".CUSTOMER_FIRST_NAME.": ".$_POST["name"]."\n".CUSTOMER_EMAIL.": ".$_POST["email"]."\n".PRODUCT_REVIEW_MESSAGE.":\n".$_POST["review"];
                        $Subj=PRODUCT_REVIEW_NOTIFICATION_SUBJECT;
                        if (DB_CHARSET!='cp1251')
                        { 
                          $adm = win2utf($adm);  
                          $Subj= win2utf($Subj);   
                        }  
                        $from['mail']=CONF_GENERAL_EMAIL;
                        $from['name']=CONF_SHOP_NAME;   
                        phpmailer(CONF_GENERAL_EMAIL, $from, $Subj, $adm);   
 		        unset($_SESSION['securimage_code_value']['default']);
		//header("Location: ".$_SERVER['HTTP_REFERER']);
		        $smarty->assign("main_content_template", "product_detailed.tpl.html");

           }
         }  
         
        }  
	if (isset($productID) && $productID>0)
	{

			$smarty->assign("main_content_template", "product_detailed.tpl.html");

			$q = db_query("SELECT ".PRODUCTS_TABLE.".categoryID, ".PRODUCTS_TABLE.".name, ".PRODUCTS_TABLE.".description, customers_rating, Price, ".PRODUCTS_TABLE.".picture, in_stock, thumbnail, customer_votes, big_picture, list_price, productID, product_code, brief_description, ".PRODUCTS_TABLE.".hurl, accompanyID, ".PRODUCTS_TABLE.".meta_title, ".PRODUCTS_TABLE.".meta_keywords, ".PRODUCTS_TABLE.".meta_desc, ".PRODUCTS_TABLE.".brandID, ".BRAND_TABLE.".name, ".BRAND_TABLE.".hurl, ".PRODUCTS_TABLE.".canonical, ".CATEGORIES_TABLE.".hurl, ".BRAND_TABLE.".comment, ".PRODUCTS_TABLE.".h1 FROM ".PRODUCTS_TABLE." LEFT JOIN ".BRAND_TABLE." USING (brandID) JOIN ".CATEGORIES_TABLE." ON ".PRODUCTS_TABLE.".categoryID=".CATEGORIES_TABLE.".categoryID WHERE productID='".$productID."' and ".PRODUCTS_TABLE.".enabled='1'") or die (db_error());
                        
			$a = db_fetch_row($q);
                        if ($a) //product found
			{
				$smarty->assign("meta_title", $a[16]);
				$smarty->assign("meta_keywords", $a[17]);
				$smarty->assign("meta_desc", $a[18]);
				$smarty->assign("rel_canonical", $a[22]);
                                $variant=array(); 
                                $sql2="SELECT po.* FROM ".PRODUCT_OPTIONS_TABLE." as po,".PRODUCT_OPTIONS_V_TABLE." as pov where po.`optionID`=pov.`optionID` and pov.productID=".$productID;
                                if (CONF_SHOW_PRODUCT_VARIANTS_INSTOCK==='0') $sql2 .= ' and pov.count>0 '; 
                                $sql2 .=' group by po.`optionID` order by po.sort_order';
                                $p2=db_arAll($sql2); 
                                foreach ($p2 as $opions)
                                {
                                 $sql_v= "select ovv.variantID,ovv.name,pov.* from ".PRODUCT_OPTIONS_VAL_TABLE." as ovv,".PRODUCT_OPTIONS_V_TABLE." as pov where ovv.variantID = pov.`variantID` and  ovv.optionID =".$opions['optionID']." AND pov.productID =".$productID;
                                 if (CONF_SHOW_PRODUCT_VARIANTS_INSTOCK==='0') $sql_v .= ' and pov.count>0 '; 
                                 $sql_v .=" GROUP BY ovv.`variantID` order by ovv.sort_order";         
                                 $variant[$opions['optionID']]['var']=db_arAll($sql_v); 
                                 $variant[$opions['optionID']]['name']=$opions["name"];   
                                 $variant[$opions['optionID']]['productID']=$productID;
                                }  
                                $sql_p="select picture from ".PRODUCT_OPTIONS_V_TABLE." where `default`=1 and `picture` is not NULL AND `picture` != '' and `productID`=".$productID.' LIMIT 1';
                   $rezult=db_query($sql_p); 
                   $rezult=mysql_fetch_row($rezult); 
                   $p_default=$rezult[0]; 
                   $rez=$variant; 
                   $smarty->assign("p_default", $p_default);  
                   $smarty->assign("options2", $rez);    
                                 

				//update several product fields
				if (!file_exists("./products_pictures/".$a[5])) $a[5] = 0;
				if (!file_exists("./products_pictures/".$a[7])) $a[7] = 0;
				if (!file_exists("./products_pictures/".$a[9])) $a[9] = 0;
                                $a['date']=$a['26'];  
				$a[31] = $a[24];
				$a[32] = $a[25];

				if ($a[14] == "") {$a[14] = $a[11];}
 
				if ($a[21] != "" && CONF_CHPU) {$a[19] = REDIRECT_BRAND."/".$a[21]."about/";} else {$a[19] = "index.php?about&amp;brands=".$a[19];}
				if ($a[23] != "" && CONF_CHPU) {$a[23] = REDIRECT_CATALOG."/".$a[23]."about/";} else {$a[23] = "index.php?about&amp;category=".$a[0];}
                                $a[real]=$a[4];
                                $a[4]=round($a[4]/CURRENCY_val,2);
                                $a[10]=round($a[10]/CURRENCY_val,2); 
                                
				$a[24] = show_price($a[4]);
				$a[25] = show_price($a[10]);
				$a[26] = show_price($a[10]-$a[4]); //you save (value)
				if ($a[10]) $a[27] = ceil(((($a[10]-$a[4])/$a[10])*100)); //you save (%)

				#$a[29]= round($a[4]/CURR_USD);  //usd
				#$a[30]= round($a[4]/CURR_EUR);  //eur

				if (($a[6] > 0) && (CONF_SHOW_ADD2CART > 0)) {$a[28]=1;}
				else 
				    if ((CONF_SHOW_ADD2CART_INSTOCK > 0) && (CONF_SHOW_ADD2CART > 0))
					{$a[28]=1;}
				    else {$a[28]=0;}
                                
				$smarty->assign("product_info", $a);


			//calculate a path to the category
				$path = array();
				$curr = $categoryID;
				do
				{
					$q = db_query("SELECT parent, name, hurl FROM ".CATEGORIES_TABLE." WHERE categoryID='".$curr."'") or die (db_error());
					$row = db_fetch_row($q);
					if ($row[2] != "") {$tmp = REDIRECT_CATALOG."/".$row[2];} else {$tmp = "index.php?categoryID=".$curr;}

					$curr = $row[0]; //get parent ID
					$row[0] = $tmp;
					$path[] = $row;
				} while ($curr);
				//now reverse $path
				$path = array_reverse($path);

				if ($a[14] !="" && CONF_CHPU) {$row[0] = REDIRECT_PRODUCT."/".$a[14];} else {$row[0] = "index.php?productID=".$a[11];}
				$row[1] = $a[1];
				$path[] = $row;

				$smarty->assign("product_category_path",$path);

			//searching reviews
                                $sql="SELECT * FROM ".REVIEW_TABLE." WHERE productID='".$productID."'";
                                if (CONF_REVIEW_MODER) $sql .=' and moder=1 '; 
                                $sql .=" ORDER BY date_time DESC"; 
				$q = db_query($sql) or die (db_error());
				$i=0;
				$reviews=array();
				while ($res=mysql_fetch_row($q))
				    { 
					$reviews[$i] = $res;
					$i++;
				    }
				$smarty->assign("reviews", $reviews);
				
			//searching accompanyID
				if ($a[15]) 
				   {$ac=str_replace(" ","",$a[15]);
				    $ac=explode(",",$ac);
				    $accomp=array();
				    $i=0;
				    $s = "";

				    while ($i<count($ac)-1)
					{ $s .= "productID=$ac[$i] OR ";
					  $i++;
					}
				    $s .= "productID=$ac[$i]";

				    $qac = db_query("SELECT productID, categoryID, name, thumbnail, brief_description, hurl FROM ".PRODUCTS_TABLE." WHERE enabled='1' AND (".$s.")") or die (db_error());

				    while ($acc = db_fetch_row($qac))
					{
					if ($acc[5] != "" && CONF_CHPU) {$acc[5] = REDIRECT_PRODUCT."/".$acc[5];} else {$acc[5] = "index.php?productID=".$acc[0];}
					$accomp[]=$acc;
					}

				    $smarty->assign("accompany",$accomp);
				   }

			//searching all products in category

				$q = db_query("select productID, categoryID, name, thumbnail, price from ".PRODUCTS_TABLE." where categoryID='".$a[0]."' and enabled='1' ORDER BY productID ASC") or die (db_error());
				$out = array();
				$i=0;
				while ($row = db_fetch_row($q))
				 {
					$out[$i][0] = $row[0]; //productID
					$out[$i][1] = $row[2]; //name
					$out[$i][2] = $row[3]; //picture
					$out[$i][3] = $row[4]/CURRENCY_val; //price
					$i++;
				 }
				$smarty->assign("product_all", $out);
				$smarty->assign("product_all_count", $i);

                	//more product photos
                   		$q = db_query("SELECT picture, description FROM ".THUMB_TABLE." WHERE productID='".$a[11]."'") or die (db_error());
                    		$i=0;
                      		while ($qe=mysql_fetch_array($q))
					{ 
                        		$pic[$i] = $qe["picture"];
                        		$desc[$i] = $qe["description"];
                        		$i++;
                                    	}
                    		if (isset($pic))
					{
                        		$smarty->assign("product_thumb", $pic);
                        		$smarty->assign("product_desc", $desc);
                    			}
                       
			}
			else
			{
				//product not found
				header("Location: http://".CONF_SHOP_URL."/404/");
				exit;
			}
                       
	}
#$smarty->debugging = true;

?>