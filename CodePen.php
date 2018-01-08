<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ShopifyTest</title>
        <meta name="description" content="CodePen">
        <meta name="author" content="Emmanuel Emokpae">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
<div id="wrapper">	
<div id="header">
	<h2>Stay up to date with ecommerce trends</h2>
	<h2>with Shopify's newsletter</h2>
</div>

<hr size="2" color="#7AB55C">
<br/>

<div id="content">
	<p>Subscribe for free marketing tips</p>

		<form action="formoutput.php" id="registration" method="post">
			<label>
				<input type="text" name="email" id="email" placeholder="Email Address" size="30">
			</label>

			<label>
            	<select name="Interested" id="interest" style="">
                	<option value="Interested">Interested in.....</option> 
                	<option value="Front-end development">Front-end development</option>
                	<option value="Back-end development">Back-end development</option>
                	<option value="Software developer">Software developer</option>
            	</select>
        	</label>    
	
			<p>Please enter a valid email address</p>
			<br/>	
			<button type="submit" onClick="return validate()">Sign up now</button>
		</form>
</div>

<div id="foot">
		<footer><u>Unsubscribe</u></footer>
</div>
</div>

</body>
</html>
