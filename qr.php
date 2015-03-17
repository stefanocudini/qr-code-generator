<?php
if(isset($_GET['t'])):
$text = urldecode(trim($_GET['t']));
$filename = './qrimage/'.md5($text).'.png';

if(!file_exists($filename))
{
	require("phpqrcode/trunk/qrlib.php");
	QRcode::png($text, $filename, 'Q', 6, 0);
	chmod($filename,0775);
	file_put_contents('./qrimage/files.log',$text."\n".$filename."\n\n",FILE_APPEND);
}
echo $filename;
#header("Content-type: image/png");
#readfile($filename);

endif;
?>
