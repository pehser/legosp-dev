<?php
if (defined("DB_CHARSET")) $db_charsetd=DB_CHARSET;
elseif (isset($_POST['db_charset'])) $db_charsetd=$_POST['db_charset'];
if ($db_charsetd=='cp1251')
$db_charset='CHARACTER SET cp1251 COLLATE cp1251_general_ci';
else
$db_charset='DEFAULT CHARSET=utf8';
	db_query("DROP TABLE IF EXISTS ".ORDERS_TABLE.";") or die (db_error());
	db_query("DROP TABLE IF EXISTS ".ORDERED_CARTS_TABLE.";") or die (db_error());
	db_query("DROP TABLE IF EXISTS ".PRODUCTS_TABLE.";") or die (db_error());
	db_query("DROP TABLE IF EXISTS ".CATEGORIES_TABLE.";") or die (db_error());
	db_query("DROP TABLE IF EXISTS ".SPECIAL_OFFERS_TABLE.";") or die (db_error());
	db_query("DROP TABLE IF EXISTS ".TAGS_TABLE.";") or die (db_error());
	db_query("DROP TABLE IF EXISTS ".PAGES_TABLE.";") or die (db_error());
	db_query("DROP TABLE IF EXISTS ".NEWS_TABLE.";") or die (db_error());
	db_query("DROP TABLE IF EXISTS ".THUMB_TABLE.";") or die (db_error());
	db_query("DROP TABLE IF EXISTS ".SHARE_TABLE.";") or die (db_error());
	db_query("DROP TABLE IF EXISTS ".REVIEW_TABLE.";") or die (db_error());
	db_query("DROP TABLE IF EXISTS ".BRAND_TABLE.";") or die (db_error());
	db_query("DROP TABLE IF EXISTS ".VOTES_TABLE.";") or die (db_error());
	db_query("DROP TABLE IF EXISTS ".VOTES_CONTENT_TABLE.";") or die (db_error());
	db_query("DROP TABLE IF EXISTS ".MANAGER_TABLE.";") or die (db_error());
        db_query("DROP TABLE IF EXISTS ".MANAGER_TABLE_DENY.";") or die (db_error());
	db_query("DROP TABLE IF EXISTS ".AUX_TABLE.";") or die (db_error());
	db_query("DROP TABLE IF EXISTS ".PAYMENT_TABLE.";") or die (db_error());
	db_query("DROP TABLE IF EXISTS ".PAYOPTION_TABLE.";") or die (db_error());
        db_query("DROP TABLE IF EXISTS ".PRODUCT_OPTIONS_TABLE.";") or die (db_error());
        db_query("DROP TABLE IF EXISTS ".PRODUCT_OPTIONS_VAL_TABLE.";") or die (db_error());
        db_query("DROP TABLE IF EXISTS ".PRODUCT_OPTIONS_V_TABLE.";") or die (db_error()); 
        db_query("DROP TABLE IF EXISTS ".CURRENCY_TABLE.";") or die (db_error()); 
        db_query("DROP TABLE IF EXISTS ".ORDER_STATUS_TABLE.";") or die (db_error());
        db_query("DROP TABLE IF EXISTS ".CUST_TABLE.";") or die (db_error());
        db_query("DROP TABLE IF EXISTS ".CATEGORIY_PRODUCT_TABLE.";") or die (db_error());   

          

	db_query("CREATE TABLE ".ORDERS_TABLE." (orderID INT PRIMARY KEY AUTO_INCREMENT, order_time DATETIME, cust_firstname VARCHAR(60), cust_lastname VARCHAR(60), cust_email VARCHAR(255), cust_country VARCHAR(30), cust_zip VARCHAR(30), cust_state VARCHAR(30), cust_city VARCHAR(70), cust_address LONGTEXT, cust_phone VARCHAR(30), status INT(2) NOT NULL DEFAULT '0', comment TEXT, manager INT, custID INT) ".$db_charset.";") or die (db_error());
	db_query("CREATE TABLE ".ORDERED_CARTS_TABLE." (id INT PRIMARY KEY AUTO_INCREMENT, productID VARCHAR(20) NOT NULL, orderID INT NOT NULL, name CHAR(255), Price FLOAT, Quantity FLOAT) ".$db_charset."") or die (db_error());
	db_query("CREATE TABLE ".PRODUCTS_TABLE." (productID INT PRIMARY KEY AUTO_INCREMENT, categoryID INT, name VARCHAR(255), description LONGTEXT, customers_rating FLOAT NOT NULL, Price FLOAT, picture VARCHAR(255), in_stock INT, thumbnail VARCHAR(255), customer_votes INT NOT NULL, items_sold INT NOT NULL, big_picture VARCHAR(255), enabled INT NOT NULL, brief_description LONGTEXT, list_price FLOAT, product_code CHAR(25), hurl VARCHAR (255), accompanyID VARCHAR(150), brandID INT (11), meta_title VARCHAR(255), meta_keywords VARCHAR(255), meta_desc VARCHAR(255), canonical VARCHAR (255), h1 VARCHAR (255), yml INT (1) DEFAULT 1, min_qunatity INT DEFAULT 1, managerID INT(11) DEFAULT NULL)  ".$db_charset.";") or die (db_error());
       
	db_query("CREATE TABLE ".CATEGORIES_TABLE." (categoryID INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(255), parent INT, products_count INT, description LONGTEXT, picture VARCHAR(255), products_count_admin INT, about TEXT, enabled INT, meta_title VARCHAR(255), meta_keywords VARCHAR(255), meta_desc VARCHAR(255), hurl VARCHAR(255), canonical VARCHAR (255), h1 VARCHAR (255), `hidden` INT( 1 ) NOT NULL DEFAULT '0', KEY `root_category` (`parent`)) ".$db_charset."") or die (db_error());
	db_query("CREATE TABLE ".SPECIAL_OFFERS_TABLE." (offerID INT PRIMARY KEY AUTO_INCREMENT, productID INT, sort_order INT) ".$db_charset."") or die (db_error());
	db_query("CREATE TABLE ".TAGS_TABLE." (id INT NOT NULL AUTO_INCREMENT, pid INT (11) DEFAULT NULL, tag VARCHAR (30) DEFAULT NULL, hurl VARCHAR (255), canonical VARCHAR (255), PRIMARY KEY (id)) ".$db_charset."") or die (db_error());
	db_query("CREATE TABLE ".PAGES_TABLE." (id INT PRIMARY KEY AUTO_INCREMENT, date DATE NOT NULL, title VARCHAR(255), text LONGTEXT, brief TEXT, Pict VARCHAR(50), enable INT, meta_title VARCHAR(255), meta_keywords VARCHAR(255), meta_desc VARCHAR(255), hurl VARCHAR(255), canonical VARCHAR (255)) ".$db_charset."") or die (db_error());
	db_query("CREATE TABLE ".NEWS_TABLE." (id INT PRIMARY KEY AUTO_INCREMENT, date DATE NOT NULL, title VARCHAR(255), text TEXT, brief TEXT, Pict VARCHAR(50), enable INT, meta_title VARCHAR(255), meta_keywords VARCHAR(255), meta_desc VARCHAR(255), hurl VARCHAR(255), canonical VARCHAR (255)) ".$db_charset."") or die (db_error());
	db_query("CREATE TABLE ".THUMB_TABLE." (`thumbID` INT PRIMARY KEY AUTO_INCREMENT,productID INT NOT NULL, picture VARCHAR(150), description VARCHAR(255)) ".$db_charset."") or die (db_error());
	db_query("CREATE TABLE ".REVIEW_TABLE." (reviewID INT PRIMARY KEY AUTO_INCREMENT, productID INT (11), username VARCHAR(50), email VARCHAR(50), review TEXT, date_time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,`moder` int(11) NOT NULL DEFAULT '0') ".$db_charset."") or die (db_error());
	db_query("CREATE TABLE ".BRAND_TABLE." (brandID INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(150), comment VARCHAR(50), Pict VARCHAR(255), description LONGTEXT, brief TEXT, enabled INT(1) DEFAULT '1', sort INT, meta_title VARCHAR(255), meta_keywords VARCHAR(255), meta_desc VARCHAR(255), hurl VARCHAR (255), canonical VARCHAR (255)) ".$db_charset."") or die (db_error());
	db_query("CREATE TABLE ".SHARE_TABLE." (id INT PRIMARY KEY AUTO_INCREMENT, type VARCHAR(25), type_val INT, value FLOAT, code VARCHAR(150),`default` tinyint(1) NOT NULL DEFAULT '0') ".$db_charset."") or die (db_error());
	db_query("CREATE TABLE ".VOTES_TABLE." (votesID INT PRIMARY KEY AUTO_INCREMENT, title VARCHAR(50), enable INT(11)) ".$db_charset."") or die (db_error());
	db_query("CREATE TABLE ".VOTES_CONTENT_TABLE." (votesID INT, ID INT PRIMARY KEY AUTO_INCREMENT, question VARCHAR(50), result INT(11)) ".$db_charset."") or die (db_error());
	db_query("CREATE TABLE ".MANAGER_TABLE." (ID INT PRIMARY KEY AUTO_INCREMENT, manager VARCHAR(255), password VARCHAR(255), access INT(11), email VARCHAR(255), online_type INT(11), online_num VARCHAR(255), online_name VARCHAR(255)) ".$db_charset."") or die (db_error());
        db_query("CREATE TABLE `".MANAGER_TABLE_DENY."` (`ID` int(11) NOT NULL AUTO_INCREMENT,`id_manager` int(11) DEFAULT NULL,`dpt` text,PRIMARY KEY (`ID`))  ".$db_charset."") or die (db_error());
	db_query("CREATE TABLE ".AUX_TABLE." (id INT PRIMARY KEY AUTO_INCREMENT, title VARCHAR(255), text TEXT, enable INT, meta_title VARCHAR(255), meta_keywords VARCHAR(255), meta_desc VARCHAR(255), hurl VARCHAR(255), canonical VARCHAR (255)) ".$db_charset."") or die (db_error());
	db_query("CREATE TABLE ".PAYMENT_TABLE." (payID INT (11) NOT NULL AUTO_INCREMENT, type VARCHAR(255), enabled TINYINT(1), PRIMARY KEY (payID)) ".$db_charset."") or die (db_error());
	db_query("CREATE TABLE ".PAYOPTION_TABLE." (id INT NOT NULL AUTO_INCREMENT, payID INT(11), payoption VARCHAR(255), payvalue VARCHAR(255), PRIMARY KEY (id)) ".$db_charset."") or die (db_error());
        
	
	db_query("CREATE TABLE IF NOT EXISTS `".ORDER_STATUS_TABLE."` (`statusID` int(11) NOT NULL AUTO_INCREMENT,`status_name` varchar(90) DEFAULT NULL,`sort_order` int(11) DEFAULT NULL,PRIMARY KEY (`statusID`)) ".$db_charset."") or die (db_error());
	
        //��� ���������        
        db_query("CREATE TABLE ".PRODUCT_OPTIONS_TABLE." (`optionID` int(11) NOT NULL auto_increment,`name` varchar(50) default NULL,`sort_order` int(11) default '0',PRIMARY KEY  (`optionID`)) ".$db_charset."") or die (db_error()); 
        db_query("CREATE TABLE ".PRODUCT_OPTIONS_VAL_TABLE." (`variantID` int(11) NOT NULL auto_increment,`optionID` int(11) NOT NULL,`name` varchar(255) default NULL,`sort_order` int(11) default '0',PRIMARY KEY  (`variantID`)) ".$db_charset."") or die (db_error()); 
        db_query("CREATE TABLE ".PRODUCT_OPTIONS_V_TABLE." (`variantID` int(11) NOT NULL,`productID` int(11) NOT NULL,`optionID` int(11) NOT NULL, `price_surplus` float NOT NULL DEFAULT '0',`default` int(11) NOT NULL DEFAULT '0', `picture` varchar(255) DEFAULT NULL, count int(11)) ".$db_charset.";") or die (db_error());  
        //������
        db_query("CREATE TABLE `".CURRENCY_TABLE."` (`CID` int(11) NOT NULL AUTO_INCREMENT,`Name` varchar(30) DEFAULT NULL,`code` varchar(7) DEFAULT NULL,`currency_value` float DEFAULT NULL,`where2show` int(11) DEFAULT NULL,`sort_order` int(11) DEFAULT '0',`currency_iso_3` char(3) DEFAULT NULL,PRIMARY KEY (`CID`)) ".$db_charset) or die (db_error());  
        //������������
        db_query("CREATE TABLE `".CUST_TABLE."` (`custID` int(11) NOT NULL AUTO_INCREMENT,`cust_password` varchar(255) DEFAULT NULL,`cust_email` varchar(130) DEFAULT NULL,`cust_firstname` varchar(30) DEFAULT NULL,`cust_lastname` varchar(30) DEFAULT NULL,`cust_country` varchar(30) DEFAULT NULL,`cust_zip` varchar(30) DEFAULT NULL,`cust_city` varchar(230) DEFAULT NULL,`cust_address` varchar(200) DEFAULT NULL,`cust_phone` varchar(30) DEFAULT NULL,`openID` varchar(20) DEFAULT NULL, `provider` varchar(30) DEFAULT NULL, `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`custID`)) ".$db_charset) or die (db_error());            
        db_query("CREATE TABLE IF NOT EXISTS `".CATEGORIY_PRODUCT_TABLE."` (`id` int(11) NOT NULL AUTO_INCREMENT,`productID` int(11) NOT NULL,`categoryID` int(11) NOT NULL, PRIMARY KEY (`id`)) ".$db_charset) or die (db_error()); 
        ?>