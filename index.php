<!DOCTYPE html>
<html>
<head>
	<title>Bill Splitter</title>
	<link rel="stylesheet" type="text/css" href="bill.css">
	<link href="https://fonts.googleapis.com/css?family=Asap+Condensed" rel="stylesheet">
</head>
<body>
<h1>Bill Splitter</h1>

<form>
<p>Split how many ways? <input type="text" name="people"></p>

<p>How much was the tab? <input type="text" name="amount"></p>

<p>How was the service? <select name="tip"><option value="18">Good (18% tip) </option><option value="20"> Excellent (20% tip) </option>
</select></p>

<p><b>Round up?</b> <input type="checkbox" name="round_up"> Yes </p>
<p>
<input type="submit" value="Calculate"></p>
</form>

<!-- amount if paying for oneself and another (double what everyone owes) -->
</body>
</html>