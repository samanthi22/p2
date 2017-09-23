<?php require('search.php');

<!DOCTYPE html>
<html>
<head>
	<title>Bill Splitter</title>
	<link rel="stylesheet" type="text/css" href="bill.css">
	<link href="https://fonts.googleapis.com/css?family=Asap+Condensed" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<h1>Bill Splitter</h1>

<form method='GET' action='/'>
<p><label for='people'> Split how many ways? </label><input type="text" name="people" id='people' value='a'></p>

<p><label for='tab'>How much was the tab? </label><input type="text" name="amount" id='amount' value='a'></label></p>

<p><label for='tip'>How was the service? </label><select name="tip"><option value="18">Good (18% tip) </option><option value="20"> Excellent (20% tip) </option>
</select></label></p>

<p><label><b>Round up?</b> <input type="checkbox" name="round_up"> Yes </label></p>
<p>
<input type="submit" value="Calculate"></p>
</form>

<!-- amount if paying for oneself and another (double what everyone owes) -->
</body>
</html>