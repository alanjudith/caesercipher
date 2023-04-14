<?php
function encrypt($plaintext, $key)
{
	$result = "";
	for ($i = 0; $i < strlen($plaintext); $i++)
	{
		if (ctype_upper($plaintext[$i]))
			$result = $result.chr((ord($plaintext[$i]) + $key - 65) % 26 + 65);
	else
		$result = $result.chr((ord($plaintext[$i]) + $key - 97) % 26 + 97);
	}
	return $result;
}
$plaintext = "Alan Judith";
$key = 6;
echo "Text : " . $plaintext;
echo "\nShift:" . $key;
echo "\nCipher:" . encrypt($plaintext, $key);
?>