<!DOCTYPE html>
<html lang= 'en'>
	<head>
	 	<meta charset="utf-8">
		<title>ShopifyTest</title>
	 	<meta name="description" content="CodePen">
        <meta name="author" content="Emmanuel Emokpae3">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
	</head>

<div id="header">
	<h2>Stay up to date with ecommerce trends</h2>
	<h2>with Shopify's newsletter</h2>
</div>

<h4>Registration Details</h4>	


<?php

$okay = TRUE;


// Validate the email address:
			if (empty($_POST['email'])) {
					print '<p class="error"> Please enter your email.</p>';
					$okay = FALSE;
				} else {
					$email = $_POST['email'];

					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
						print '<p class="error"> Please enter a valid email address</p>';
						$okay = FALSE;
					}
				}

// If there were no error, print a success message:
			if ($okay) {
				print '<h2 class="success"> You have been successfully registered.</h2>';
				print '<h3>Here is the information you entered:</h3>';
				print '<p>Email is: ' . $_POST['email'] . '</p>';
				print '<p>Interest: ' . $_POST['Interest'] . '</p>' ;
			} 



$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
  echo "<a href='$url'>BACK</a>"; 

?>

</div>
</body>
</html>