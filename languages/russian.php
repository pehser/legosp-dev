<?php
/*****************************************************************************
 *                                                                           *
 * LegoSP - lego.shop-script.org                                             *
 * Copyright (c) 2012 Sergey Piekhota. All rights reserved.                  * 
 *                                                                           *
 ****************************************************************************/
 
 
//language file

//		RUSSIAN		//

//default character set, that will be used
if (DB_CHARSET=='cp1251')
define('DEFAULT_CHARSET', 'windows-1251');
else define('DEFAULT_CHARSET', 'utf-8');
define('LINK_TO_HOMEPAGE', '�������');
define('PRODUCTS_BEST_CHOISE', '��� ������');
define('MORE_INFO_ON_PRODUCT', '���������...');
define('MORE_ABOUT', '���������...');
define('MORE_ABOUT_PRODUCT', '��������');
define('NO_ABOUT', '�������� �����������');
define('ENLARGE_PICTURE', '���������...');
define('ADD_TO_CART_STRING', '��������');
define('LIST_PRICE', '������ ����');
define('CURRENT_PRICE', '���� ����');
define('YOU_SAVE', '�� ���������');
define('IN_STOCK', '�� ������');
define('VOTING_FOR_ITEM_TITLE', '���� ������');
define('MARK_EXCELLENT', '�������!');
define('MARK_GOOD', '������');
define('MARK_AVERAGE', '������');
define('MARK_POOR', '�����');
define('MARK_PUNY', '����� �����');
define('VOTE_BUTTON', '�������!');
define('VOTES_FOR_ITEM_STRING', '�������');
define('NAVIGATOR_LEFT', '�����');
define('NAVIGATOR_RIGHT', '������');
define('HOT_NEW', '������� �������');

define('Your_order_number', '������ ������ �������� �����');
define('QUESTION_UNSUBSCRIBE', '�������?');
define('ADMIN_SETTINGS_CPU', '�������� ���');
define('ADMIN_EDIT', '�������������');

define('ADMIN_ORDER_TOV', '�������� ���');
define('ADMIN_ORDER_EXCEL', 'Export � Excel');

define('LOGOUT_LINK', '����� �� ������...');
define('ADMINISTRATE_LINK', '>> ����������������� <<');
define('ADMIN_CONF_EMAILSMTP','������������ SMTP');

define('ANSWER_YES', '��');
define('ANSWER_NO', '���');
define('SAVE_BUTTON', '���������');
define('DELETE_BUTTON', '�������');
define('CLOSE_BUTTON', '�������');
define('CANCEL_BUTTON', '������');
define('UPDATE_BUTTON', '�����������');
define('ADD_BUTTON', '��������');
define('ADMIN_ENABLED', '���.');

define('STRING_BACK_TO_SHOPPING', '��������� � ��������');
define('STRING_SHOW', '����������');
define('STRING_PRESENT', '� �������');
define('STRING_PRESENT_SELECT', '�������� �������');
define('STRING_PRINT_ORDER', '����������� �����');
define('STRING_NUMBER', '�����');
define('STRING_RELATED_ITEMS', '�����������');
define('STRING_NUMBER_ONLY', '������ �����');
define('STRING_EMPTY_CATEGORY', '��� �������');
define('STRING_NO_ORDERS', '��� �������');
define('STRING_NO_USERS', '��� �������������');
define('STRING_SEARCH', '�����...');
define('STRING_phrase_SEARCH', '����� ��� ������');
define('STRING_GO_SEARCH', '�����');
define('STRING_HOWSEARCH', '��� ������?');
define('STRING_LANGUAGE', '����');
define('STRING_MANUFACTURER', '�������������');
define('STRING_BRANDS', '�������������');
define('NOT_SELECTED', '�� �������');
define('STRING_MODEL', '������');
define('STRING_PRICELIST', '�����-����');
define('DOWNLOAD_PRICE','������� ����� � ������� MS Excel');

define('STRING_GREETINGS', '����� ����������');
define('STRING_FOUND', '������� ');
define('STRING_NO_MATCHES_FOUND', '������ �� �������');
define('STRING_PRODUCTS', '�����(��)');
define('STRING_ORDER_ID', '����� ������');
define('STRING_ORDER_ID_MAIL', '��� ����� �');
define('STRING_ORDER_PLACED', '������� �� ��� �����!');
define('STRING_PLACE_ORDER', '�������� �����!');
define('STRING_NEXT', '����');
define('STRING_PREVIOUS', '����');
define('STRING_SHOWALL', '�������� ���');
define('STRING_REQUIRED', '<font style="color: #F00">*</font> ���� ����������� ��� ����������');
define('STRING_CONTACT_INFORMATION', '��������');
define('STRING_CONTACT_SEND_MESSAGE', '�� ����� ������ ��������� ��� ��������� ���������������� ������ �������� �����:');
define('STRING_ADRESS_INFORMATION', '��� ��� �����');
define('STRING_MORE_ABOUT', '��������...');
define('STRING_SEND_MAIL', '�������� ������');
define('STRING_SEND', '���������');
define('STRING_SEND_TEXT', '����� ���������');
define('STRING_MAIL_FROM_SITE', '������ � �����');
define('STRING_SEND_CAPCHA', '�������� ���');
define('STRING_SEND_ERROR', '<font style="color: #C00">������ �������� ���������</font>');

define('STRING_CATEGORY_SHOW', '�������� ������ ���������');
define('STRING_CATEGORY_HIDE', '������ ������ ���������');
define('STRING_DOP_INFO', '�������������� ����������');
define('STRING_BLOG', '����');
define('STRING_FORUM_SUPPORT', '����� ���������');
define('STRING_FEEDBACK', '�������� �����');
define('STRING_HELP', '������');
define('STRING_USER_NAME', '��� ������������');
define('STRING_default','�� ���������');




define('CART_CONTENT_EMPTY', '(��� �������)');
define('CART_CONTENT_NOT_EMPTY', '�����(��): ');
define('CART_TITLE', '�������');
define('CART_CLEAR', '��������');
define('CART_PROCEED_TO_CHECKOUT', '�������� �����');
define('CART_EMPTY', '���� ������� �����');

define('PRODUCT_IN_STOCK', '� �������');
define('PRODUCT_NO_IN_STOCK', '�� �����');

//table titles

define('TABLE_PRODUCT_NAME', '��������');
define('TABLE_PRODUCT_QUANTITY', '����������');
define('TABLE_PRODUCT_COST', '����');
define('TABLE_PRODUCT_SUMM', '�����');
define('TABLE_TOTAL', '�����');
define('TABLE_ORDER_TIME', '����� ������');
define('TABLE_ORDERED_PRODUCTS', '���������� ������');
define('TABLE_ORDER_TOTAL', '��������� ������');
define('TABLE_CUSTOMER', '����������');
define('ORDER_EDIT', '�������������� ������');


//different admin strings

define('ADMIN_TITLE', '�����������������');
define('ADMIN_PAGES_FIRST','������');
define('ADMIN_PAGES_PREV','�����');
define('ADMIN_PAGES_NEXT','���������');
define('ADMIN_PAGES_LAST','�����');

define('ADMIN_WELCOME', '<p><font class=big>����� ���������� � ����� �����������������!</font><p>����������� ���� ��� ������� � �������� ����������������� �����.');
define('ADMIN_NEW_ORDERS', '����� ������');
define('ADMIN_ORDERS_SEARCHP','�������� �������� � �����:');
define('ADMIN_CATEGORIES', '���������');
define('ADMIN_CATEGORIES_NAME', '������������');
define('ADMIN_ON', '���.');
define('ADMIN_PRODUCTS', '������');
define('ADMIN_CATALOG', '�������');
define('ADMIN_PRESENTS', '�������');
define('ADMIN_PRESENT_SELECT', '��������� ���������� �������� �������');
define('ADMIN_DISCOUNT_VALUE', '������ �� �����');
define('ADMIN_DISCOUNT', '���� ������');
define('ADMIN_DISCOUNT_STRING', '������');
define('ADMIN_REVIEW', '������');
define('ADMIN_ORDER_T12', '����� ����-12');
define('ADMIN_ORDER_COMPLITE', '��������');
define('ADMIN_ORDER_INCOMPLITE', '�� ��������');
define('ADMIN_COMPLITE_ORDERS', '����������� ������');
define('ADMIN_PRESENT_VAL', '�� �����');
define('ADMIN_INDEX_PAGE', '������� ��������');
define('ADMIN_MAIN_PAGES', '������� ��������');
define('ADMIN_CONTACT_PAGE', '��������');
define('ADMIN_MORE_ABOUT', '������ ��������');
define('ADMIN_MORE', '�������������');
define('ADMIN_INFORMATION', '����������');
define('ADMIN_SETTINGS', '���������');
define('ADMIN_SELECT', '�������');
define('ADMIN_SETTINGS_GENERAL', '�����');
define('ADMIN_SETTINGS_APPEARENCE', '����������');
define('ADMIN_SETTINGS_IMAGES', '�����������');
define('ADMIN_CUSTOMERS_AND_ORDERS', '������');

define('ADMIN_ABOUT_PAGE', '� ��������');
define('ADMIN_SHIPPING_PAGE', '������');
define('ADMIN_SITE_MAP', '����� �����');
define('ADMIN_NEWS', '�������');
define('ADMIN_NEWS_ALL', '��� �������');
define('ADMIN_NEWS_ADD', '��������');
define('ADMIN_NEWS_TITLE', '���������');
define('ADMIN_NEWS_TEXT', '�����');
define('ADMIN_NEWS_DATE', '����');
define('ADMIN_NEWS_BRIEF', '������� ����������');
define('ADMIN_NEWS_EDIT', '��������/�������������');
define('ADMIN_NEWS_READ', '�����...');
define('ADMIN_NEWS_PICTURE', '����');
define('ADMIN_NEWS_DELETE', '�������');
define('ADMIN_NEWS_ON', '���.');
define('ADMIN_NEWS_ONHOME', '�������� ������� �� �������');
define('ADMIN_NEWS_ONHOME_COUNT', '���������� �������� �� �������');
define('ADMIN_PAGES_ONHOME', '�������� ������ �� �������');
define('ADMIN_PAGES_ONHOME_COUNT', '���������� ������ �� �������');
define('ADMIN_BRANDS_ALL', '��� �������������');
define('ADMIN_BRAND_COMMENT', '��� ���������� �� ������');
define('ADMIN_PRICE_SHOW_COUNT', '���������� ����� ������ �� ��������');
define('ADMIN_USERS', '����������');

define('ADMIN_USERS_EDIT', '�������������� ������ ����������');



define('ADMIN_PAGES', '������');
define('ADMIN_PAGES_TITLE', '����������');
define('ADMIN_PAGE_BACK', '� ����������');
define('ADMIN_PAGE_ALL', '��� ������');
define('ADMIN_PAGE_ADD', '��������');
define('ADMIN_PAGE_TITLE', '���������');
define('ADMIN_PAGE_TEXT', '�����');
define('ADMIN_PAGE_DATE', '����');
define('ADMIN_PAGE_BRIEF', '������� ����������');
define('ADMIN_PAGE_EDIT', '��������/�������������');
define('ADMIN_PAGE_READ', '�����...');
define('ADMIN_PAGE_PICTURE', '����');
define('ADMIN_PAGE_DELETE', '�������');
define('ADMIN_PAGE_ON', '���.');

define('ADMIN_MINIMAL', '����������� �����');
define('ADMIN_MINIMAL_COUNT', '����������');
define('ADMIN_MINIMAL_SUMM', '����� ������');
define('ADMIN_MINIMAL_PRODUCT', '��������� �����');
define('ADMIN_MINIMAL_COST', '�� �����');

define('ADMIN_IMAGE', '�����������');
define('ADMIN_IMAGE_SIZE', '������ �����������');
define('ADMIN_IMAGE_SMALL', '��������� ����������');
define('ADMIN_IMAGE_NORMAL', '������� ����������');
define('ADMIN_IMAGE_BIG', '������� ����������');

define('ADMIN_TIMES', '������ ������');
define('ADMIN_SHOW_MENU', '���������� ����');
define('ADMIN_FLOAT_QUANTITY', '��������� ������� ���������� ������ � ������');
define('ADMIN_AUX_INFO', '������� ��������');
define('ADMIN_AUX_PAGES', '�������������� ��������');
define('ADMIN_BACK_TO_SHOP', '� ������������� ����� ...');
define('ADMIN_SORT_ORDER', '������� ����������');
define('ACCESS', '���� � ������ ����������');
define('ACCESS_LOGIN', '�����');
define('ACCESS_LOGOUT', '�����');
define('ACCESS_LOGIN_NAME', '�� ����� ��� ');
define('ACCESS_PASS', '������');
define('ACCESS_ENTER', '����');
define('ACCESS_ADMIN', '�������������');
define('ACCESS_ERROR', '�������� ����� ��� ������.');

define('ADMIN_LOGIN_PASSWORD', '������ � �����������������');
define('ADMIN_CHANGE_LOGINPASSWORD', '�������� ����� � ������ ��������������');
define('ADMIN_CURRENT_LOGIN', '�����');
define('ADMIN_OLD_PASS', '������ ������');
define('ADMIN_NEW_PASS', '����� ������');
define('ADMIN_NEW_PASS_CONFIRM', '����������� ����� ������');
define('ADMIN_UPDATE_SUCCESSFUL', '���������� ������ �������!');
define('ADMIN_UPDATE_ERROR', '<font style="color: red;"><b>��� ���� ��� �������������� ����� '.CONF_ADMIN_FILE.' �/��� '.CONF_ADMIN_FILE_ACCESS.' ������������ �� � ������.</b></font>');
define('ADMIN_NO_SPECIAL_OFFERS', '����-����������� �� �������');
define('ADMIN_NO_PRESENT', '������� �� �������');
define('ADMIN_ADD_SPECIAL_OFFERS', '�������� � ������ ����-�����������');
define('ADMIN_SPECIAL_OFFERS_DESC', '����-����������� ������������ �� ������� ������ ��������.<br>
������� �������� �������, ������� ����� �������� ��� ����-�����������<br>
�� ������ � ���������� <a href="admin.php?dpt=catalog&sub=products">"������"</a>, ������� �� ������ <span class="btn btn-mini"><i class="icon-star"></i></span> � ������� �������.<br>
� ����-����������� ����� ������� ������ ������ � �����������.');
define('ADMIN_PRESENT_DESC', '������� ������������� ����������� � ������� ��� ���������� �������� ����� ����� ������<br>�������� ����� � �������
�� ������ � ���������� <a href="admin.php?dpt=catalog&sub=products">"������"</a>, ������� �� ������ <span class="btn btn-mini"><i class="icon-heart"></i></span> � ������� �������.<br>');
define('ADMIN_ROOT_WARNING', '<font style="color: #F00">��� ������, ����������� � �����, �� ����� �������������!</font>');
define('ADMIN_ABOUT_PRICES', '���� ��������� �� ������ ������ � ������� ��� ������');
define('ADMIN_SHOP_NAME', '�������� ��������');
define('ADMIN_SHOP_DESCRIPTION', '�������� ');
define('ADMIN_SHOP_KEYWORDS', '�������� ����� ');
define('ADMIN_SHOP_URL', 'URL ��������');
define('ADMIN_SHOP_EMAIL', '���������� email ����� ������ ��������');
define('ADMIN_ORDERS_EMAIL', 'Email, �� ������� ����� ������������ ����������� � �������');
define('ADMIN_SHOW_ADD2CART', '�������� ����������� ���������� ������� � ������� � ���������� �������');
define('ADMIN_SHOW_ADD2CART_INSTOCK', '��������� ��������� � ������� ��� ���������� �� ������');
define('ADMIN_SHOW_PRODUCT_INSTOCK', '���������� ����� ��� ���������� �� ������');
define('ADMIN_SHOW_PRODUCT_VARIANTS_INSTOCK', '���������� ���. ��������� ��� ���������� �� ������');
define('ADMIN_SHOW_BESTCHOICE', '���������� �������� ���������� ������ � ������ ����������');
define('ADMIN_MAX_PRODUCTS_COUNT_PER_PAGE', '������������ ���������� ������� �� ��������');
define('ADMIN_MAX_NEWS_COUNT_PER_PAGE', '������������ ���������� �������� �� ��������');
define('ADMIN_MAX_PAGES_COUNT_PER_PAGE', '������������ ���������� ������ �� ��������');
define('ADMIN_MAX_COLUMNS_PER_PAGE', '���������� �������� ��� ������ �������');
define('ADMIN_MAX_HITS', '������������ ���������� ��������� "����� ������"');
define('ADMIN_SCROLL_HITS', '���������� ������������ ��������� "����� ������"');
define('ADMIN_HITS_SETTINGS', '��������� ����� ������');
define('ADMIN_HITS_FRIQ', '������� ����� ������� (��.)');
define('ADMIN_HITS_SPEED', '�������� ����� ������� (��.)');
define('ADMIN_HITS_TYPE', '��� ������');

define('ADMIN_MAIN_COLORS', '�����');
define('ADMIN_COLOR', '����');
define('ADMIN_COLOR_BODY', '���� �����(Body)');
define('ADMIN_COLOR_VOTE', '��������� �����������');
define('ADMIN_COLOR_IMAGE', '��� ����������');
define('ADMIN_COLOR_SCHEME', '������');
define('ADMIN_COLOR_IMPORT', '����� ������� �� ������');
define('ADMIN_SPECIAL_OFFERS', '����������� �����������');


define('ADMIN_CATEGORY_IMPORT_DIR', '�� �������� �������');
define('ADMIN_CATEGORY_TITLE', '�������');
define('ADMIN_CATEGORY_TITLE_PR', '���������');
define('ADMIN_CATEGORY_NEW', '������� ����� ���������');
define('ADMIN_CATEGORY_PARENT', '������������ ���������:');
define('ADMIN_CATEGORY_MANUAL_INPUT', '������ ����');
define('ADMIN_CATEGORY_MOVE_TO', '����������� �:');
define('ADMIN_CATEGORY_NAME', '�������� ���������:');
define('ADMIN_CATEGORY_COUNT_P', '���. �������');
define('ADMIN_CATEGORY_TITLE_H1', '��������� (H1):');
define('ADMIN_CATEGORY_LOGO', '�������');
define('ADMIN_CATEGORY_ROOT', '������');
define('ADMIN_CATEGORY_DESC', '�������� ��������');
define('ADMIN_CATEGORY_ALL', '��� ������');
define('ADMIN_CATALOG_CONF', '������');
define('ADMIN_FAST_ORDER', '������� ��������');
define('ADMIN_FAST_ORDER_COST', '������� �� ������� �����');
define('ADMIN_PRODUCT_TITLE', '������');
define('ADMIN_PRODUCT_TITLE_H1', '��������� (H1)');
define('ADMIN_PRODUCT_CARD', '�������� ������');
define('ADMIN_PRODUCT_NEW', '�������� ����� �����');
define('ADMIN_PRODUCT_CODE', '�������');
define('ADMIN_PRODUCT_NAME', '������������');
define('ADMIN_PRODUCT_RATING', '�������');
define('ADMIN_PRODUCT_PRICE', '����');
define('ADMIN_PRODUCT_LISTPRICE', '������ ����');
define('ADMIN_PRODUCT_INSTOCK', '�� ������');
define('ADMIN_PRODUCT_PICTURE', '����������');
define('ADMIN_PRODUCT_THUMBNAIL', '��������� ����������');
define('ADMIN_PRODUCT_BIGPICTURE', '������� ����������');
define('ADMIN_PRODUCT_DESC', '��������');
define('ADMIN_PRODUCT_BRIEF_DESC', '������� ��������');
define('ADMIN_PRODUCT_SOLD', '�������');
define('ADMIN_PRODUCT_COPY', '������� �����');
define('ADMIN_PRODUCT_THUMB', '�������������� ����');
define('ADMIN_PRODUCT_ACCOMPANY', '������������� ������');
define('ADMIN_PRODUCT_AUTORES', '������ ����������� �� ���������');
define('ADMIN_COMPANY_ABOUT', '��������� ��������');
define('ADMIN_COMPANY_NAME', '������ ������������');
define('ADMIN_COMPANY_ADDRESS', '�����');
define('ADMIN_COMPANY_PHONE', '�������');
define('ADMIN_COMPANY_DIRECTOR', '��������');
define('ADMIN_COMPANY_BUH', '������� ���������');
define('ADMIN_COMPANY_RS', '��������� ����');
define('ADMIN_COMPANY_INN', '���');
define('ADMIN_COMPANY_KPP', '���');
define('ADMIN_COMPANY_BANK', '����');
define('ADMIN_COMPANY_BANK_KOR', '�/�');
define('ADMIN_COMPANY_BANK_BIK', '���');

// �������������� ����� ������
define('ADMIN_FILE', '��� ����� �����:');
define('ADMIN_FILE_ACCESS', '��� ����� ����� 2 (����� �����������):');
define('ADMIN_FILE_INFO', '<i class="icon-warning-sign"></i> ���� �� ������ ������ ��� �������������� ����� ����� (������� ������� ��� ������ �����), ������� ����� �����, ���������, � ����� � ������ ������������ ��������� � ������� �����, ����� ����� ���������� ��������� �� �� ������� ������� � �������.');
define('ADMIN_MSG0', "<font color='red'>��� �������������� �����, ����� � ������ ������������� ���� ".CONF_ADMIN_FILE.".</font>");
define('ADMIN_MSG1', "<font color='red'>��� �������������� �����, ����� � ������ ������������� ���� ".CONF_ADMIN_FILE_ACCESS.".</font>");
define('ADMIN_MSG2', "<font color='red'>��� �������������� ����� ������, ����� � ������ ������� ���� .htaccess � ������ �������<br /><b>#administration url's<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RewriteRule admin$ admin.php [L]<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RewriteRule admin/$ admin.php [L]</b><br /> ��� ��������� ��� ����� �� ������ 0666.</font>");

define('ADMIN_PRODUCT_CHARACTER', '�������������� ���� �� ��������������');
define('ADMIN_PRODUCT_CHARACTER_ON', '(���.)');
define('ADMIN_CHARACTER', '�������������� ��������������');
define('ADMIN_CHARACTER_DESC', '��� ��������������');
define('ADMIN_CHARACTER_VAL', '��������');

define('ADMIN_TAGS_NAME', '�����');
define('ADMIN_TAGS_SHOW_COUNT', '������������ ���������� �����');
define('ADMIN_TAGS_SHOW_VIEW', '������������ Flash ��� ������ �����');
define('PRODUCTS_TAGGED', '�������� � �����');
define('CUSTOMER_EMAIL', 'Email:');
define('CUSTOMER_FIRST_NAME', '���:');
define('CUSTOMER_LAST_NAME', '�������:');
define('CUSTOMER_ZIP', '�������� ������:');
define('CUSTOMER_STATE', '�������:');
define('CUSTOMER_COUNTRY', '������:');
define('CUSTOMER_CITY', '�����:');
define('CUSTOMER_ADDRESS', '�����:');
define('CUSTOMER_COMMENT', '�����������:');
define('CUSTOMER_PHONE_NUMBER', '�������:');

define('EMAIL_CUSTOMER_COMMENT', '����������� ���������:');


define('ADMIN_PICTURE_NOT_UPLOADED', '(���������� �� ���������)');

//sort order

define('ADMIN_SORT', '��������� ����������');
define('ADMIN_SORT_CATEGORY', '����������� ��������� ��');
define('ADMIN_SORT_PRODUCT', '����������� ������ ��');
define('ADMIN_SORT_BY_CATEGORY', '������ ���������');
define('ADMIN_SORT_BY_PRODUCTS_COUNT', '���������� �������');
define('ADMIN_SORT_BY_PRODUCT', 'ID ��������');
define('ADMIN_SORT_BY_NAME', '��������');
define('ADMIN_SORT_BY_SOLD', '��������');
define('ADMIN_SORT_BY_INSTOCK', '�������');
define('ADMIN_SORT_BY_PRICE', '����');
define('ADMIN_SORT_BY_VOTES', '������������');
define('ADMIN_SORT_BY_CODE', '��������');
define('ADMIN_SORT_ASC', '�����������');
define('ADMIN_SORT_DESC', '��������');

define('ADMIN_SORT_BY_NAME_ASC', '�����: � - �');
define('ADMIN_SORT_BY_NAME_DESC', '�����: � - �');
define('ADMIN_SORT_BY_PRICE_DESC', '����: ���� - ����');
define('ADMIN_SORT_BY_PRICE_ASC', '����: ���� - ����');
define('ADMIN_SORT_BY_IN_STOCK_ASC','������� ������ - ������');
define('ADMIN_SORT_BY_RATING', '������������');
define('ADMIN_SORT_BY_IN_STOCK', '������� ������ - ������');

define('SORT', 'c���������� ��');

define('ADMIN_REVIEW_WRITE', '��������� ������');
define('ADMIN_REVIEW_LINK', '��������� ������ � �������');
define('ADMIN_REVIEW_MODER', '��������� �������'); 
define('ADMIN_REVIEW_GOOD','�������� �����������');  



//errors

define('ERROR_FAILED_TO_UPLOAD_FILE', '<b><font style="color: #F00">�� ������� �������� ���� �� ������. ���������,<br>��� �������� ����� �� �������� ������ �� ������� � ����� products_pictures/</font></b>');
define('ERROR_CANT_FIND_REQUIRED_PAGE', '<div class="alert alert-error">��������, ������������� �������� �� ��� ������ �� �������</div>');
define('ERROR_INPUT_EMAIL', '����������, ������� email');
define('ERROR_INPUT_PHONE', '����������, ������� ����� ��������');
define('ERROR_INPUT_NAME', '����������, ������� ���� ���');
define('ERROR_INPUT_COUNTRY', '����������, ������� ������');
define('ERROR_INPUT_CITY', '����������, ������� �������� ������');
define('ERROR_INPUT_ZIP', '����������, ������� �������� ������');
define('ERROR_INPUT_STATE', '����������, ������� �������');
define('ERROR_FILL_FORM', '����������, ��������� ��� ����');
define('ERROR_WRONG_PASSWORD', '�������� ������ ������');
define('ERROR_PASS_CONFIRMATION', '�������� ���������� ������');
define('ERROR_INPUT_LETTERSONLY','����������, ������� ������ ������� � ��������� �����!');
define('ERROR_FLASH_REQUARED', '<p>������ ����� WP Cumulus, ������� ��� ��������� <![CDATA[<noindex>]]><a href="http://www.adobe.com/go/getflashplayer" target="_blank" rel="nofollow">Flash Player 9</a><![CDATA[</noindex>]]> ��� ����.</p>');

//questions

define('QUESTION_DELETE_PICTURE', '������� ����������?');
define('QUESTION_DELETE_CONFIRMATION', '�������?');

//emails
define('EMAIL_ADMIN_ORDER_NOTIFICATION_SUBJECT', '����� �����!');
define('EMAIL_CUSTOMER_ORDER_NOTIFICATION_SUBJECT', '��� �����');
define('EMAIL_MESSAGE_PARAMETERS', 'Content-Type: text/plain; charset="'.DEFAULT_CHARSET.'"');
define('EMAIL_HELLO', '������������');
define('EMAIL_SINCERELY', '� ���������');
define('EMAIL_THANK_YOU_FOR_SHOPPING_AT', '������� �� ��� �����');
define('EMAIL_ORDER_WILL_BE_SHIPPED_TO', '��� ����� ����� ��������� �� ������');
define('EMAIL_OUR_MANAGER_WILL_CONTACT_YOU', '�� �������� � ���� ��� ������������� ������ � ��������� �����.');

//warnings

define('WARNING_DELETE_INSTALL_PHP', '<div class="top_err">���� <b>install.php</b> �� ������ �� ���������� �� ��������� Shop-Script. ��� ���������� ������� ��� �������.</div>');
define('WARNING_DELETE_FORGOTPW_PHP', '<div class="top_err">���� <b>forgot_password.php</b> �� ������ �� ���������� �� ��������� Shop-Script. ��� ���������� ������� ��� �������.</div>');
define('WARNING_WRONG_CHMOD', '<div class="top_err">�������� �������� ��� ����� cfg, �� �����������, � ����� ����� products_pictures � templates_c (���� ��� �� �� ���� ����� ����������).<br>���������� ���������� ���������� �������� �� ��� ��� ���������� (����)������ ������ � ���� ������ (��� �������, ��� �������� 775).</div>');

//currencies

define('ADMIN_CURRENCY', '������');
define('ADMIN_CURRENCY_VAL', '����');
define('ADMIN_CURRENCY_AUTO', '������������� ������������� ���� ����� � ����� ��');
define('ADMIN_CURRENCY_ID_LEFT', '����������� ������ ����� �� ����� (����)<br>(��������, "$")');
define('ADMIN_CURRENCY_ID_RIGHT', '����������� ������ ������ �� ����� (����)<br>(��������, "���.")');
define('ADMIN_CURRENCY_ISO3', '������������� ��� ������ ISO3<br>(��������, USD, EUR, RUR)');
define('ADMIN_CURRENCY_COURSE', 7.7);
define('ADMIN_CURRENCY_DEFAUL', '������ �� ���������');
define('STRING_CURRENCY', '������');

//other 

define('PRODUCT_REVIEW_TITLE', '������');
define('PRODUCT_REVIEW_NOTIFICATION_SUBJECT', '����� �����!');
define('PRODUCT_NO_REVIEWS', '� ������� �������� ��� �������. <br />����� �� �������� ������?');
define('PRODUCT_REVIEW', '�������� �����');
define('PRODUCT_REVIEW_HELLO', '��� ����� ����� ����� ���� ������!');
define('PRODUCT_REVIEW_NAME', '���� ���');
define('PRODUCT_REVIEW_EMAIL', 'E-mail');
define('PRODUCT_REVIEW_MESSAGE', '�����');
define('PRODUCT_REVIEW_WRITE', '�������� �����');
define('PRODUCT_REVIEW_ALL', '��� ������');
define('PRODUCT_REVIEW_ADD_OK', '���������� ��� \n��� ����� ������� ���������.');
define('PRODUCT_REVIEW_ADD_OK_MODER', '���������� ��� \n��� ����� ������� ���������.\n����� �������� ����������� �� ����� ����� ������ �������������.');
define('PRODUCT_REVIEW_ADD_NOT_LINK', '���������� ������ � ������� ���������.');


define('PRODUCT_ADMIN_REVIEW_NAME', '����������');
define('PRODUCT_ADMIN_REVIEW_EDIT', '�������������');

//mysql

define('ADMIN_MYSQL_DB', '���� ������ MySQL');
define('ADMIN_MYSQL_DB_SETTINGS', '���������');
define('ADMIN_MYSQL_DB_OP', '��������');
define('ADMIN_MYSQL_DB_HOST', '����');
define('ADMIN_MYSQL_DB_USER', '������������');
define('ADMIN_MYSQL_DB_PASS', '������');
define('ADMIN_MYSQL_DB_NAME', '��� ���� MySQL');
define('ADMIN_MYSQL_CHARSET', '��������� ���� ������');
define('ADMIN_MYSQL_DB_OPTIMIZE', '�������������� ����');
define('ADMIN_MYSQL_DB_EXPORT', '������� ����');
define('ADMIN_MYSQL_DB_IMPORT', '������������� ����');
define('ADMIN_MYSQL_DB_TEST', '��������� ����');
define('ADMIN_MYSQL_DB_WARNING', '<font style="color: #F00"><b>��������!</b></font> �� �������������
������������� ������ ������ ��������������. ��� �������������� �������
������� ���������� � ��������������.');
define('ADMIN_MYSQL_DB_IMPORT_COMPLITE', '������ ������� ��������, �������� ���������:');
define('ADMIN_MYSQL_DB_IMPORT_ERROR', '������! �������� ��������� �����. (������ # ');


//votes

define('STRING_VOTE', '���� ������');
define('ADMIN_VOTES', '�����������');
define('ADMIN_VOTES_NAME', '���������');
define('ADMIN_VOTES_ALL', '��� ����');
define('ADMIN_VOTES_ARCHIVE', '����� ���');
define('ADMIN_VOTES_QUEST', '������');
define('ADMIN_VOTES_NOW', '������� ����');
define('ADMIN_VOTES_COMPLITE', '� �����');
define('ADMIN_VOTES_INCOMPLITE', '������� �������');
define('ADMIN_VOTES_ANSER', '�������');
define('ADMIN_VOTES_RESULT', '����������');
define('ADMIN_VOTES_IP', '��������� ���������� ����� ���� � ������ IP');
define('ADMIN_VOTES_TOMAIL', '�������� ��������� ��������������');
define('ADMIN_VOTES_SEND', '����������!');
define('ADMIN_VOTES_EDIT','�������������� �����������');
define('ADMIN_VOTES_ADD','�������������� �����������');
//admin

define('ADMIN_SYSTEM', '�������');


//reports
define('ADMIN_REPORTS', '������');
define('ADMIN_REPORTS_SALES', '����� �� ���������');
define('ADMIN_REPORTS_CUSTOMER', '����������');
define('ADMIN_REPORTS_NAME_PRODUCTS', '������������ ������');
define('ADMIN_REPORTS_ALL', '���');



//order

define('ORDER_ORDERER', '��������');
define('ORDER_ADRESS', '�����');
define('ORDER_PHONE', '�������');
define('ORDER_EMAIL', 'e-mail');
define('ORDER_STATUSES', '������� �������');
define('ORDER_STATUS', '������');



//aux pages

define('ADMIN_AUX_ADD', '��������');
define('ADMIN_AUX_ALL', '��� ��������');
define('ADMIN_AUX_NAME', '��������');
define('ADMIN_AUX_TEXT', '����������');
define('ADMIN_AUX_DELETE', '�������');
define('ADMIN_AUX_WARNING', '��� �������� ����� �������� �� ������ ');

// on-line

define('ADMIN_ONLINE', 'On-line �');
define('STRING_ONLINE', '�����������');
define('ADMIN_ONLINE_SHOW_NAME', '���������� ���');
define('ADMIN_ONLINE_TYPE', '�����');
define('ADMIN_ONLINE_ON', '�������� online ��������');

define('ADMIN_ONLINE_WARNING', '<font style="color: #F00"><b>��������!</b></font> ��� ����������� �����������
online ������� ���������� ��������� ���������� ������ � ��������� �� ���� ����������� (��������� -> ������������).');

//share
define('ADMIN_SHARE', 'C�����');
define('ADMIN_SHARE_DISCOUNT', '������');
define('ADMIN_SHARE_CUPONS', '������');
define('ADMIN_SHARE_CUPON_FOR', '����� �� ������');

//shiping
define('ADMIN_SHIPPING', '��������');
define('ADMIN_SHIPPING_ADD', '�������� ������ ��������');
define('ADMIN_SHIPPING_WHERE', '�������� �');
define('STRING_SHIPPING_NONE', '--- ��������� ---');
define('STRING_SHIPPING_SELF', '���������');
define('STRING_SHIPPING', '��������');
define('STRING_SHIPPING_FREE', '���������');
define('ADMIN_SHIPPING_CONF', '���������');
define('ADMIN_SHIPPING_FREE', '���������� �������� �� �����');

//managers
define('ADMIN_MANAGER', '���������');

define('ADMIN_MANAGER_NAME', '���');
define('ADMIN_MANAGER_LOGIN', '�����');
define('ADMIN_MANAGER_PASS', '������');
define('ADMIN_MANAGER_ACCESS', '�����');
define('ADMIN_MANAGER_EMAIL', 'e-mail');
define('ADMIN_MANAGER_ACCESS_1', '��������');
define('ADMIN_MANAGER_ACCESS_2', '��������');
define('ADMIN_MANAGER_ACCESS_3', '�������������');
define('ADMIN_MANAGER_NAME_MAIL', '��� ������ ��������');
define('ADMIN_MANAGER_MAIL', '�������������');

//import
define('ADMIN_IMPORT', '������/Export');
define('ADMIN_IMPORT_BUTTON', '������');
define('ADMIN_IMPORT_FILE', 'XLS ����');
define('ADMIN_IMPORT_RESULT', '�������! �������� ���������: ');
define('ADMIN_IMPORT_TITLE', '���������� � ���������� �������');
define('ADMIN_IMPORT_METHOD', '����� �������');
define('ADMIN_IMPORT_NEW', '�������� ������ ����� ������ � �������');
define('ADMIN_IMPORT_UPDATE', '�������� ��� ������ � ��������');
define('ADMIN_IMPORT_UPDATE_PES','�������� ���� � ������������ ������� (�������� ����, ������� ������� ����������)');



//compare
define('COMPARE', '��������� ��������� �������');
define('COMPARE_NOT', '������ ����������, ��� ��������� ����� ������� ���� �� 2 ������!');
define('Back_to_compare','������� � ���������');
define('COMPARE_CLEAR', '�������� ���� ������');
define('ADD_COMPARE', '�������� ����� � ���������.');


//live_couns

define('ADMIN_LIVE_COUNTS', '��������');
define('ADMIN_LIVE_COUNTS_WARNING', '<font style="color: #F00"><b>��������!</b></font> ��� ����������� �����������
��������� ���� ��� ������ ���� �������� � {literal}{/literal}');

//payments
define('STRING_GO_PAYMENTS', '������� � ������');
define('STRING_PAYMENT_SELECT', '�������� ������ ������');
define('STRING_PAY', '��������');
define('STRING_PAY_ADDPRICE', '��������! ��� ��������� ������� ������ ��������� �������� ������� � ������� ');
define('ADMIN_PAYMENTS', '������� ������');
define('ADMIN_PAYMENTS_ON', '���.');
define('ADMIN_PAYMENTS_LOGIN', '����� (ID)');
define('ADMIN_PAYMENTS_PASS', '������');
define('ADMIN_PAYMENTS_ADDPRICE', '������� ��� ������ (%)');
define('ADMIN_PAYMENTS_NAME', '�������� ��������');
define('ADMIN_QIWI_TIME', '����� ��� ������');
define('ADMIN_QIWI_CHECKMOBILE', '�������� ������� ���������� ��������');
define('ADMIN_ROBOX_CURR', '������ �� ���������');
define('ADMIN_INTER_SHOPID', '������������ ��� ��������');
define('ADMIN_SBRF_PRINT', '����������� ���������');
define('ADMIN_PAYMENTS_COMMENT', '����������� � ������� �� ���������');

//redirect
define('ADMIN_REDIRECT', '���������������');
define('ADMIN_REDIRECT_SETTINGS', '��������� ���������������');
define('ADMIN_REDIRECT_CATEGORY', '���������');
define('ADMIN_REDIRECT_PRODUCTS', '��������');
define('ADMIN_REDIRECT_NEWS', '�������');
define('ADMIN_REDIRECT_PAGES', '������');
define('ADMIN_REDIRECT_BRANDS', '�������������');
define('ADMIN_REDIRECT_TAGS', '����');
define('ADMIN_REDIRECT_INFO', '����������');


define('ADMIN_ANY_VALUE','������������ ��������');


define('ADMIN_TEGS','����');

//Admin index
define('ADMIN_ORDERS', '������');
define('ADMIN_ORDER_ov', '�����(��)');
define('ADMIN_today', '�������');
define('ADMIN_yesterday', '�����');
define('ADMIN_This_month', '� ���� ������');
define('ADMIN_only', '�����');
define('ADMIN_products','��������');
define('ADMIN_total_number_products','����� ���������� ���������');
define('ADMIN_products_for_client',"�� ��� ���������<br>(�������� � ���������������� �����)");
define('ADMIN_category_products','��������� ���������');
define('ADMIN_CUST_WELCOME','������');
define('ADMIN_CUST_WELCOME_TITLE','��� ������� ������');
define('ADMIN_STAT_SHOP','���������� ��������');
define('ADMIN_Thank_you_for_using','������� ��� �����������');
define('Version','������ 6.2');

//Admin menu
define('ADMIN_MENU_categories','���������');
define('ADMIN_MENU_aux_pages','���. ��������');
define('ADMIN_MENU_console','�������');
define('ADMIN_MENU_Index','������� �������');
define('ADMIN_MENU_go_site','������� �� ����');
define('ADMIN_MENU_minimize','�������� ����');


/*define('ADMIN_MENU_products_variants','���������');
define('ADMIN_MENU_categories','���������');
define('ADMIN_MENU_categories','���������');*/


//
define('ADMIN_PRICING', '���������������');
define('ADMIN_PRICING_TITLE', '��������� ����');
define('ADMIN_PRICING_PROCECCING', '��������');
define('ADMIN_PRICING_VALUE', '��������');
define('ADMIN_PRICING_EDIT', '�������� ��� ���� ��');
define('ADMIN_PRICING_INC', '��������� ��');
define('ADMIN_PRICING_DEC', '��������� ��');
define('ADMIN_PRICING_OPTION', '�������������');
define('ADMIN_PRICING_OPTION_1', '�������� ������ ������� ����');
define('ADMIN_PRICING_OPTION_2', '�������� ��� ����');
define('ADMIN_PRICING_OPTION_3', '�������� ������� ���� � �������� ������� � ������ ����');

define('ADMIN_PRODUCTS_VARIANTS_GROUPS', '���. ���������');
define('ADMIN_PRODUCTS_VARIANTS', '�������� ���. ��������������');
define('ADMIN_ADD_NEW_OPTION', '�������� ��������������');
define('ADMIN_ADD_VALUE', '�������� ��������� ��������');
define('ADMIN_TAB_GENERAL', '�����');
define('ADMIN_TAB_customparams', '���. ��������������'); 

define('STRING_NEWPRICE', '���� � ������ ��������� �����'); 

define('ADVANCED_SEARCH_LINK', '����������� �����');
define('STRING_ADVANCED_SEACH_TITLE', '����������� �����');
define('STRING_UNIMPORTANT', '�������'); 
define('STRING_PRICE_FROM', '���� ��'); 
define('STRING_PRICE_TO', '���� ��'); 
define('STRING_SEARCH_IN_SUBCATEGORIES', '������ � �������������');  

define('STRING_ACTIONS', '��������');
define('STRING_couple','�������(��)');         
//useful

//CURRENCY
define('ADMIN_CURRENCY_TYPES', '������');
define('ADMIN_CURRENCY_NAME', '�������� ������');
define('ADMIN_CURRENCY_ID', '����������� � ��������');
define('ADMIN_CURRENCY__ISO3', '��� ������ ISO 3');
define('ADMIN_CURRENCY_EXCHANGERATE', '����');
define('ADMIN_CURRENCY_ADD', '��������');

//�����������
define('CUSTOMER_PASSWORD', '��� ������');
define('CUSTOMER_PASSWORD2', '��������� ������');
define('STRING_LOGIN_INFORMATION', '�����������');
define('STRING_LOGIN_LONG', '����� � �������');
define('STRING_LOGIN', '�����');
define('STRING_PROFILE', '�������');
define('STRING_REGISTER', '�����������');
define('CUST_WELCOME', '������������, ');
define('CUST_GOOT_REG', '������� �� �����������! �� ������� ������c��������.');
define('CUST_LOGOUT', '�����');
define('LOGIN_TITLE', '���� ��� �����������');
define('CUST_LOGIN', 'Email');
define('CUST_PASS', '������');
define('ERROR_CUST_PASSWORD', '�� ����� �������� ������');
define('ERROR_NO_SUCH_EMAIL', '������������ � ����� email �� ���������������');
define('STRING_REGISTER_INFORMATION', '����������� ����������');
define('EMAIL_CUSTOMER_REGISTER_NOTIFICATION_SUBJECT', '���� ��������������� ������');
define('STRING_SHIPPING_ADDRESS', '����� ��������');
define('NOTIFICATION_COMMENT_SUBJECT', '����� �����������');
define('ERROR_EMAIL_ALREADY_EXISTS', '���������� � ����� email ������� ��� ���������������.');
define('REMEMBER_PASSWORD', '��������� ������?');
define('STRING_SEND_REGISTER_FORM', '������������������');
define('STRING_OTHE_DATE', '��������� �� ��������� ������');
define('admin_menedger_deny','��������� ������������� ��� ������������: ');
define('ADMIN_ORDERS_SEARCHP_DESC','������ ����� ��� �� ����� ������ ��� � �� ��������');

define('prdset_min_qunatity_to_order','����������� ����� �������� (����)');
define('prdset_minimal_order_quantity','����������� �����');
define('str_items','��.');

//�������������� ������������ ��������� 
define('ADMIN_CATEGORY_APPENDED_PARENTS', '�������������� ������������ ���������');

//������� �������
define('ORDERS_HISTORY', '������� �������');

define('ORDERS_MIN_PRODUCT','���������� ������ ������ ���� �� ������ '); 

define('hidden','�����������'); 
define('not_hidden','���������� ����'); 
define('not_hidden_avtor','���������� ������ ��� �����������������'); 
define('not_hidden_user','���������� �� ��� ������������������'); 

define('NEW_BUYERS','����� ����������'); 
define('CONTROL_PANEL','������ ����������'); 


define('INDEX_cart', '���� ������');
define('LegoSP_title', 'LegoSP - ������ �������� �������');
define('menu_uslugi', '���� ������');
define('menu_forum', '�����');
define('menu_doc', '������������');
define('menu_katalog', '����������');
define('author', '�����');
define('Recent_Additions', '������ ����������');
define('Our_News', '���� �������');
define('Publications','����������');
define('Licenzia', '������������ ����������');
define('licenz_yes','� ���������� � ��������� ������� ������������� ����������.');
define('download_lego','������� Shop Script LegoSP 6.1');

define('ADMIN_PARAMETERS','���������');
define('ADMIN_META_TAGS','����-������');

define('ADMIN_OFF', '���.');
define('ADMIN_VOYTI','������� ����� � ������');
define('ADMIN_THEMES_SANYOK','������� LegoSP �� Sanyok');
define('ADMIN_EDIT_PROFILE','�������� �������');
define('TOOLTIP_VIBOR_CAT','�������� ��������� ��� ��������� �������, ������� ����������� ��������� ���������.');

?>