<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento senza titolo</title>
<style>
	@import url('qr.css');
</style>
</head>

<body>

<div>
	<h4>Generatore codice QR</h4>
</div>

<div id="copy"><a href="http://labs.easyblog.it/">Labs</a> &bull; <a rel="author" href="http://labs.easyblog.it/stefano-cudini/">Stefano Cudini</a></div>

<form id="form1" method="get" action="qr.php">
	<input type="text" id="t" name="t" size="50" value="" />
	<br />
	<label>
	<input type="submit" name="Submit" value="Genera" />
	</label>
	<div class="hr">
		<div class="ar"></div>
	</div>
	<div id="out"></div>
</form>

<script src="/js/jquery-1.4.2.min.js"></script>
<script>
$(function() {

	$('#form1').submit(function() {
		var text = $('#t').val();
		var out$ = $('#out');
		if($.trim(text)!='')
		{
			out$.html('<img src="loader.gif" />');
			$.get('qr.php', {t: text}, function(img) {
				out$.children('img').attr({ src: img });
			});
		}
		return false;
	});

});
</script>
<script type="text/javascript" src="/labs-common.js"></script>

</body>
</html>
