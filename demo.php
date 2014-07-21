<html>
<body>
	<?php
		require_once('./main.php');
		$aes = new Security(true);
		$encodeData = $aes->encrypt('188');
		echo $encodeData;

		$encodeData = $aes->decrypt($encodeData);
		echo $encodeData;
	?>
</body>
</html>