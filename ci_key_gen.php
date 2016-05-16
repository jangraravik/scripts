<?php
/**
 * Generate an encryption key for CodeIgniter.
 * http://codeigniter.com/user_guide/libraries/encryption.html
 */
function generate_token ($len = 32){
	$chars = array(
		'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
		'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
		'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
		'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
		'0', '1', '2', '3', '4', '5', '6', '7', '8', '9'
	);
	shuffle($chars);
	$num_chars = count($chars) - 1;
	$token = '';
	// Create random token at the specified length.
	for ($i = 0; $i < $len; $i++)
	{
		$token .= $chars[mt_rand(0, $num_chars)];
	}
return $token;
}
?>
<!DOCTYPE html>
<html lang="en-us" dir="ltr">
<head>
<meta charset="utf-8">
<title>CodeIgniter encryption key generator</title>
</head>
<body>
<pre><code><?php echo '$config[\'encryption_key\'] = \'' . generate_token(32) . '\';'; ?></code></pre>
</body>
</html>
