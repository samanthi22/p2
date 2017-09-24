<?php require('pay_bill.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Bill Splitter</title>
	<link rel="stylesheet" type="text/css" href="bill.css">
	<link href="https://fonts.googleapis.com/css?family=Asap+Condensed" rel="stylesheet">

</head>
<body>
<h1>Bill Splitter</h1>

<form method='GET' action='/'>
<p><label for='people'>Split how many ways?</label><input type="text" name="people" id="people" value='<?=$people?>'></p>

<p><label for='tab'>How much was the tab? </label><input type="text" name="tab" id="tab" value='<?=$tab?>'></p>

<p><label for='tip_amount'>How was the service?</label><select name='tip_amount' id='tip_amount'><option value="18">Good (18% tip) </option><option value="20"> Excellent (20% tip) </option>
</select></p>

<p><b>Round up?</b> <input type="checkbox" name="round_up" id="round_up" value="yes"><label for="round_up"> Yes </label></p>
<p>
<input type="submit" value="Calculate"></p>
</form>

<div class="display">Every owes <span class="amount"><?=$each_pay ?> </span>and if you are paying for your girlfriend's meal you owe <span class="amount"><?=$double_amount?></span></div>
<!-- amount if paying for oneself and another (double what everyone owes) -->
</body>
</html>